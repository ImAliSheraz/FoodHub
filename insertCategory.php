<?php
include("connection.php");
$cate=$_POST['category'];
$q="INSERT INTO `categories`(`category_name`) VALUES ('$cate')";
mysqli_query($conn,$q) OR die(mysqli_error($conn));
header('location:showCategory.php');
?>