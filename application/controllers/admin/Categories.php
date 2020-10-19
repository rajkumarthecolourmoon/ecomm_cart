<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
              $this->load->model('Product_Model');
    }
	public function index()
	{
		$this->load->view('admin/categories');
	}
	public function add(){

		 $data = array(
            'cate_name' => $this->input->post('categories'),
           );
           $this->Product_Model->categories($data);
           $this->session->set_flashdata('success','add successfully');
           redirect("admin/categories");
	}
}
