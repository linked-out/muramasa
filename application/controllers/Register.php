<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');   
    }

    public function index()
    {
        $this->load->view("register_view");    
    }

    public function new()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = array(
            'firstname' => $firstname, 
            'lastname' => $lastname, 
            'email' => $email, 
            'password' => password_hash($password, PASSWORD_BCRYPT), 
        );

        $success = $this->User->new($user);
        if ($success) {
            header('Location: '. base_url('/login'));
        } else {
            $data["alert"] = "Registration failed: existed email";
            $this->load->view("register_view", $data);    
        }
    }
}
        
    /* End of file  Register.php */
        
                            