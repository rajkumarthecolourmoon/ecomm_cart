<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_Model');
           
    }
	public function index(){
	$search = $this->input->post("search");
    $data["product"] = $this->Product_Model->get($search);
    $data["brands"] = $this->Product_Model->get_barnds();
    //print_r($data["brands"]);die;
		$this->load->view('home', $data);
	}
	
	public function product_list(){
       $this->load->library('pagination');
      	$data["brands"] = "Brands";
		$search = $this->input->post("search");
		$data["product"] = $this->Product_Model->get($search);
		$data["brands"] = $this->Product_Model->get_barnds();
        $data["categories"] = $this->Product_Model->get_categories();
    //print_r($data["brands"]);die;
        $config = [
            'base_url' => base_url('home/product_list'),
            'per_page' => 3,
            'total_rows' => $this->Product_Model->record_count(),
        ];
//print_r( $config['total_rows']);die;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item disabled">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $this->pagination->initialize($config); // model function
        $seeker = $this->Product_Model->pagenation($config['per_page'], $this->uri->segment(3)); //list of seeker
		$data["products"] = $this->Product_Model->get($config['per_page'],$search);
		//print_r($data["search"]);die;
		$this->load->view('product_view',$data);
	}

	// public function search(){

	// 	$search = $this->input->post("search");
	//     $data["search"] = $this->Product_Model->get_search($search);		// print_r($data["search"]);die;
	// 	$this->load->view('home',$data);
	// }

    public function smsotp(){
        $this->load->view('sending_otp');
    }
    public function sms(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mobile','Mobile','required');
        $this->form_validation->set_rules('message','Message','required');

        if($this->form_validation->run())
        {
           $mobile = $this->input->post("mobile");
            $msg = $this->input->post("message");
            $dtaa = $this->input->post();
            $authkey  = "";
            $senderid = "";
            $route    = "";

            $datasend = array(
                "authkey" =>  $authkey,
                "mobile" =>  $mobile,
                "msg" =>  $msg,
                "sender" =>  $senderid,
                "route" =>  $route,
            );
            $url ='http://api.';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"http://api.");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $datasend);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
             $server_output = curl_exec($ch); 
            curl_close ($ch);
            // curl_setopt_array($ch, array(
            //     CRULOPT_URL => $url,
            //     CURLLOPT_RETURNTRANSFER => TRUE,
            //     CURLLOPT_POST =>TRUE,
            //     CURLLOPT_POSTFILEDS =>$datasend
            // ));
            // curl_setopt($ch, CRULOPT_SSL_VERIFYHOST, 0);
            // curl_setopt($ch, CRULOPT_SSL_VERIFYHOST, 0);
            // $output = curl_exec($ch);
            // if (curl_errno($ch)) {
            //     echo 'error'.curl($ch);
            // }
            //     curl_close($ch);
                ?>
                <p>Response id: <?php echo  $server_output ?></p>
                <?php 
        }else{
                echo validation_errors();
        }
    }
}
