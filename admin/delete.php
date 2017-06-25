<?php  
session_start();

require_once '../connection.php';

$id = $_GET['del'];

$sql = "DELETE FROM customers WHERE id='$id'";

if(mysqli_query($dbc, $sql)){
	echo "<script>alert('Order removed sucessfully.')</script>";
	echo "<script>window.open('admin.php', '_self')</script>";
}else{
	echo "<script>alert('Error removing order.')</script>";
	echo "<script>window.open('admin.php', '_self')</script>";
}

?>