<?php include 'include/header.php'; ?>



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('success'); ?></strong>
            </div>
        <?php } elseif ($this->session->flashdata('danger')) { ?>
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('danger'); ?></strong>
            </div>
        <?php } elseif ($this->session->flashdata('email_exists')) { ?>
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <strong><?php echo $this->session->flashdata('email_exists'); ?></strong>
            </div>
        <?php } ?>
    </div>
<!-- ============================ COMPONENT REGISTER   ================================= -->
      <h3 class="text-center">Register</h3>
	<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
      <article class="card-body">
		<form id="myform" action="<?php echo base_url(); ?>users/add_user" method="post">
				<div class="form-row">
					<div class="col form-group">
						<label>First name</label>
					  	<input type="text" name="first_name" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
					<div class="col form-group">
						<label>Last name</label>
					  	<input type="text" name="last_name" class="form-control" placeholder="">
					</div> <!-- form-group end.// -->
				</div> <!-- form-row end.// -->
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="">
				</div> <!-- form-group end.// -->
				<div class="form-group">
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input"  type="radio" name="gender" value="Male">
					  <span class="custom-control-label"> Male </span>
					</label>
					<label class="custom-control custom-radio custom-control-inline">
					  <input class="custom-control-input" type="radio" name="gender" value="Female">
					  <span class="custom-control-label"> Female </span>
					</label>
				</div> <!-- form-group end.// -->
				<div class="form-row">
					<div class="form-group col-md-6">
					  <label>City</label>
					  <input type="text" name="city" class="form-control">
					</div> <!-- form-group end.// -->
					<div class="form-group col-md-6">
					  <label>Country</label>
					  <select id="inputState" class="form-control" name="country">
					    <option> Choose...</option>
					      <option>Uzbekistan</option>
					      <option>Russia</option>
					      <option selected="">United States</option>
					      <option>India</option>
					      <option>Afganistan</option>
					  </select>
					</div> <!-- form-group end.// -->
				</div> <!-- form-row.// -->
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="">
				</div>
			    <div class="form-group">
			        <button type="submit" name="submit" class="btn btn-primary "> Register  </button>
			    </div> <!-- form-group// -->      
			    <div class="form-group"> 
		            <label class="custom-control custom-checkbox"> 
		            	<input type="checkbox" value="1" name="status" class="custom-control-input" > 
		              <div class="custom-control-label"> I am agree with <a href="#">terms and contitions</a>
		              </div>
		            </label>
		        </div> <!-- form-group end.// -->           
			</form>
		</article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">Have an account? <a href="#">Log In</a></p>
    <br><br>
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top padding-y">
	<div class="container">
		<p class="float-md-right"> 
			&copy Copyright 2019 All rights reserved
		</p>
		<p>
			<a href="#">Terms and conditions</a>
		</p>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->



</body>

<!-- Mirrored from bootstrap-ecommerce.com/bootstrap-ecommerce-html/page-user-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2020 04:45:39 GMT -->
</html>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>

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
               
                country: {
                    required: true,
				},
				city: {
                    required: true,
				},
				password: {
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
            // messages: {
            //     gender: "*Please enter gender",
            // },
            messages: {
                country: "*Please enter country",
            },
            messages: {
                city: "*Please enter city",
			},
			 password: { 
                 required:"the password is required"

               },

			
        });

    });
    </script>