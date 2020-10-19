<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>state</title>
  <!-- Bootstrap CSS link -->
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/dropify/css/dropify.css'?>">
<!-- JS, Popper.js, and jQuery -->

</head>
<body>
  <div class="container">
    <h2 class="text-center" style="margin-top: 50px;"> States </h2>
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
         <form id="form" role="Form" method="post" action="<?php echo base_url(); ?>dashboard/state-add" enctype="multipart/form-data">
              
            <div class="form-group">
              <label for="state">Select State:</label>
              <select class="form-control" id="state" name="state">
               <option> Choose...</option>
              <option >Andhra Pradesh</option>
              <option  >Telnagana</option>
              <option  >Maharashta</option>
              <option >Tamilnadu</option>
              <option >Kerla</option>
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

    <script >
// $(document).ready(function () {

// $('#form').validate({  // initialize the plugin
      
//             rules: {
               
//                 state: {
//                     required: true,
//                 },
        
//             },
//             // Specify the validation error messages
            
//             messages: {
//                 state: "*Please enter state ",
//             },
          
//         });

//     });
    </script>
