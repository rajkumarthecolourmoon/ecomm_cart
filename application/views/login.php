<?php include 'include/header.php'; ?>


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height:84vh">

<!-- ============================ COMPONENT LOGIN   ================================= -->
	<div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
      <div class="card-body">
      <h4 class="card-title mb-4">Sign in</h4>
      <?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <strong><?php echo $this->session->flashdata('error'); ?></strong>
   </div>
    <?php } elseif ($this->session->flashdata('logout')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <strong><?php echo $this->session->flashdata('logout'); ?></strong>
    </div>
         <?php } ?>
      <form action="<?php echo base_url()?>users/home" method="post">
      	 
          <div class="form-group">
			 <input  class="form-control" placeholder="Username" name="email" type="text">
          </div> <!-- form-group// -->
          <div class="form-group">
			<input  class="form-control" placeholder="Password" name="password" type="password">
          </div> <!-- form-group// -->
          
          <div class="form-group">
          	<a href="#" class="float-right">Forgot password?</a> 
            <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" name="status" value="1"> <div class="custom-control-label"> Remember </div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login  </button>
          </div> <!-- form-group// -->    
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->

     <p class="text-center mt-4">Don't have account? <a href="#">Sign up</a></p>
     <br><br>
<!-- ============================ COMPONENT LOGIN  END.// ================================= -->


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

<!-- Mirrored from bootstrap-ecommerce.com/bootstrap-ecommerce-html/page-user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2020 04:52:49 GMT -->
</html>