<?php 
include 'connection.php';
include 'AdminHeader.php';
$pro_id= $_GET['id'];
$q="SELECT `pro_id`, `pro_name`, `pro_price`,   `pro_MaxQuntity`, `pro_description` FROM `products` WHERE pro_id='$pro_id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_object($res);
?>
<body>
	<div class="row">
		<div class="col-12">
			<form style="margin-top: 2%;" class="formStyle" action="updateProduct.php" method="post" enctype="multipart/form-data" >
			<h2 style="color: #04091E">Product Updation Portal:</h2>
			<input type="hidden" name="id" value="<?php echo $pro_id ?>">
			<label for="productName" style="float: left;">Product Name:</label>
			<input class="InputStyle" type="text" name="productName" placeholder="Enter Product Name Here" value="<?php echo $row->pro_name?>"required>
			<label for="productPrice" style="float: left;"><br>Product Price:</label>
			<input class="InputStyle" type="text" name="productPrice" placeholder="Enter Product Price Here" value="<?php echo $row->pro_price?>" required>
			<label for="MaxQuntity" style="float: left;"><br>Product Max Quntity/Order:</label>
			<input class="InputStyle" type="text" name="MaxQuntity" placeholder="Enter Product Max Quntity/Order Here" value="<?php echo $row->pro_MaxQuntity?>" required>
			<label for="productDescription" style="float: left;"><br>Product Description:</label>
			<textarea class="InputStyle" type="text" name="productDescription" placeholder="Enter Product Description Here" style="height: 100px;" required><?php echo $row->pro_description?></textarea>
			<input class="InputStyle buttonStyle" type="submit" name="Submit" value="Update Product">
			<br><br><br>
		    </form>
		</div>
	</div>
</body>
</html>