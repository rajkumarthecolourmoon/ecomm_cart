<!doctype html>
<html>
<head>
<title>payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="padding-top:100px;">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div style="background-color: #000000; color:#fff" class="panel-heading">
                <h3 class="text-center">Amount</h3>
            </div>
            <div class="panel-body">
            <form action="<?php echo  base_url(); ?>paytm/payment" method="post" name ="f1">
               
                <table border="1">
            <tbody>
            <?php
            foreach($paramList as $name => $value) {
                echo '<input type="hidden" name="' .$name.'" value="' .$value. '">';
            }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
            </tbody>
        </table>
        <script type="text/javascript">
            document.f1.submit();
        </script>
               
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