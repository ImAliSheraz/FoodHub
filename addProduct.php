<?php
include 'connection.php';
include 'AdminHeader.php';
$q="SELECT `category_id`, `category_name` FROM `categories`;";
$res=mysqli_query($conn,$q);
?>
<body>
	<div class="row">
		<div class="col-12">
			<form style="margin-top: 2%;" class="formStyle" action="insertProduct.php" method="post" enctype="multipart/form-data" >
			<h2 style="color: #04091E">Product Insertaion Portal:</h2>
			<label for="productName" style="float: left;">Product Name:</label>
			<input class="InputStyle" type="text" name="productName" placeholder="Enter Product Name Here" required>
			<label for="productPrice" style="float: left;"><br>Product Price:</label>
			<input class="InputStyle" type="text" name="productPrice" placeholder="Enter Product Price Here" required>
			<label for="productCategory" style="float: left;"><br>Product Category:</label>
			<select class="InputStyle" name="productCategory" required>
				<option>--Select Product Category--</option>
				<?php while ($row=mysqli_fetch_array($res)) {?>
				<option value="<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></option>
				<?php }?>
			</select>
			<label for="productImage" style="float: left;"><br>Product Image:</label>
			<input class="InputStyle" type="file" name="productImage" placeholder="Select Product Image Here" required>
			<label for="MaxQuntity" style="float: left;"><br>Product Max Quntity/Order:</label>
			<input class="InputStyle" type="text" name="MaxQuntity" placeholder="Enter Product Max Quntity/Order Here" required>
			<label for="productDescription" style="float: left;"><br>Product Description:</label>
			<textarea class="InputStyle" type="text" name="productDescription" placeholder="Enter Product Description Here" style="height: 100px;" required></textarea>
			<input class="InputStyle buttonStyle" type="submit" name="Submit" value="ADD Product">
			<br><br><br>
		    </form>
		</div>
	</div>
</body>
</html>