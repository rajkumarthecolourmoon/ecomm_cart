<?php include 'include/header.php'; ?>

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Category products</h2>
	<nav>
	<ol class="breadcrumb text-white">
	    <li class="breadcrumb-item"><a href="#">Home</a></li>
	    <li class="breadcrumb-item"><a href="#">Best category</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Great articles</li>
	</ol>  
	</nav>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<aside class="col-md-3">
		
<div class="card">
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Product type</h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_1" style="">
			<div class="card-body">
				<form class="pb-3">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Search">
				  <div class="input-group-append">
				    <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
				  </div>
				</div>
				</form>
				<ul class="list-menu">
					<?php foreach ($categories as  $row) { ?>
				<li><a href="javascript:void(0)"  onclick="category(<?php echo $row->id; ?>)"><?php echo $row->cate_name; ?></a></li>
				<?php } ?>
				</ul>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- filter-group  .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Brands </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_2" style="">
			<div class="card-body">
				<?php foreach ($brands as  $brand) { ?>
			<a class="dropdown-item"href="javascript:void(0)"  onclick="brand(<?php echo $brand->id; ?>)"><?php echo ucfirst(strtolower($brand->brand_name));  ?></a>

			<?php } ?>
	     </div> <!-- card-body.// -->
	     	<input type="hidden" name="brand" id="brand">
	     	<input type="hidden" name="category" id="category">
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Price range </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_3" style="">
			<div class="card-body">
				<input type="range" class="custom-range" min="0" max="100" name="">
				<div class="form-row">
				<div class="form-group col-md-6">
				  <label>Min</label>
				  <input class="form-control" placeholder="$0" type="number">
				</div>
				<div class="form-group text-right col-md-6">
				  <label>Max</label>
				  <input class="form-control" placeholder="$1,0000" type="number">
				</div>
				</div> <!-- form-row.// -->
				<button class="btn btn-block btn-primary">Apply</button>
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">Sizes </h6>
			</a>
		</header>
		<div class="filter-content collapse show" id="collapse_4" style="">
			<div class="card-body">
			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> XS </span>
			  </label>

			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> SM </span>
			  </label>

			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> LG </span>
			  </label>

			  <label class="checkbox-btn">
			    <input type="checkbox">
			    <span class="btn btn-light"> XXL </span>
			  </label>
		</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
	<article class="filter-group">
		<header class="card-header">
			<a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
				<i class="icon-control fa fa-chevron-down"></i>
				<h6 class="title">More filter </h6>
			</a>
		</header>
		<div class="filter-content collapse in" id="collapse_5" style="">
			<div class="card-body">
				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
				  <div class="custom-control-label">Any condition</div>
				</label>

				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" class="custom-control-input">
				  <div class="custom-control-label">Brand new </div>
				</label>

				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" class="custom-control-input">
				  <div class="custom-control-label">Used items</div>
				</label>

				<label class="custom-control custom-radio">
				  <input type="radio" name="myfilter_radio" class="custom-control-input">
				  <div class="custom-control-label">Very old</div>
				</label>
			</div><!-- card-body.// -->
		</div>
	</article> <!-- filter-group .// -->
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<main class="col-md-9">

<header class="border-bottom mb-4 pb-3">
		<div class="form-inline">
			<span class="mr-md-auto">32 Items found </span>
			<select class="mr-2 form-control">
				<option>Latest items</option>
				<option>Trending</option>
				<option>Most Popular</option>
				<option>Cheapest</option>
			</select>
			<div class="btn-group">
				<a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view"> 
					<i class="fa fa-bars"></i></a>
				<a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view"> 
					<i class="fa fa-th"></i></a>
			</div>
		</div>
</header><!-- sect-heading -->

<div class="row">
	<?php if (!empty($product)) { 
              $no = 1;
              foreach ($product as $row) {
              ?>
	<div class="col-md-4">
		<figure class="card card-product-grid">
			<div class="img-wrap"> 
				<span class="badge badge-danger"> NEW </span>
				<img name="image"  src="<?php echo base_url(); ?>uploads/images/<?php echo $row->images ?>">
				<a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a>
			</div> <!-- img-wrap.// -->
			<figcaption class="info-wrap">
				<div class="fix-height">
					<a href="#" class="title" ><?php echo $row->product_name ?></a>
					<div class="price-wrap mt-2">
						<span class="price"><?php echo $row->price; ?></span>
						<del class="price-old">$1980</del>
					</div> <!-- price-wrap.// -->
				</div>

				<a href="javascript:void(0);" class="cart btn btn-primary text-center" 
				   data-id="<?php echo $row->id;?>" data-name="<?php echo $row->product_name?>"
				   data-price="<?php echo $row->price?>">Add to cart<i class="fas fa-shopping-cart"></i> </a>
			</figcaption>
		</figure>
	</div> <!-- col.// -->
	 <?php
       $no++;
        }
            } else { ?>
                <tr id="row">
                    <td colspan="6" align="center" class="text-danger">NO Records</td>
                <?php
            }  ?>
</div> <!-- row end.// -->
	<nav class="mt-4" aria-label="Page navigation sample">
	   <?= $this->pagination->create_links() ?>
	</nav>
	</main> <!-- col.// -->

</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<?php include 'include/footer.php'; ?>


<script type="text/javascript">
	
$(".cart").click(function(){
      var id = $(this).data("id");
      var name = $(this).data("name");
      var price = $(this).data("price");
      var image = $(this).data("image");
   
    //alert(id+name+price);
      $.ajax({
        url: "<?php echo base_url() ?>cart" ,
        method: "POST",
        data: {
        	 id: id,
        	 name: name,
        	 price: price,
        	 image: image
        },
        success: function(data){
            console.log(data);
        },
      });
});

function brand(id){
	$("#brand").val(id);
	cat_brand_filter();
}

function category(id){
	$("#category").val(id);
	cat_brand_filter();
}

function cat_brand_filter(){
	 var brand_id = $("#brand").val();
      var category_id =$("#category").val();

       $.ajax({
        url: "<?php echo base_url() ?>product/brand_filter" ,
        method: "POST",
        data: {
        	 brand_id: brand_id,
        	 category_id: category_id,
            },
        success: function(data){
            //console.log(data);
            $(".items").html(data)
        },
      });
}
</script>