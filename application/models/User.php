<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User extends CI_Model {
                        
    public function new($user){
        $this->load->database();
        $this->db->insert('USER', $user); 
    }
}
                        
/* End of file User.php */
    
                        