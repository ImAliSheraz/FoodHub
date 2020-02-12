<?php
include 'connection.php';
session_start();
if(!empty($_SESSION)){
$pro_id=$_POST['pro_id'];
$query = "SELECT * FROM products WHERE pro_id='$pro_id'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$_SESSION['pro_id'] = $row['pro_id'];
$_SESSION['pro_name'] = $row['pro_name'];
$_SESSION['pro_image'] = $row['pro_image'];

}
?>