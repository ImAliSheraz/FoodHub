<?php
include("connection.php");
$id=$_POST['id'];
$Category=$_POST['Category'];
$q="UPDATE categories SET category_name = '$Category' WHERE category_id = '$id' ";
$res=mysqli_query($conn,$q);
header('location:showCategory.php');
?>