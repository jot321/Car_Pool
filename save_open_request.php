<?php

	include('mysqlconnect.php');
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
	session_start();

	$pp=$_POST['picking_point'];
	$dp=$_POST['destination_point'];
	$cost=$_POST['cost'];
	$date=$_POST['date'];

	$query = "INSERT INTO `11CS10059`.`open_message` (`Id`, `picking_point`, `dest_point`, `cost`, `date`) VALUES ('".$_SESSION['Id']."', '".$pp."', '".$dp."', '".$cost."', '".$date."')";
	mysql_query($query);

	header('Location: /dbms/Car_Pool/');

?>