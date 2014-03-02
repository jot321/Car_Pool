<?php

	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	include('mysqlconnect.php');
	include('get_vehicle_id.php');

	$next = $v_id +1;
	mysql_query("UPDATE 11CS10059.Global_Var SET Vehicle_Id =".$next);

	
	$name = $_POST['t_name'];
	$address = $_POST['t_add'];
	$vehicle_type = $_POST['t_v_t'];
	$sitting_capacity = $_POST['t_s_c'];

	mysql_query("INSERT INTO 11CS10059.Own_Vehicle (`Vehicle_Type`, `Sitting_Capacity`, `Owner`, `Id` , `Affinity`) VALUES ('".$vehicle_type."','".$sitting_capacity."','".$name."','".$v_id."','H')");
	mysql_query("INSERT INTO 11CS10059.Own_Vehicle_Relation (`Vehicle_Id` , `Owner_Id`) VALUES ('".$v_id."','".$_SESSION['Id']."')");

	header('Location: /dbms/Car_Pool/');

?>