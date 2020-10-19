<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_Model');
    }
	public function index()
    {
     
      $this->load->view('admin/product');
    }

    public function add(){
       // echo "string";die;
            if (!empty($_FILES['picture']['name'])) {
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('picture')) {
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                } else {
                    $picture = '';
                }
            } else {
                $picture = '';
            }
            
           $data = array(
            'product_name' => $this->input->post('product_name'),
            'images' => $picture,
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'status' => $this->input->post('status'),
           );
           $this->Product_Model->upload($data);
           $this->session->set_flashdata('success','Upload successfully');
           redirect("admin/product");
        //    print_r($data);die();
        
    }
}
