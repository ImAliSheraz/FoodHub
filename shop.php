<?php
include 'connection.php';
include 'header.php'; 
$q="SELECT `category_id`, `category_name` FROM `categories`;";
$res=mysqli_query($conn,$q);
$P="SELECT `pro_id`, `pro_name`, `pro_price`, `pro_category`, `pro_image`, `pro_MaxQuntity`, `pro_description` FROM `products`";
$Products=mysqli_query($conn,$P);
?>
<body>	
<aside>
<div id="mySidenav" class="sidenav" style="width: 20%; height: 820px; overflow-y:auto; float: left;">
<a href="shop.php"><i class="fas fa-arrow-right"></i> All Products</a>
<?php while ($row=mysqli_fetch_array($res)) {?>
<a href="cateProduct.php?cateId=<?php echo $row['category_id']?>"><i class="fas fa-arrow-right"></i> <?php echo $row['category_name']; ?></a>
<?php } ?>
</div> 
</aside>
<div class="row" style="width: 80%; height: 800px; margin-left: 20%;">
	<center><h2>All Products</h2></center>
	<?php while ($pro=mysqli_fetch_array($Products)) {?>
	<div class="col-4">
	<div class="Post">
	<?php if(!empty($pro['pro_image'])) {?>
    <img src="uploads/<?php echo $pro['pro_image'];?>" style="width:80%; height: 100px; margin-left: 10%; margin-top: 5%;">
    <?php } else { ?>
    <img src="uploads/defult.png" style="width:60px;">
    <?php }?>
    <center><span><b><?php echo $pro['pro_name']; ?></b></span></center>
    <center><span><b>Rs.<?php echo $pro['pro_price']; ?></b></span></center>
    <span>
    <a class="buttonStyle smallButton" href="ProductDetail.php?id=<?php echo $pro['pro_id']?>">Detail</a>
    <a class="buttonStyle smallButton" href="" >Add to Cart</a>
    </span>
	</div>
	</div>
    <?php } ?>
</div>
</body>
<?php include 'footer.php';?>