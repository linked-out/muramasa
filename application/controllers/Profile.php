<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Profile extends CI_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->model('Job'); 
    }

    public function index()
    {
        $data['navbar_state'] = 'profile';
        $data['jobs'] = $this->Job->get($this->session->user->id);
        $this->load->view('navigation_bar', $data);
        $this->load->view('profile', $data);                
    }

    public function other($id)
    {
        $this->load->view('navigation_bar');                
    }

    public function postjob() {
        $user_id = $this->session->user->id;
        $title = $this->input->post('title');
        $company_name = $this->input->post('company');
        $job = array(
            'user_id' => $user_id, 
            'title' => $title,
            'company_name' => $company_name
        );

        $this->Job->new($job);
        $this->index();
    }

    public function deleteJob($id) {
        $this->Job->delete($id);
        $this->index();
    }

    public function editJob() {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $company_name = $this->input->post('company');
        $this->Job->edit($company_name, $title, $id);
        $this->index();
    }
        
}
        
    /* End of file  Profile.php */
        
                            