<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once (APPPATH ."libraries\lib/config_paytm.php");
// require_once (APPPATH ."libraries\lib/encdec_paytm.php");
class Paytm extends CI_Controller {
   public function __construct(){
        parent::__construct();    
           header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    }
	public function index(){
      $this->load->view('payment');
	}
	public function send(){
      $this->load->view('send');
	}
	public function payment(){
 // print_r($_POST);
 // die();
  require_once (APPPATH ."libraries/lib/config_paytm.php");
require_once (APPPATH ."libraries/lib/encdec_paytm.php");
    $checkSum = "";
   $paramList = array();


	$ORDER_ID = $_POST["ORDER_ID"];
	$CUST_ID = $_POST["CUST_ID"];
	$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
	$CHANNEL_ID = $_POST["CHANNEL_ID"];
	$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
	
	$paramList["MID"] = PAYTM_MERCHANT_MID;
	$paramList["ORDER_ID"] = $ORDER_ID;
	$paramList["CUST_ID"] = $CUST_ID;
	$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
	$paramList["CHANNEL_ID"] = $CHANNEL_ID;
	$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
	$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
	$paramList["CALLBACK_URL"] = "http://localhost:8080/ecom/paytm/paytmresponse";
	$paramList["MSISDN"] = '9848604561'; //Mobile number of customer
	$paramList["EMAIL"] = 'rajkumar@thecolourmoon.com'; //Email ID of customer
	$paramList["VERIFIED_BY"] = "EMAIL"; //
	$paramList["IS_USER_VERIFIED"] = "YES"; //
	$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
	?>
    <form method='post' action="<?php echo PAYTM_TXN_URL ?>" name='f1'>
	<?php  foreach($paramList as $name => $value) {  ?>
	<input type="hidden" name="' . $name .'" value="' . $value . '">
	  <?php } ?>

	<input type='hidden' name='CHECKSUMHASH' value='". $checkSum . "'>

	<script type='text/javascript'>
	 document.f1.submit();
	</script>
	</form>
    <?php 	} 

	public function paytmresponse(){
		$paytmChecksum = "";
		 $paramList = array();
		 $isValidChecksum = "FALSE";
		$paramList = $_POST;
		$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
		$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return
		if($isValidChecksum == "TRUE") {
		    echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
		    if ($_POST["STATUS"] == "TXN_SUCCESS") {
		        echo "<b>Transaction status is success</b>" . "<br/>";
		    }else {
		        echo "<b>Transaction status is failure</b>" . "<br/>";
		    }
		    if (isset($_POST) && count($_POST)>0 )
		    { 
		        foreach($_POST as $paramName => $paramValue) {
		                echo "<br/>" . $paramName . " = " . $paramValue;
		        }
		    }
		}
		else {
		    echo "<b>Checksum mismatched.</b>";
		    //Process transaction as suspicious.
}
	}
	public function status(){
		$ORDER_ID = "";
	    $requestParamList = array();
	    $responseParamList = array();
    if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {
        $ORDER_ID = $_POST["ORDER_ID"];
        $requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
        $StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
        $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;
        $responseParamList = getTxnStatusNew($requestParamList);
	}
		$ORDER_ID = "";
	    $requestParamList = array();
	    $responseParamList = array();
    if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {
        $ORDER_ID = $_POST["ORDER_ID"];
        $requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
        $StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
        $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;
        $responseParamList = getTxnStatusNew($requestParamList);
   }
}
}
?>