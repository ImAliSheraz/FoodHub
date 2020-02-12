<?php  
include 'connection.php';
$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productCategory = $_POST['productCategory'];
if(!empty($_FILES["productImage"]["name"])) 
{
	$path='uploads/';
	$newname=$path.$_FILES["productImage"]["name"];
	move_uploaded_file($_FILES['productImage']['tmp_name'],$newname);
	$productImage=$_FILES["productImage"]["name"];
} 
else
{
	$productImage='0'; 
}
$MaxQuntity = $_POST['MaxQuntity'];
$productDescription = $_POST['productDescription'];
$q="INSERT INTO `products`(`pro_name`, `pro_price`, `pro_category`, `pro_image`,`pro_MaxQuntity`, `pro_description`) VALUES ('$productName','$productPrice','$productCategory','$productImage','$MaxQuntity','$productDescription')";
mysqli_query($conn,$q) OR die(mysqli_error($conn));
header('location:showProduct.php');
?>