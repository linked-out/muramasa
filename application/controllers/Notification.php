<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Notification extends CI_Controller {

    public function index()
    {
        $this->load->view('navigation_bar');    
        $this->load->view('notification_view');            
    }
        
}
        
    /* End of file  Notification.php */
        
                            