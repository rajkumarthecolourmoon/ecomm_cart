<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>countrys</title>
  <!-- Bootstrap CSS link -->
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/dropify/css/dropify.css'?>">
<!-- JS, Popper.js, and jQuery -->

</head>
<body>
  <div class="container">
    <h2 class="text-center" style="margin-top: 50px;">Country</h2>
    <br><br>
    <div class="row">
      
      <div class="col-lg-6">
      <!-- success message to display after uploading image -->
          <?php if ($this->session->flashdata('success')) {?>
              <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <?php echo $this->session->flashdata('success'); ?>
              </div>
          <?php  } ?> 
          <!-- validation message to display after form is submitted -->
             <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>','</div>');
             ?>    
             <!-- image upload form      -->
         <form id="form" role="Form" method="post" action="<?php echo base_url(); ?>dashboard/country-add" enctype="multipart/form-data">
               <div class="form-group">
              <label for="country">Select Country:</label>
              <select class="form-control" id="country" name="country" id="country">
                <option> Choose...</option>
              <option>Uzbekistan</option>
              <option>Russia</option>
              <option>United States</option>
              <option>India</option>
              <option>Afganistan</option>
              </select>
            </div> 
               <input type="submit" class="btn btn-primary" id="submit" name="submit"value="add" >
           </form>
        </div>
      <div class="col-lg-3"></div>
    </div> 
  </div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url().'admincss/resources/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'admincss/resources/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'admincss/resources/dropify/js/dropify.js'?>"></script>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var country = $("#country");
            if (country.val() == "") {
                //If the "Please Select" option is selected display error.
                alert("Please select an option!");
                return false;
            }
            return true;
        });
    });
</script>
