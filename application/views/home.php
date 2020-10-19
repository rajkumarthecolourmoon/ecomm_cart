<?php include 'include/header.php'; ?>



</header> <!-- section-header.// -->



<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro">

<div class="intro-banner-wrap">
	<img src="<?php echo base_url(); ?>assests/images/banners/1.jpg" class="w-100 img-fluid">
</div>

</section>
<!-- ========================= SECTION INTRO END// ========================= -->


<!-- ========================= SECTION SPECIAL ========================= -->
<section class="section-specials padding-y border-bottom">
<div class="container">	
<div class="row">

	
	

</div> <!-- container.// -->
</section>
<!-- ========================= SECTION SPECIAL END// ========================= -->




<!-- ========================= SECTION  ========================= -->
<section class="section-name  padding-y-sm">
<div class="container">

<header class="section-heading">
	<a href="#" class="btn btn-outline-primary float-right">See all</a>
	<h3 class="section-title">Popular products</h3>
</header><!-- sect-heading -->

	
<div class="row">
	<?php if (!empty($product)) { 
              $no = 1;
              foreach ($product as $row) {
              ?>
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="<?php echo base_url(); ?>home/product_list" class="img-wrap"> 
				<img src="<?php echo base_url(); ?>uploads/images/<?php echo $row->images ?>"> 
			</a>
			<figcaption class="info-wrap">
				<a href="<?php echo base_url(); ?>home/product_list" class="title"><?php echo $row->product_name ?></a>
				<div class="price mt-1"><?php echo $row->price; ?></div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
	 <?php
       $no++;
        }
            } else { ?>
                <tr id="row">
                    <td colspan="6" align="center" class="text-danger">NO Records</td>
                <?php
            }  ?>  
</div><!-- container // -->
</section>
<nav class="mt-4" aria-label="Page navigation sample">
     <?= $this->pagination->create_links() ?>
  </nav>
<!-- ========================= SECTION  END// ========================= -->

<?php include 'include/footer.php'; ?>