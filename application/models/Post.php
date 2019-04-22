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
        $this->db->select('post.id, content, user_id, email, firstname, lastname');
        $this->db->from('post');
        $this->db->join('USER', 'post.user_id = USER.id');

        $query = $this->db->get();
        return $query->result();
    }

    public function new($post)
    {
        $this->db->insert('post', $post);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('post');
    }
}
                        
/* End of file Post.php */
