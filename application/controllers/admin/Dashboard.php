<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Checkout_Model');
    }
	public function index()
	{
		$this->load->view('admin/country');
	}
	public function country_add(){

    $data = array(
            'country' => $this->input->post('country'),
           );
           $this->Checkout_Model->country_add($data);
           $this->session->set_flashdata('success','add successfully');
           redirect("admin/dashboard");
	}
	public function state(){
		$this->load->view('admin/state');
	}
	public function state_add(){
		$country_id = $this->Checkout_Model->country();
		 $data = array(
            'state' => $this->input->post('state'),
           );
          $state = $this->Checkout_Model->state_add($data);
           $this->session->set_flashdata('success','add successfully');
           redirect("admin/dashboard/state");
	}
	public function city(){
		$this->load->view('admin/city');
	}
	public function city_add(){
			 $data = array(
            'city' => $this->input->post('city'),
           );
           $this->Checkout_Model->city_add($data);
           $this->session->set_flashdata('success','add successfully');
             redirect("admin/dashboard/city");
	}
}
