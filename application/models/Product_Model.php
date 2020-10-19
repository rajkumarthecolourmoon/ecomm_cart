<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Model extends CI_Model {
  public function __construct()
    {
        parent::__construct();
       
    }
	
    public function upload($data)
	{
        $query = $this->db->insert('product',$data);
        //
        return $query;
        
    }
    public function get($search)
	{
        $this->db->select('*');
          $this->db->like('product_name',$search);
        $this->db->from("product");
        return $this->db->get()->result();
    }
    public function multiple_images($data){

       $query = $this->db->insert_batch('multipleupload',$data);
       //$this->db->last_query();die();
       return $query;
     }
     public function cart($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('id',$id);
        $query=$this->db->get();
     }
    public function pagenation($limit,$offset) {
        $query = $this->db->select('*')
                ->from('product')
                ->limit($limit,$offset)
                ->get();

        return $query->result_array();
    }
    public function record_count(){
        return $this->db->count_all("product");
    }
    public function get_search($search){
        $this->db->select('*');
         $this->db->like('product_name',$search);
         $query = $this->db->get('product');
          return $query->result();

        }
    public function brand($data){
        $query = $this->db->insert('brands',$data);
        return $query;
        
    }
    public function get_barnds()
    {
        $this->db->select('*');
        $this->db->from("brands");
        return $this->db->get()->result();
    }
      public function categories($data){
        $query = $this->db->insert('categories',$data);
        return $query;
        
    }
    public function get_categories()
    {
        $this->db->select('*');
        $this->db->from("categories");
        return $this->db->get()->result();
    }
    public function product_filter($brand_id,$cat_id){
              $this->db->select('*');
              if ($brand_id) {
                $this->db->where("product.brand_id",$brand_id);
              }
               if ($cat_id) {
                $this->db->where("product.cat_id",$cat_id);
              }
          //echo    $this->db->last_query();die();
              $query = $this->db->get("product");
              return $query->result();

    }
}

