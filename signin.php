<?php include 'header.php';?>
<body>

	<div class="row">
		<div class="col-12 background" style="background-image: url(assets/images/loginCover.jpg)">
			<!-- <center><span class="ContentTextHead">Think Outside the Bun.</span></center> -->
		</div>
		<div class="col-12">
			<form class="formStyle" action="login_session.php" method="post" >
			<h2 class="HeadingStyle">Login Here</h2>
			<label for="email" style="float: left;">Email:</label>
			<input class="InputStyle" type="text" name="email" placeholder="Enter Your Email" required>
			<label for="password" style="float: left;"><br>Password:</label>
			<input class="InputStyle" type="password" name="password" placeholder="Enter Your Password" required>
			<input class="InputStyle buttonStyle" type="submit" name="Submit" value="LOGIN">
		    </form>
		</div>
	</div>
	<center><hr style="width: 70%"></center>
	<div class="row">
		<center><span>Doesn't hava Account ?</span></center>
		<div class="col-12">
		<center><a href="signup.php" class="buttonStyle" style="width: 15%;">Create Account Here</a></center>
		<br><br><br>
		</div>
	</div>
<!-- </div>
 --></body>
<?php include 'footer.php';?>