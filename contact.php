<?php include 'header.php';?>
<body>
<div class="row" style="height: 600px;">
	<div class="col-12">
		<center><h2 style="color: #04091E; text-transform: uppercase;">Your Feed Back in Most valueable for us</h2></center>
	</div>
	<div class="col-6">
		<form style="margin-top: 2%;" class="formStyle" action="#" method="post" >
		<h2 class="HeadingStyle">Query Here</h2>
		<label for="username" style="float: left;">Name:</label>
		<input class="InputStyle" type="text" name="username" placeholder="Enter Your Name" required>
		<label for="email" style="float: left;"><br>Email:</label>
		<input class="InputStyle" type="text" name="email" placeholder="Enter Your Email" required>
		<label for="address" style="float: left;"><br>Message:</label>
		<input  class="InputStyle" type="text" name="message" placeholder="Enter Your Message" required>
		<input style="margin-top: 5%;" onclick="SubmitFeed()" class="InputStyle buttonStyle" type="submit" name="Submit" value="Place Query!">
		<br><br><br>
	    </form>
	</div>
	<div class="col-6">
		<center><a href="https://www.google.com/maps/place/Allama+Iqbal+Town,+Lahore,+Punjab,+Pakistan/@31.5112923,74.2666627,14z/data=!3m1!4b1!4m5!3m4!1s0x3919030a758931b1:0xd2c9ccbb7f4c5601!8m2!3d31.512412!4d74.2844714"><img style="margin-top: 2%; width: 50%; height: 150px;" src="assets/images/map.png"></a></center>
		<div style="text-transform: uppercase; color: #99A3A4; font-size: 20px; width: 50%; margin-left: 25%;">
			<br><br><span><i class="fas fa-map-marker-alt"></i> xyx,Lahore,Punajb,Pakistan</span>
			<br><br>
			<span><i class="fas fa-mobile"></i> +92 300 1234567</span>
			<br><br>
			<span><i class="fas fa-envelope-square"></i> info@foodhub.com</span>
		</div>
	</div>
</div>
	<script>
function SubmitFeed() {
  alert("Thanks for your Query,We will Contact as soon as Possible.");
}
</script>
</body>
<?php include 'footer.php';?>