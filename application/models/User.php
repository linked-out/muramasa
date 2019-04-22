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
    }

    public function login($email, $password) {
        $this->db->select('PASSWORD');
        $this->db->from('USER');
        $this->db->where('email =', $email);

        $query = $this->db->get();
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
        return $query->result();
    }

    public function get() {

    }

    public function search($query) {

    }
}
                        
/* End of file User.php */
    
                        