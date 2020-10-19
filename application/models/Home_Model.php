<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {

	public function add_user($data){
		$query = $this->db->insert("users",$data);
		return $query;
	}
	public function email_exists($email){   
    $query = $this->db->get_where('users', ['email' => $email]);
    return $query->num_rows() > 0;
   }
   public function loginuser($data)
    { 
     $this->db->where('email', $data['email']);
        $this->db->where("password", $data['password']);
        // $this->db->where("status", 1);
       // echo $this->db->last_query();die;
        $query = $this->db->get('users');
        return $query;
    }
}
