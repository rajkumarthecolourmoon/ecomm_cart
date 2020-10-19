<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
              $this->load->model('Product_Model');
    }
	public function index()
	{
		$this->load->view('admin/brands');
	}
	public function add(){

		 $data = array(
            'brand_name' => $this->input->post('brand'),
           );
           $this->Product_Model->brand($data);
           $this->session->set_flashdata('success','add successfully');
           redirect("admin/brand");
	}
}
