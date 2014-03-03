<?php
	
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	include('mysqlconnect.php');
	include('get_sharing_id.php');

	$next = $s_id+1;
	mysql_query("UPDATE 11CS10059.Global_Var SET Sharing_Id =".$next);

	$ve_id = $_POST['selected_vehicle'];
	$a = $_POST['no_of_passengers'];
	$b = $_POST['cost'];
	$c = $_POST['source'];
	$d = $_POST['dest'];
	$e = $_POST['start'];
	$f = $_POST['arrival'];
	$g = $_POST['date'];

	mysql_query("INSERT INTO 11CS10059.Sharing (`Id`, `selected_vehicle_id`, `no_of_passengers`, `cost`,`source`, `dest` , `start` , `arrival` , `Owner_Id` , `date` ,`initial_passengers`) VALUES ('".$s_id."','".$ve_id."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$_SESSION['Id']."','".$g."','".$a."')");

	header('Location: /dbms/Car_Pool/');

?>