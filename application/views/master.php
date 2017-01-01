<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>welcome">Shopping</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>welcome">Home</a></li>
		
		 <?php
                                            foreach ($all_category as $v_category) {
                                                ?>
                                                <li><a href="<?php echo base_url(); ?>welcome/product_by_category/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                                            <?php } ?>
											 <li><a href="<?php echo base_url();?>welcome/add_product" title="Products">Products</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="<?php echo base_url();?>cart/show_cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart(<?php echo $this->cart->total_items();?>)</a></li>
		
                                    
      </ul>
    </div>
  </div>
</nav>






<div class="container">    
  <?php echo $maincontent ;?>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>







                       
                       
                                
                                
                       
                                    
                                   
                                    