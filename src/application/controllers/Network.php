<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Network extends CI_Controller {

    public function index()
    {
        $this->load->view('navigation_bar');
        $this->load->view('network_view');
    }
        
}
        
    /* End of file  Network.php */
        
                            