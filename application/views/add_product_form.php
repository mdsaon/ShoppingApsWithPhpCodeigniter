

<div class="container"> 
<div class="row">
<div class="form_product">
<form action="<?php echo base_url(); ?>welcome/save_product" enctype="multipart/form-data" method="post">

    <?php
    $message = $this->session->userdata('message');
    if ($message) {
        ?>
        <h4 class="alert_success"><?php echo $message; ?></h4>
        <?php
        $this->session->unset_userdata('message');
    }
    ?>

    <article class="module width_full">

        <header><h3>Add Product</h3></header>
        <div class="module_content">
		
<div class="form-group">
    <label for="exampleInputPassword1">Product Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="product_name">
 </div>
 
 <div class="form-group">
  <label for="exampleInputEmail1">Product Category</label>
  <select class="form-control" name="category_id">
  <option value="0" selected>Select</option> 
                    <?php
                        foreach($all_category as $v_category)
                        {
                         ?>   
                    <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                       <?php }
                    ?>
</select>
</div>
  <div class="form-group">
       <label for="exampleInputEmail1">Product Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="product_price">
  </div>        
            <div class="form-group">
    <label for="exampleInputPassword1">Product Quantity</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="product_quantity">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="product_description">
  </div>
            
            <div class="form-group">
    <label for="exampleInputFile">Product Image</label>
    <input type="file" id="exampleInputFile" name="product_image">
	</div>
               
            
            <fieldset > <!-- to make two field float next to one another, adjust values accordingly -->
                <label>Status</label>
                <input type="radio" name="publication_status" value="1">Published
                <input type="radio" name="publication_status" value="0">Un Published
            </fieldset>

        </div>

            <div class="submit_link">

                <input type="submit" value="Save" class="btn btn-default">
                <input type="reset" value="Reset" class="btn btn-default">
            </div>
        
    </article>
</form>
</div>
</div></div>