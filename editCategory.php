<?php 
include 'connection.php';
include 'AdminHeader.php';
$id= $_GET['id'];
$q="SELECT `category_id`, `category_name` FROM `categories` WHERE category_id = '$id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_object($res);
?>
<body>
<div class="row">
<div class="col-12">
	<form style="margin-top: 2%;" class="formStyle" action="updateCategory.php" method="POST" >
	<h2 style="color: #04091E">Category Updation Portal:</h2>
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<label for="category name" style="float: left;">Name:</label>
	<input class="InputStyle" type="text" name="Category" placeholder="Enter Category Name Here" value="<?php echo $row->category_name?>" required>
	<input class="InputStyle buttonStyle" type="submit" name="Submit" value="Update">
	<br><br><br>
    </form>
</div>
</div>

</body>
</html>