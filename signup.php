<?php 
include 'connection.php';
include 'header.php';
$q="SELECT role_id,role_name FROM roles WHERE role_id=3";
$res=mysqli_query($conn,$q);
?>
<body>
    <div class="row" style="width: 80%; margin-left: 12%;">
		<div class="col-12" id="clockdiv">
			<div class="col-2-5" style="margin-right: 5%;">
				<div class="box">
					<span id="days"></span>
			        <div class="smalltext">Days</div>	
				</div>
			</div>
			<div class="col-2-5" style="margin-right:5%;">
				<div class="box">
					<span id="hours"></span>
			        <div class="smalltext">Hours</div>
				</div>
			</div>
			<div class="col-2-5" style="margin-right:5%;">
				<div class="box">
					<span id="minutes"></span>
			        <div class="smalltext">Minutes</div>
				</div>
			</div>
			<div class="col-2-5">
				<div class="box">
					<span id="seconds"></span>
			        <div class="smalltext">Seconds</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
		 <center><h2 style="color: #1C2833; text-decoration: none;">Time Left to Grab new Offers</h2></center>
		</div>
	</div>
	<center><hr style="width: 70%;"></center>
	<div class="row">
		<div class="col-12">
			<form style="margin-top: 2%;" class="formStyle" action="#" method="post" >
			<h2 class="HeadingStyle">Sign Up Here</h2>
			<label for="username" style="float: left;">Name:</label>
			<input class="InputStyle" type="text" name="username" placeholder="Enter Your Name" required>
			<label for="email" style="float: left;"><br>Email:</label>
			<input class="InputStyle" type="text" name="email" placeholder="Enter Your Email" required>
			<label for="password" style="float: left;"><br>Password:</label>
			<input class="InputStyle" type="password" name="password" placeholder="Enter Your Password" required>
			<label for="address" style="float: left;"><br>Address:</label>
			<input class="InputStyle" type="text" name="address" placeholder="Enter Your Address" required>
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
			<input class="InputStyle buttonStyle" type="submit" name="Submit" value="SIGN UP">
			<br><br><br>
		    </form>
		</div>
	</div>
</body>
<script type="text/javascript">
function countdown(){
var now = new Date();
var eventDate = new Date(2019, 12, 31);

var currentTiime = now.getTime();
var eventTime = eventDate.getTime();

var remTime = eventTime - currentTiime;

var s = Math.floor(remTime / 1000);
var m = Math.floor(s / 60);
var h = Math.floor(m / 60);
var d = Math.floor(h / 24);

h %= 24;
m %= 60;
s %= 60;

h = (h < 10) ? "0" + h : h;
m = (m < 10) ? "0" + m : m;
s = (s < 10) ? "0" + s : s;

document.getElementById("days").textContent = d;
document.getElementById("days").innerText = d;

document.getElementById("hours").textContent = h;
document.getElementById("minutes").textContent = m;
document.getElementById("seconds").textContent = s;

setTimeout(countdown, 1000);
}

countdown();

</script> 
<?php include 'footer.php';?>