<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function __construct(){
        parent::__construct();    
               $this->load->model('Checkout_Model');
    }
	public function index(){
		 if ($this->session->userdata['logged_in'] !== TRUE){
           redirect('users/login');
        }else{
			 $data = array(
			 	   'product_name' => "new order",
			    	'price'  => "120",
			        'cus_name'    => $this->session->userdata("first_name"),
			        'created'  =>date('d-m-y'),
			);
			   $orderid = $this->Checkout_Model->create( $data);
			   //print_r($data);die;
			  foreach ($this->cart->contents() as $items){
				$orderdeatilas = array(
			    'orders_id' =>$orderid,
			    'product_id' =>  $items['id'],
			    'quantity'  => $items['qty'],
			    'sub_total' =>$items['price']
			  );
				 $this->Checkout_Model->order_create($orderdeatilas);
			  }
			  $this->cart->destroy();
			  redirect("checkout/customers");
			 
        }
     }
    public function customers(){
          $data["country"] = $this->Checkout_Model->country();
          // print_r( $data["country"]);die;
    	  $this->load->view('customers',$data);
    }
    public function add(){
      	$data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'country' => $this->input->post('country'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'address' =>$this->input->post('address'),
                'pincode' =>$this->input->post('pincode'),
                'status' => 1
            );
        //print_r($data );die;
      		$add_coust = $this->Checkout_Model->customers($data);

      		if ($add_coust) {
      			$this->session->set_flashdata("success", "Your account was created.");
      				redirect("checkout/customers");
      		} else {
      			$this->session->set_flashdata("danger", "We ware unable to create your account");
             		redirect("checkout/customers");
      		}
    }
    public function list(){
      
    }
    
}
