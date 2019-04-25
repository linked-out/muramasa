<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');   
    }

    public function index()
    {
        if (isset($this->session->is_login)) {
            if ($this->session->is_login) {
                header('Location: '. base_url('/home'));
            }
        }

        $this->load->view("login_view");                    
    }
    
    public function try()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $success = $this->User->login($email, $password);
        if ($success) {
            $this->session->user = $this->User->self($email);
            $this->session->is_login = true;
            header('Location: '. base_url('/home'));
        } else {
            $message = "Username or your Password is Incorrect";
            $data["alert"] = $message;
            $this->load->view("login_view", $data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        header('Location: '.base_url('/login'));
    }
}
        
    /* End of file  login.php */
        
                            
