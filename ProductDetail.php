<?php
include 'connection.php';
include 'header.php';
$pro_id=$_GET['id'];
$q="SELECT `category_id`, `category_name` FROM `categories`;";
$res=mysqli_query($conn,$q);
$P="SELECT `pro_id`, `pro_name`, `pro_price`, `pro_category`, `pro_image`, `pro_MaxQuntity`, `pro_description` FROM `products` WHERE pro_id='$pro_id'";
$Products=mysqli_query($conn,$P);
$pro=mysqli_fetch_array($Products);
?>
<body>	
<aside>
<div id="mySidenav" class="sidenav" style="width: 20%; height: 820px; overflow-y:auto; float: left;">
<a href="shop.php"><i class="fas fa-arrow-right"></i> All Products</a>
<?php while ($row=mysqli_fetch_array($res)) {?>
<a href="cateProduct.php?id=<?php echo $row['category_id']?>"><i class="fas fa-arrow-right"></i> <?php echo $row['category_name']; ?></a>
<?php } ?>
</div> 
</aside>
<div class="row" style="width: 80%; height: 800px; margin-left: 20%;">
	<center><h2>Products Detail</h2></center>
	<div class="col-6"> 
    <?php if(!empty($pro['pro_image'])) {?>
    <img src="uploads/<?php echo $pro['pro_image'];?>" style="width:90%; height: 500px; margin-left: 5%; margin-top: 5%;">
    <?php } else { ?>
    <img src="uploads/defult.png" style="width:60px;">
    <?php }?>
	</div>
	<div class="col-6">
		<h1>Product Name:</h1>
		<span><b><?php echo $pro['pro_name']; ?></b></span>
		<h1>Price:</h1>
		<span><b>Rs.<?php echo $pro['pro_price']; ?></b></span>
		<h1>Description:</h1>
		<span><b><?php echo $pro['pro_description']; ?></b></span>
	</div>
	<form method="post" action="#">
        <button type="submit" class="buttonStyle smallButton">Add To Cart</button>
        <input type="hidden" name="pro_id" value="<?php echo $pro['pro_id'];?>">
     </form>
</div>
</body>
<?php include 'footer.php';?>