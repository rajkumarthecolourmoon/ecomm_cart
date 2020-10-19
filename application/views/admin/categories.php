<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>categories</title>
  <!-- Bootstrap CSS link -->
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/dropify/css/dropify.css'?>">
<!-- JS, Popper.js, and jQuery -->

</head>
<body>
  <div class="container">
    <h2 class="text-center" style="margin-top: 50px;">categories</h2>
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
         <form id="form" role="Form" method="post" action="<?php echo base_url(); ?>admin/categories/add" enctype="multipart/form-data">
               <div class="form-group">
                 <label>Categories Name</label>
                   <input type="text" class="form-control" id="categories" name="categories">
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

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>
<script type="text/javascript">
  $(document).ready(function(){  
    $('.dropify').dropify();
  });
///////////////----------------------///////////////////
    $(document).ready(function(){
        $("#form").validate({        
            rules: {  
                categories:{
                    required: true,
                   
                }, 
               
            },
            messages: {
                categoriesHide:{
                    required: "Select categoriesHide name",
                    
                },
                

            }  
            // submitHandler: function(form) {
            //     alert("Form submitted successfully")
            //     form.submit();
            // }    
        
        });

    });

</script>
