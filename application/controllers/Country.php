<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {
	 public function __construct(){
	        parent::__construct();    
	        $this->load->model('Checkout_Model');

      $this->load->database();
	    }
	public function index()
	{
		 // $data["country"] = $this->Checkout_Model->country();
		 // echo "<pre>";print_r($data["country"]);die;
        $this->load->view('customers',$data);
	}
	public function get_states(){
	   $country_id = $this->input->post('id',TRUE);
       $country = $this->Checkout_Model->fetch_state( $country_id)->result();
       print_r($country_id);die;
	}
}
