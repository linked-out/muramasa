<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get()
    { 
        $this->db->select('*');
        $this->db->from('post');

        $query = $this->db->get();
        return $query->result();
    }

    public function new($post)
    {
        $this->db->insert('post', $post);
    }
}
                        
/* End of file Post.php */
