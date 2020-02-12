<?php
include("connection.php");
$id=$_POST['id'];
$username=$_POST['username'];
$email=$_POST['email'];
$addres=$_POST['address'];
$q="CALL `spUpdateUser`('$id','$username','$email','$addres');";
$res=mysqli_query($conn,$q);
header('location:showUser.php');
?>