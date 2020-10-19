<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Image upload</title>
  <!-- Bootstrap CSS link -->
  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'admincss/resources/dropify/css/dropify.css'?>">
<!-- JS, Popper.js, and jQuery -->

</head>
<body>
  <div class="container">
    <h2 class="text-center" style="margin-top: 50px;">CodeIgniter Image Upload</h2>
    <br><br>
    <div class="row">
      <div class="col-lg-3">
    <div class="preview" style="display: none;">
      <p id="error1" style="display:none; color:#FF0000;">
       Invalid Image Format! Image Format Must Be JPG, JPEG, PNG or GIF.
        </p>
        <p id="error2" style="display:none; color:#FF0000;">
        Maximum File Size Limit is 1MB.
        </p>
    </div>

      </div>
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
         <form id="form" role="Form" method="post" action="<?php echo base_url(); ?>admin/product/add" enctype="multipart/form-data">
               <div class="form-group">
                 <label>Image Name</label>
                   <input type="text" class="form-control" id="product_name" name="product_name">
                 </div>
               <div class="form-group" style ="width=100";>
                 <label>Image</label>
                   <input type="file" class="form-control dropify" id="picture" name="picture" data-height="100" >
                 </div>
                 <div class="form-group">
                 <label>Qty</label>
                   <input type="number" class="form-control" id="qty" name="qty"  min="0">
                 </div>
                 <div class="form-group">
                 <label>Price</label>
                   <input type="text" class="form-control" id="price" name="price">
                 </div>
                 <div class = "form-group form-check">
                <label class = "form-check-label" for = "exampleCheck1">
                <!-- <input type = "checkbox" class = "form-check-input" id = "exampleCheck1">Remember me -->
                <input type="checkbox" value="1" name="status" id="status" class="form-check-input"  />Remember me
                </label>
                </div>
               <input type="submit" class="btn btn-primary" id="submit" name="submit"value="Upload" >
             <?php form_close() ?> 

             <a href="<?php echo site_url('home/view_images') ?>" class="btn btn-success" style="margin-left: 20px;">View Images</a>  
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
                picture:{
                    required: true,
                    accept:"jpg,png,jpeg,gif"
                }, 
                product_name:{
                    required: true,
                   
                },  
                qty:{
                    required: true,
                   
                },
                price:{
                    required: true,
                    
                }, 
            },
            messages: {
                picture:{
                    required: "Select Image",
                    accept: "Only image type jpg/png/jpeg/gif is allowed"
                },
                product_name:{
                    required: "Select product name",
                },
                qty:{
                    required: "Select number of qty",
                    
                },
                price:{
                    required: "Select price",
                   
                }

            }  
            // submitHandler: function(form) {
            //     alert("Form submitted successfully")
            //     form.submit();
            // }    
        
        });

    });

</script>
