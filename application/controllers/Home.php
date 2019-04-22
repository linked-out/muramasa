<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Home extends CI_Controller {
   public function __construct()
   {
        parent::__construct();
        $this->load->model('Post');   
   }
    
    public function index()
    {
        $posts = $this->Post->get();
        $data['posts'] = $posts;
        $this->load->view('navigation_bar');
        $this->load->view('home_view', $data);                    
    }           
    
}
        
    /* End of file  Home.php */
        
                            