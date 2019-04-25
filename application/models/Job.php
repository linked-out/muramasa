<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Job extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('user_id', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function new($job)
    {
        $this->db->insert('post', $job);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('job');
    }

    public function edit($company_name, $title, $id)
    {
        $this->db->set('title', $title);
        $this->db->set('company_name', $company_name);
        $this->db->where('id', $id);
        $this->db->update('post');
    }
}
                        
/* End of file Job.php */
