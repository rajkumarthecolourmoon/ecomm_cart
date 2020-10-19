<!doctype html>
<html>
<head>
<title>Patym Payment Gateway Integration in PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="padding-top:100px;">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div style="background-color: #000000; color:#fff" class="panel-heading">
                <h3 class="text-center">Paytm Payment Gateway Demo</h3>
            </div>
            <div class="panel-body">
            <form action="<?php echo  base_url(); ?>paytm/paytmresponse" method="post">
                <input type="hidden" id="CUST_ID" name="CUST_ID" value="CUST001">
                    <input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
                    <input type="hidden"  id="CHANNEL_ID" name="CHANNEL_ID" value="WEB">
                <div class="form-group">
                    <label>Order ID:</label>
                    <input type="text" class="form-control" id="ORDER_ID" name="ORDER_ID" size="20" maxlength="20" autocomplete="off" tabindex="1" value="<?php echo  "ORDER" . rand(10000,99999999); ?>">
                </div>
                <div class="form-group">
                    <label>CUSTID ::*</label>
                    <input id="CUST_ID" tabindex="2" class="form-control" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="123">
                </div>
                  <div class="form-group">
                    <label>INDUSTRY_TYPE_ID</label>
                    <input id="INDUSTRY_TYPE_ID" tabindex="4" class="form-control" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="test">
                </div>
                  <div class="form-group">
                    <label>Channel ::*</label>
                    <input id="CHANNEL_ID" tabindex="4" class="form-control" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                </div>
                  <div class="form-group">
                    <label>Amount to Pay:</label>
                    <input type="text" class="form-control" id="TXN_AMOUNT" name="TXN_AMOUNT" autocomplete="off" tabindex="5"value="20">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="CheckOut" class="btn btn-success btn-lg" style="background-
 
color:#0000FF; margin-left: 37%;">
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>