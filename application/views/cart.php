<?php include 'include/header.php'; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Shopping cart</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">
<form action="<?=base_url()?>cart/update_cart" method="">
<table class="table table-borderless table-shopping-cart">
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
	<?php   if($this->cart->total_items() > 0){ ?>
	<?php  $i= 1; ?>
	<?php foreach ($this->cart->contents() as $items){ ?>
 <input type="hidden" class="rowid<?= $i; ?>" name="id" id="id" value="<?php echo $items['rowid']; ?>">
<tr id ="id<?= $i ?>">
	<td>
		<figure class="itemside">
			<div class="aside"><img src="<?php echo base_url(); ?>assests/images/items/1.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">   <?php echo $items['name']; ?></a>
			</figcaption>
		</figure>
	</td>
	<td> 
		<input type="number" name="qty" class="form-control text-center qty" id="qty" 
		value="<?php echo $items['qty'] ?>" min="0">
		

	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price"><span class="subtotal subtotal<?php echo $items['id'] ?>">
                                           <?php echo $this->cart->format_number($items['subtotal']); ?></span>
                                       </var> 
			
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" onclick="javascript:updateproduct('<?php echo $items['id'] ?>')" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-refresh" aria-hidden="true"></i>
</a> 
	<a href="javascript:void(0);" class="btn btn-light remove" id="<?= $i;?>"> Remove</a>
	</td>
</tr>
<?php
	$i++;
	}
  } else { ?>
	<tr id="row">
		<td colspan="6" align="center" class="text-info">Your cart is empty....</td>
		<?php
}  ?>
</tbody>
</table>
</form>
<div class="card-body border-top">
	<a href="<?php echo base_url() ?>checkout" class="btn btn-primary float-md-right"> Check Out <i class="fa fa-chevron-right"></i> </a>
	<a href="<?php echo base_url(); ?>home/product_list" class="btn btn-light"> <i class="fa fa-chevron-left"></i>Continue shopping </a>
</div>	
</div> <!-- card.// -->


<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body">
			<form>
				<div class="form-group">
					<label>Have coupon?</label>
					<div class="input-group">
						<input type="text" class="form-control" name="" placeholder="Coupon code">
						<span class="input-group-append"> 
							<button class="btn btn-primary">Apply</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total price:</dt>
					  <dd class="text-right">USD 568</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Discount:</dt>
					  <dd class="text-right">USD 658</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total:</dt>
					  <dd class="text-right  h5"><strong>₹<?php echo $this->cart->format_number($this->cart->total()); ?></strong></dd>
					</dl>
					<hr>
					<p class="text-center mb-3">
						<img src="<?php echo base_url();?>assests/images/misc/payments.png" height="26">
					</p>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y">
<div class="container">
<h6>Payment and refund policy</h6>


</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<?php include 'include/footer.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $(".remove").click(function(){
        var id = $(this).attr("id");
        $("#id"+id).hide();
        var rowid = $(".rowid"+id).val();
        //alert(rowid);
        $.ajax({
        url: "<?php echo base_url(); ?>cart/delete_item" ,
        method: "POST",
        data: {id: rowid},
        success: function(data){
          console.log(data);


        }
      });
    
}); 
});


</script>