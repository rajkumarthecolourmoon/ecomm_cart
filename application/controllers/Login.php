<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Home_Model");
    }
    // public function index()
    // {
    //     $this->load->view('login');
    // }
    
    // public function login()
    // {
    //     $data = array(
    //     'email' => $this->input->post('email'),
    //   'password' =>md5($this->input->post('password')),
    //     'status' => $this->input->post('status'),
    //    );
    //     // print_r($data);die;
    //     $login = $this->Home_Model->loginuser($data);
    //     if ($login->num_rows()>0) {
    //         $data = $login->row_array();
    //         $user_id = $data['id'];
    //         $firstname  = $data['first_name'];
    //         $email = $data['email'];
       
    //         $users = array(
    //             'id' => $user_id,
    //             'first_name' => $firstname,
    //             'email' =>  $email,
    //             'logged_in' => true
    //        );
    //         $this->session->set_userdata($users);
           
    //         $this->session->set_flashdata('msg', 'login Successfully');
    //         redirect('home/index');
    //     } else {
    //         $this->session->set_flashdata('error', 'Username / Password Invalid');
    //         redirect('login');
    //     }
    // }
    // public function logout()
    // {
    //     $this->session->unset_userdata('logged_in');
    //     $this->session->set_flashdata('logout', 'logout Successfully..! please login');
    //     redirect('login');
    // }

    // public function change_password()
    // {
    //     $this->load->view('admin/password_change');
    // }
    // public function password_update()
    // {
    //     $this->form_validation->set_rules('oldpass', 'Old Password', 'callback_password_check');
    //     $this->form_validation->set_rules('new_password', 'New Password', 'required');
    //     // $this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[new_password]');
    //     if ($this->form_validation->run() == false) {
    //     }
    //     $id = $this->session->userdata('id');

    //     $newpass = $this->input->post('new_password');
    //     $this->Home_model->update_user($id, array('password' => md5($newpass)));
  
    //     $this->session->set_flashdata('success', 'change Successfully');

    //     redirect('admin/login/change_password');
        
    // }
   

    
    // public function password_check($oldpass)
    // {
    //     $id = $this->session->userdata('id');
    //     $user = $this->Home_model->get_pass($id);

    //     if($user->password !== md5($oldpass)) {
    //         $this->form_validation->set_message('password_check', 'The {field} does not match');
    //         return false;
    //     }

    //     return true;
    // }
}