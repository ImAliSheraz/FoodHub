<?php
include ('connection.php');
$cate_id=$_GET['id']; 
echo $q="DELETE FROM categories WHERE category_id='$cate_id'";
mysqli_query($conn,$q);
header('location:showCategory.php');
?>