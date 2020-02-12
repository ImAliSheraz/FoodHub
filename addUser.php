<?php 
include 'connection.php';
include 'AdminHeader.php';
$q="SELECT role_id,role_name FROM roles";
$res=mysqli_query($conn,$q);
?>
<body>
	<div class="row">
		<div class="col-12">
			<form style="margin-top: 2%;" class="formStyle" action="insertUser.php" method="post" >
			<h2 style="color: #04091E">User Insertaion Portal:</h2>
			<label for="username" style="float: left;">Name:</label>
			<input class="InputStyle" type="text" name="username" placeholder="Enter Name Here" required>
			<label for="email" style="float: left;"><br>Email:</label>
			<input class="InputStyle" type="text" name="email" placeholder="Enter Email Here" required>
			<label for="password" style="float: left;"><br>Password:</label>
			<input class="InputStyle" type="password" name="password" placeholder="Enter Password Here" required>
			<label for="address" style="float: left;"><br>Address:</label>
			<input class="InputStyle" type="text" name="address" placeholder="Enter Address Here" required>
			<label for="gender" style="float: left;"><br>Role:</label>
			<select class="InputStyle" name="role" required>
				<option>--Select User Role--</option>
				<?php while ($row=mysqli_fetch_array($res)) {?>
				<option value="<?php echo $row['role_id'];?>"><?php echo $row['role_name'];?></option>
				<?php }?>
			</select>
			<div><br><label for="gender" style="float: left;">Gender:</label>
			<input  type="radio" name="gender" value="Male"> Male
            <input  type="radio" name="gender" value="Female"> Female
            </div>
			<input class="InputStyle buttonStyle" type="submit" name="Submit" value="ADD USER">
			<br><br><br>
		    </form>
		</div>
	</div>

</body>
</html>