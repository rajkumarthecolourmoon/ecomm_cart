<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_Model');
        $this->load->library('cart');
    }
	public function index()
	{
		$id = $this->input->post('id');
       $name = $this->input->post('name');
       $price = $this->input->post('price');
        $image = $this->input->post('image');
       $product = $this->Product_Model->get($id);
      
       $data = array(
            'id'      =>  $id,
            'qty'     => 1,
            'price'   => $price,
            'name'    => $name,
            
        );
        // print_r($data);die; 
        if($this->cart->insert($data)){
          redirect("show/cart");
        }else{ 
           redirect("show/cart");
        }
	}
	
	 public function show_cart(){
        $this->load->view('cart',$this->cart->contents());
    }
	 public function update_cart()
	{
    $i = 1;
  	  // $rowid =$this->input->post('id');
  	  // $price =$this->input->post('price');
  	  // $qty = $this->input->post('qty');
      foreach ($this->cart->contents() as $items) {
  	  $data = array(
  	    'rowid' =>$items['rowid'],
  	    'qty' => $_POST['qty' .$i],
  	  );
  	  $this->cart->update($data);
      $i++;
  }
	      redirect("show/cart","refresh");
	}
    public function delete_item(){
        $this->load->library('cart');
        $id = $this->input->post('id');
         $price =$this->input->post('price');
        
        $data = array(
            "rowid"  =>  $id,
            'qty'     => 0,
             'price' => $price
        );
       if($this->cart->update($data)){
         redirect("show/cart","refresh");
       }else{
           redirect("show/cart");
       }

    }
    function destroy() {
    $this->cart->destroy();
    redirect('cart');
}
}
