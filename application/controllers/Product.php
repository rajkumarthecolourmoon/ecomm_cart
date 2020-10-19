<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Product_Model');
    }
	public function index(){
		$this->load->view('product_view');
	}

	public function brand_filter(){
		$brand_id = $this->input->post("brand_id");
		$cat_id = $this->input->post("category_id");
	   $filter = $this->Product_Model->product_filter($brand_id,$cat_id);
	  		$output = "";
	  		if($filter){
	  			$output .= '<div class="row items">';
			      foreach ($filter as $row) {
			    $output .= '<div class="col-md-4">
					<figure class="card card-product-grid">
						<div class="img-wrap"> 
							<span class="badge badge-danger"> NEW </span>';
			  $output .= '<img name="image"  src="'.base_url('uploads/images/'.$row->images).'" />';
				$output .= '<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
						</div> <!-- img-wrap.// -->
						<figcaption class="info-wrap">
							<div class="fix-height">
								<a href="#" class="title" >'.$row->product_name.'</a>
								<div class="price-wrap mt-2">
									<span class="price">'. $row->price. '</span>
									<del class="price-old">$1980</del>
								</div> <!-- price-wrap.// -->
							</div>

							.<a href="javascript:void(0);" class="cart btn btn-primary text-center" 
							   data-id="<?php echo $row->id;?>" data-name="<?php echo $row->product_name?>"
							   data-price="<?php echo $row->price?>">Add to cart<i class="fas fa-shopping-cart"></i> </a>
						</figcaption>
					</figure>
				</div>';      
	  		}
	  		echo $output;
	  	}
	}
}
