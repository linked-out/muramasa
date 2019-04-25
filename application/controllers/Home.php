<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post');
    }

    public function index()
    {

        if (isset($this->session->is_login)) {
            if (!$this->session->is_login) {
                header('Location: ' . base_url('/login'));
            }
        } else {
            header('Location: ' . base_url('/login'));
        }
        $posts = $this->Post->get();
        $data['posts'] = $posts;
        $data['navbar_state'] = "home";
        $this->load->view('navigation_bar', $data);
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

    public function delete($id)
    {
        $this->Post->delete($id);
        $this->index();
    }

    public function edit()
    {
        $content = $this->input->post('content');
        $id = $this->input->post('id');

        $this->Post->edit($content, $id);

        $this->index();
    }
}
        
    /* End of file  Home.php */
