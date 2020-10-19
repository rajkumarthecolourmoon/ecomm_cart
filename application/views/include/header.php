<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from bootstrap-ecommerce.com/bootstrap-ecommerce-html/page-index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Sep 2020 04:35:54 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Ecommerce</title>

<link href="<?php echo base_url(); ?>assests/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assests/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="<?php echo base_url(); ?>assests/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assests/css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="<?php echo base_url(); ?>assests/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="<?php echo base_url(); ?>assests/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assests/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/owl.carousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assests/owl.carousel/dist/assets/owl.theme.default.css">
<!-- custom javascript -->

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>

<header class="section-header">

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-4">
		<a href="<?php echo base_url(); ?>home" class="brand-wrap">
			<img class="logo" src="<?php echo base_url(); ?>assests/images/logo.png">
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-12">
		<form action="<?php echo base_url() ?>home" class="search form-inline" method="post">
			<div class="input-group w-100">
			    <input type="text" class="form-control" name="search" placeholder="Search" >
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-4 col-sm-6 col-12">
		<div class="widgets-wrap float-md-right">
			<div class="widget-header  mr-3">
				<a href="<?php echo base_url() ?>cart/show_cart" id="cart"><i class="fa fa-shopping-cart"></i> 
					<span class="badge"><?php $cart_items =  $this->cart->total_items();
										if($cart_items>0){?> 
									 Cart(<?php echo $cart_items;?>)
									 <?php }else{?>
									  Cart(empty)
									 <?php } ?></span>
  
			</div>
			<div class="widget-header icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
				<div class="text">
					<span class="text-muted"><?php echo $this->session->userdata('first_name');?></span>
					<div> 
						<a href="<?php echo base_url(); ?>users/login">Sign in</a> |  
						<?php if ($this->session->userdata('logged_in') !== true) { ?>
					     <a href="<?php echo base_url(); ?>users"> Register</a>|
						<?php } elseif($this->session->userdata('logged_in') == true) { ?>
						<a href="<?php echo base_url(); ?>users/logout"> Logout</a>
						<?php } ?>
						
					</div>
				</div>
			</div>

		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
<nav class="navbar navbar-main navbar-expand-lg navbar-light">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">

      <ul class="navbar-nav">
      	<li class="nav-item dropdown">
      		 
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  All category</strong></a>
          <div class="dropdown-menu">
          		<?php //foreach($brands as $value) {?>
            <a class="dropdown-item" href="#"><?php //echo ucfirst(strtolower($value->brand_name));  ?></a>
             <?php   //} ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Furnitures</a>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>
</header> <!-- section-header.// -->

