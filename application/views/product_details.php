<div class="product_image" float="left">
    <img src="<?php echo $product_details->product_image; ?>" alt="product_image" />
</div>
<div class="product_details">
    
        <h2>Product Name: <?php echo $product_details->product_name; ?></h2>
        <h2>Product Description: <?php echo $product_details->product_description; ?></h2>
        <h2>Price : $<?php echo $product_details->product_price; ?></h2>
        <h2>Available Quantity :<?php echo $product_details->product_quantity; ?></h2>
        <h3>
            <a href="<?php echo base_url();?>cart/add_to_cart/<?php echo $product_details->product_id;?>">
                <input type="button" name="btn" value="Add to Cart">
            </a>
        </h3>
</div>