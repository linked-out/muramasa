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
   
    public function post()
    {
        $content = $this->input->post('content');
        $user_id = $this->session->user->id;
        $post = array(
            'content' => $content,
            'user_id' => $user_id,
        );

        $this->Post->new($post);
        $this->index();
    }
}
        
    /* End of file  Home.php */
        
                            