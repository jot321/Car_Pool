<?php

	// session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	include('mysqlconnect.php');
	include('get_vehicle_id.php');

	$next = $v_id +1;
	mysql_query("UPDATE 11CS10059.Global_Var SET Vehicle_Id =".$next);

	$vehicle_type = $_POST['Vehicle-Type'];
	$yofp = $_POST['yofp'];
	$sitting_capacity = $_POST['sitting_capacity'];
	$owner = $_POST['owner'];
	$license_no = $_POST['license_no'];
	$date_of_license = $_POST['date_of_license'];

	mysql_query("INSERT INTO 11CS10059.Own_Vehicle (`Vehicle_Type`, `Year_of_Purchase`, `Sitting_Capacity`, `Owner`, `License_No`, `Date_of_License` , `Id`) VALUES ('".$vehicle_type."','".$yofp."','".$sitting_capacity."','".$owner."','".$license_no."','".$date_of_license."','".$v_id."')");
	mysql_query("INSERT INTO 11CS10059.Own_Vehicle_Relation (`Vehicle_Id` , `Owner_Id`) VALUES ('".$v_id."','".$_SESSION['Id']."')");

	header('Location: /dbms/Car_Pool/');

?>