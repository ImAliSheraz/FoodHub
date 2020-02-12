<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FoodHub.pk</title>
	<link rel="icon" href="assets/images/footer.png" type="image/gif">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Hotel Mangement System">
    <meta name="keywords" content="online hotel,food">
    <meta name="author" content="Ali Sheraz">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/styleTwo.css">
</head>
<body>
<header>
	<div class="row" style="margin-top: 5px;">
		<div class="col-4">
			<center><h1 style="color: white;">FoodHub.pk</h1></center>
		</div>
		<div class="col-4 HeaderLink">
			<a class="linkStyle" href="index.php"><i class="fas fa-home"></i> Home</a>
			<a class="linkStyle" href="shop.php"><i class="fas fa-utensils"></i> Shop</a>
			<a class="linkStyle" href="about.php"><i class="fas fa-info-circle"></i> Who we are</a>
			<a class="linkStyle" href="contact.php"><i class="fas fa-envelope-open"></i> Contact Us</a>
		</div>
		<div class="col-4 HeaderLink">
			<a class="linkStyle" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
			<?php if(!empty($_SESSION)){?>
			<a class="linkStyle" href="signout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
			<span class="linkStyle"><i class="fas fa-user"></i> <?php echo $_SESSION['user_name'];?></span>
		    <?php }
		    else{?>
			<a class="linkStyle" href="signin.php"><i class="fas fa-sign-in-alt"></i> Sign In</a>
		    <?php }?>	
		</div>	
	</div>
</header>
</body>
</html>