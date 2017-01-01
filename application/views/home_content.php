<div class="container"> 
<div class="row">
<?php
    foreach ($all_product as $v_product) {
        ?>

    <div class="col-sm-4">
     <div class="panel panel-primary">
    
        <div class="product">
            <a href="<?php echo base_url();?>welcome/product_details/<?php echo $v_product->product_id; ?>" title="Product 1">
                <span class="panel-heading"><?php echo $v_product->product_name; ?></span>
                <div class="panel-body"><img src="<?php echo $v_product->product_image; ?>" alt="Product Image 1" /></div>
            <span class="number">Status Available</span>
           <div class="panel-footer">Price: <?php echo $v_product->product_price; ?></div>
        </a>
    </div>							
    </div>
    </div>
	
    <?php } ?>
</div>
</div>
   

