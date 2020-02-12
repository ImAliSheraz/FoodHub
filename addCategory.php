<?php 
include 'connection.php';
include 'AdminHeader.php';
$q="SELECT role_id,role_name FROM roles";
$res=mysqli_query($conn,$q);
?>
<body>
	<div class="row">
		<div class="col-12">
			<form style="margin-top: 2%;" class="formStyle" action="insertCategory.php" method="post" >
			<h2 style="color: #04091E">Category Insertaion Portal:</h2>
			<label for="categoryname" style="float: left;">Category Name:</label>
			<input class="InputStyle" type="text" name="category" placeholder="Enter Categgory Name Here" required>
			<input class="InputStyle buttonStyle" type="submit" name="Submit" value="ADD CATEGORY">
			<br><br><br>
		    </form>
		</div>
	</div>

</body>
</html>