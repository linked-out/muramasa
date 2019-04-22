<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Profile extends CI_Controller {

    public function index()
    {
        $this->load->view('navigation_bar');
        $this->load->view('profile');                
    }

    public function other($id)
    {
        $this->load->view('navigation_bar');                
    }
        
}
        
    /* End of file  Profile.php */
        
                            