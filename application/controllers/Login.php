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
        $this->load->view("login_view");                    
    }
    
    public function try()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $success = $this->User->login($email, $password);
        if ($success) {
            $this->session->user = $this->User->self($email);
            header('Location: '. base_url('/home'));
        } else {
            header('Location: '. base_url('/register'));
        }
    }
}
        
    /* End of file  login.php */
        
                            