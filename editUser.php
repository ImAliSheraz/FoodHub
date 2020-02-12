<?php 
include 'connection.php';
include 'AdminHeader.php';
$id= $_GET['id'];
$q="CALL `spUpdatableUser`('$id')";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_object($res);
?>
<body>
<div class="row">
<div class="col-12">
	<form style="margin-top: 2%;" class="formStyle" action="updateUser.php" method="POST" >
	<h2 style="color: #04091E">User Updation Portal:</h2>
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<label for="username" style="float: left;">Name:</label>
	<input class="InputStyle" type="text" name="username" placeholder="Enter Name Here" value="<?php echo $row->user_name?>" required>
	<label for="email" style="float: left;"><br>Email:</label>
	<input class="InputStyle" type="text" name="email" placeholder="Enter Email Here" value="<?php echo $row->user_email?>"  required>
	<label for="address" style="float: left;"><br>Address:</label>
	<input class="InputStyle" type="text" name="address" placeholder="Enter Address Here" value="<?php echo $row->user_address?>" required>
	<input class="InputStyle buttonStyle" type="submit" name="Submit" value="Update">
	<br><br><br>
    </form>
</div>
</div>

</body>
</html>