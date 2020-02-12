<?php
include("connection.php");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$role=$_POST['role'];
$gender=$_POST['gender'];
$q="INSERT INTO `user`( `user_name`, `user_email`, `user_password`, `user_address`,`user_role`, `user_gender`)VALUES ('$username','$email','$password','$address','$role','$gender')";
mysqli_query($conn,$q) OR die(mysqli_error($conn));
header('location:showUser.php');
?>