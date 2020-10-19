<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
         $this->load->model("Home_Model");
    }
	public function index()
	{
		$this->load->view('register');
	}

	public function add_user(){
        $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($set), 0, 12);
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'gender' => $this->input->post('gender'),
                'country' => $this->input->post('country'),
                'city' => $this->input->post('city'),
                'password' =>md5($this->input->post('password')),
                'verification_key' =>md5(uniqid($code)),
                'status' => $this->input->post('status')
            );
            // print_r($data);die;
            // $add = $this->Home_model->add_user($data);
             if (!$this->Home_Model->email_exists($data['email'])) {
             	if ($this->Home_Model->add_user($data)) {
             		 $this->session->set_flashdata("success", "Your account was created.");
             		 	redirect("login");
             	} else {
             		$this->session->set_flashdata("danger", "We ware unable to create your account");
             		redirect("users");
             	}
             	
             }else{
             	 $this->session->set_flashdata("email_exists", "The email address  already exists in the database. Please signin.");
                     redirect('users'); 
             }
        }
    public function login()
    {
        $this->load->view('login');
    }
    
    public function home(){
        $data = array(
        'email' => $this->input->post('email'),
      'password' =>md5($this->input->post('password')),
        'status' => $this->input->post('status'),
       );
        // print_r($data);die;
        $login = $this->Home_Model->loginuser($data);
         //print_r($data);die;
        if ($login->num_rows()>0) {
            $data = $login->row_array();
            $user_id = $data['id'];
            $firstname  = $data['first_name'];
            $email = $data['email'];
       
            $users = array(
                'id' => $user_id,
                'first_name' => $firstname,
                'email' =>  $email,
                'logged_in' => true
           );
            $this->session->set_userdata($users);
            $this->session->set_flashdata('msg', 'login Successfully');
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Username / Password Invalid');
            redirect('users/login');
        }
    }
    public function logout()
    {
        $this->load->driver('cache');
        $this->load->library('session');
        $this->session->set_userdata('id', FALSE);
        $this->session->sess_destroy();
        // $this->session->unset_userdata('id', FALSE);
        $this->session->set_flashdata('logout', 'logout Successfully..! please login');
        redirect('users/login');
    }

  
   
}
