<?php

	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$req_id = $_POST['requester'];

	$query = "INSERT INTO 11CS10059.Notification_Granted SELECT * FROM 11CS10059.Notification WHERE `Requester_Id` = ".$req_id;
	mysql_query($query);

	$query_2 = "DELETE FROM 11CS10059.Notification WHERE `Requester_Id` = ".$req_id;
	mysql_query($query_2);

	header('Location: /dbms/Car_Pool/');
?>