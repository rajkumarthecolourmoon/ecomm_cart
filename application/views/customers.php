
	
<?php include 'include/header.php'; ?>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<div class="row">
  <div class="col-6">
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
<div class="form-sec">
  <h4>Contact form</h4>
  
 <form name="qryform" id="myform" method="post" action="<?php echo base_url(); ?>checkout/add" onsubmit="return(validate());" novalidate="novalidate">
    <div class="form-group">
      <label>First Name:</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Last_name:</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Email" name="email">
    </div>
      <div class="form-group">
      <label>Email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label>Phone No.:</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone no." name="phone">
    </div>
	<div class="form-group">
      <label>Address:</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Subject" name="subject">
    </div>
	 
	<div class="form-group">
	  <label for="country">Select Country:</label>
	  <select class="form-control" id="country" name="country">
	  
	  <option> Choose...</option>
    <?php  if(!empty($country)){ ?>
      <?php foreach ($country as $row) { ?>
		<option value="<?php echo $row->country_id ?>"><?php echo $row->country ?></option>
      <?php } 
      }else{
        echo '<option value="">Country not available</option>';
        }
        ?>
	  </select>
	</div> 
	<div class="form-group">
    <label for="title">Select City:</label>
      <select class="form-control" id="city" name="city">
     <option> Choose...</option>
    
    </select>
      </select>
    </div>
	 <div class="form-group">
      <label>City:</label>
     <input type="text" name="city" class="form-control" id="city"  placeholder="Enter your City">
    </div>
    <div class="form-group">
      <label>Pincode</label>
      <input type="text" name="pincode" class="form-control" id="pincode"  placeholder="Enter your Pincode">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  
  </div>
  <div class="col-6"></div>
</div>
<?php include 'include/footer.php'; ?>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script >
$(document).ready(function () {

$('#myform').validate({  // initialize the plugin
			
            rules: {
                first_name: {
                    required: true,
                },
                last_name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                phone: {
                    required: true,
                },
                country: {
                    required: true,
				},
				  state: {
                    required: true,
				},
				city: {
                    required: true,
				},
				pincode: {
                     required: true,
				},
				
            },
            // Specify the validation error messages
            messages: {
                first_name: "*Please enter firstname ",
            },
            messages: {
                last_name: "*Please enter lastname ",
            },
            
			messages: {
                email: "*Please enter mobile",
            },
            messages: {
                phone: "*Please enter phone",
            },
            messages: {
                country: "*Please enter country",
            },
                messages: {
                state: "*Please enter state",
            },
            messages: {
                city: "*Please enter city",
			},
			 pincode: { 
                 required:"the pincode is required"

               },

			
        });

    });

  $(document).ready(function() {
        $('#country').change(function() {
            var id = $(this).val();
              alert(id);
                $.ajax({
                    url: '<?php echo base_url();?>country/get_states',
                    type: "GET",
                    data:{
                         id:id
                    },
                    success:function(response) {
                      //console.log(response);
                     if(response['state']){
                       $('#states').html(response['state'])

                     }
                    }
                });
        });
});
 
    </script>