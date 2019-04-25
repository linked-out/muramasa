<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Profile extends CI_Controller {

    public function index()
    {
        $data['navbar_state'] = 'profile';
        $this->load->view('navigation_bar', $data);
        $this->load->view('profile');                
    }

    public function other($id)
    {
        $this->load->view('navigation_bar');                
    }
        
}
        
    /* End of file  Profile.php */
        
                            