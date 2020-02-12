<?php
include 'connection.php';
include 'AdminHeader.php';
$q="SELECT COUNT(user_id) AS Total_User FROM user";
$res=mysqli_query($conn,$q);
$User=mysqli_fetch_array($res);
$q="SELECT COUNT(category_id) AS Total_Category FROM categories";
$res=mysqli_query($conn,$q);
$Categories=mysqli_fetch_array($res);
$q="SELECT COUNT(pro_id) AS Total_Products FROM products";
$res=mysqli_query($conn,$q);
$Products=mysqli_fetch_array($res);
$q="SELECT COUNT(id) AS Total_Orders FROM orders";
$res=mysqli_query($conn,$q);
$Orders=mysqli_fetch_array($res);
?>
<body>
<div class="row">
	<div class="col-12">
		<center><h1>Hi! Admin,Welcome to Admin Panel</h1></center>
	</div>		
</div>
<div class="row" style="margin-top: 3%;">
	<div class="col-4">
		<div class="smallBox" id="BlueBox">
			<span><?php echo $User['Total_User']?></span>
			<h3><i class="fas fa-user"></i> Total Users</h3>
		</div>	
	</div>
	<div class="col-4">
		<div class="smallBox" id="OrangeBox" >
			<span><?php echo $Categories['Total_Category']?></span>
			<h3><i class="fas fa-list"></i> Total Categories</h3>
			
		</div>
	</div>
	<div class="col-4">
		<div class="smallBox" id="RedBox" >
			<span><?php echo $Products['Total_Products']?></span>
			<h3><i class="fas fa-hamburger"></i> Total Products</h3>
			
		</div>
	</div>
</div>
<div class="row" >
	<div class="col-4" style="margin-top: 3%;">
		<div class="smallBox" id="GreenBox" >
			<span><?php echo $Orders['Total_Orders']?></span>
			<h3><i class="fas fa-hamburger"></i> Total Orders</h3>
			
		</div>
	</div>
	
</div>
</body>
</html>
