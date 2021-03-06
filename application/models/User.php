<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }                   
    

    public function new($user){
        $this->db->insert('USER', $user); 

        if ($this->db->error()) {
            return false;
        }

        return true;
    }

    public function login($email, $password) {
        $this->db->select('PASSWORD');
        $this->db->from('USER');
        $this->db->where('email =', $email);

        $query = $this->db->get();

        if (!isset($query->result()[0])) {
            return false;
        }
        
        $result = $query->result()[0];

        if (password_verify($password, $result->PASSWORD)) {
            return true;
        } else {
            return false;
        }
    }

    public function self($email) {
        $this->db->select('*');
        $this->db->from('USER');
        $this->db->where('email = ', $email);

        $query = $this->db->get();
        return $query->result()[0];
    }

    public function get($id) {
        $this->db->select('*');
        $this->db->from('USER');
        $this->db->where('id = ', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function search($query) {
        $this->db->select('*');
        $this->db->from('USER');
        $this->db->like('email', $query, 'both');

        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id) {
        $this->db->where('user_id', $id);
        $this->db->delete('post');

        $this->db->where('user_id', $id);
        $this->db->delete('job');

        $this->db->where('id', $id);
        $this->db->delete('USER');
    }
}
                        
/* End of file User.php */
    
                        