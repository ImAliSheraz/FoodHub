<?php
include ('connection.php');
$pro_id=$_GET['id']; 
echo $q="DELETE FROM products WHERE pro_id='$pro_id'";
mysqli_query($conn,$q);
header('location:showProduct.php');
?>