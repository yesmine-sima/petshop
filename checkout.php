<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Checkout Now</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		body{
			background-image:url(images/back.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
		
	</style>
</head>
<body>

<div class="header" style="width: 65%">
	<h2>Billing</h2>
</div>

<div class="content" style="width: 65%">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?> 

    	<p align="center"><strong><?php echo $_SESSION['username'];?> Fill Delivery Information</strong></p>
    	<p align="center"><button type="submit" class="btn"><a href="index.php?logout='1'" style="color: white;">logout</a> OR <button type="submit" class="btn"><a href="cart.php" style="color: white;">More Add</a></button>  </p>

    	<p align="center">Your Amaount is  
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
  
                        <?php
                        $total = $total + ($value["item_quantity"]=1 * $value["product_price"]);
                        $ids = $value["product_id"];
                    }
                        ?>
                      Total$ <?php echo number_format($total, 2); ?> 
                            
                        <?php
                    }
                ?></p><br>

<form method="post" action="checkout.php">
  	<div class="input-group">
  		<label>Address</label>
  		<input type="text" name="address" >
  	</div>
  	<div class="input-group">
  		<label>Mobile Number</label>
  		<input type="text" name="mobile_no">
  	</div>
  	<div class="input-group">
  		
  		<input type="hidden" name="money" value=<?php echo '"'.$total.'"'; ?>'>
      <input type="hidden" name="ids" value=<?php echo '"'.$ids.'"'; ?>'>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="buy">Place Order</button>
  		
  	</div>
  	
  </form>

</div>

	<?php endif ?>
		
</body>
</html>