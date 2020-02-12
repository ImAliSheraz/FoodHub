<?php
include ('connection.php');
$user_id=$_GET['id']; 
echo $q="DELETE FROM user WHERE user_id='$user_id'";
mysqli_query($conn,$q);
header('location:showUser.php');
?>