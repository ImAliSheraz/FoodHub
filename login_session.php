<?php
include"connection.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE user_email='$email' AND user_password='$password'";
$res = mysqli_query($conn, $sql) OR die(mysqli_error($conn));
$row = mysqli_fetch_object($res);
if (!empty($row))
{  
	session_start();
	$_SESSION["user_id"]=$row->user_id;
	$_SESSION["user_name"]=$row->user_name;
	$_SESSION["user_email"]=$row->user_email;
	$_SESSION["user_role"]=$row->user_role; 
	if ($_SESSION["user_role"]==3) {
		header('Location:index.php');
	}
	else{

		header('Location:adminIndex.php');
	}	
}else
{
	echo '<script language="javascript">';
	echo 'alert("ID or PASSWORD IS WRONG")';
	echo '</script>';
    header('Location:signin.php');
}
  
?>