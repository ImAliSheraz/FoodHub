<?php include 'header.php';?>
<body>
<div class="row">
	<div class="col-12">
    <img class="slider slider1" src="assets/images/slider3.jpg" alt="Images Unavailabe" >
    <img class="slider slider1" src="assets/images/slider5.jpg" alt="Images Unavailabe">
    <img class="slider slider1" src="assets/images/slider4.jpg" alt="Images Unavailabe">
    <img class="slider slider1" src="assets/images/slider2.jpg" alt="Images Unavailabe">
 </div>
<div class="row" style="height: 500px;">
  <center><h2 style="color: #04091E; text-transform: uppercase;">News and Events</h2></center>
  <div class="col-4">
    <div class="Post" style="height: 400px;">
      <img src="assets/images/students.jpg" style="width:80%; height: 300px; margin-left: 10%; margin-top: 5%;">
      <center><span><b>Student Discount</b></span></center>
      <center><span>Coming Soon</span></center>
    </div>
  </div>
  <div class="col-4">
    <div class="Post" style="height: 400px;">
      <img src="assets/images/bbq2.jpg" style="width:80%; height: 300px; margin-left: 10%; margin-top: 5%;">
      <center><span><b>Offer BBQ</b></span></center>
      <center><span>Coming Soon</span></center>
    </div>
  </div>
   <div class="col-4">
    <div class="Post" style="height: 400px;">
      <img src="assets/images/donatefood.jpg" style="width:80%; height: 300px; margin-left: 10%; margin-top: 5%;">
      <center><span><b>Donate Food Campain</b></span></center>
      <center><span>Coming Soon</span></center>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
  <center><h2 style="color: #04091E; text-transform: uppercase;">We Provide Quality</h2></center>
  </div>
  <div class="col-12 background" style="background-image: url(assets/images/food1.jpg)"></div>
  <br><br>
  </div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);
setInterval ( function() { showDivs(slideIndex+=1);},2000)
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slider1");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</body>
<?php include 'footer.php';?>