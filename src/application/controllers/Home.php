<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {
    
    public function index()
    {
        $this->load->view('navigation_bar');
        $this->load->view('home_view');                    
    }           
    
}
        
    /* End of file  Home.php */
        
                            