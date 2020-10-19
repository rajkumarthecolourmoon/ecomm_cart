<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_Model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
       
    }

    public function create($data){
   	 $query = $this->db->insert('orders',$data);
        return $query;
   }
    public function order_create($orderdeatilas){
   	 $query = $this->db->insert('order_items',$orderdeatilas);
        return $query;
   }
    public function customers($data){
   	 $query = $this->db->insert('customers',$data);
        return $query;
    }
    public function country(){
   	     $this->db->select('*');
         $this->db->order_by("country","ASC");
        $this->db->from("country");
        return $this->db->get()->result();
    }
    public function country_add($data){
       $query = $this->db->insert('country',$data);
        return $query;
    }
    public function fetch_state($country_id){
   
     $query = $this->db->get_where('state', array('country_id' => $country_id));
     //echo $this->db->last_query();die;
        return $query;

   }

}