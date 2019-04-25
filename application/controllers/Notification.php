<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Notification extends CI_Controller {

    public function index()
    {
        $data['navbar_state'] = 'notif';
        $this->load->view('navigation_bar', $data);    
        $this->load->view('notification_view');            
    }
        
}
        
    /* End of file  Notification.php */
        
                            