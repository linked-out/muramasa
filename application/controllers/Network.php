<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Network extends CI_Controller {

    public function index()
    {
        $data['navbar_state'] = 'network';
        $this->load->view('navigation_bar', $data);
        $this->load->view('network_view');
    }

    public function my_network() {
        $data['navbar_state'] = 'network';
        $this->load->view('navigation_bar', $data);
        $this->load->view('my_network_view');
    }
}
        
    /* End of file  Network.php */
        
                            