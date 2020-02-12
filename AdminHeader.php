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
<?php if(!empty($_SESSION)){
	if($_SESSION['user_role']!=3){
?>
<header>
<div class="row" style="margin-top: 5px;">

     <div class="col-4">
		<h1 style="cursor:pointer; color: white;" onclick="openNav()">&#9776; Open</h1>
	</div>
	<div class="col-4">
		<center><h1 style="color: white;">FoodHub.pk</h1></center>
	</div>
	<div class="col-4">
		<center><h3 class="linkStyle" style="margin-top: 6%;"><i class="fas fa-user"></i> <?php echo $_SESSION['user_name'];?></h3></center>
	</div>
</div>
</header>
<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="index.php"><i class="fas fa-dot-circle"></i> Frontend</a>
<a href="adminIndex.php"><i class="fas fa-dot-circle"></i> Admin Panel</a>
<a href="addUser.php"><i class="fas fa-dot-circle"></i> Add User</a>
<a href="showUser.php"><i class="fas fa-dot-circle"></i> Show User</a>
<a href="addCategory.php"><i class="fas fa-dot-circle"></i> Add Categories</a>
<a href="showCategory.php"><i class="fas fa-dot-circle"></i> show Categories</a>
<a href="addProduct.php"><i class="fas fa-dot-circle"></i> Add Products</a>
<a href="showProduct.php"><i class="fas fa-dot-circle"></i> Show Products</a>
<a href="#"><i class="fas fa-dot-circle"></i> Orders</a>
<a href="#"><i class="fas fa-dot-circle"></i> Order Details</a>
<a href="signout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
</div> 
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "20%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<?php }
else {header('Location:unAuthr.php');}
}
else{ 
header('Location:signin.php');
}?>
</body>
</html>