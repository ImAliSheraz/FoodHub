<?php
include("connection.php");
$id=$_POST['id'];
$productName=$_POST['productName'];
$productPrice=$_POST['productPrice'];
$MaxQuntity=$_POST['MaxQuntity'];
$productDescription=$_POST['productDescription'];
$q="UPDATE `products` SET `pro_name`='$productName',`pro_price`='$productPrice',`pro_MaxQuntity`='$MaxQuntity',`pro_description`='$productDescription' WHERE pro_id = '$id'";
$res=mysqli_query($conn,$q);
header('location:showProduct.php');
?>