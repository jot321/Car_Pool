<?php

	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$option_sharing = $_POST['selected_sharing_option'];
	$num = $_POST['no_of_passengers'];
	$msg = $_POST['msg'];

	$query_1 = 'SELECT Owner_Id FROM 11CS10059.Sharing WHERE Id = '.$option_sharing;
	$query_1_1 = 'SELECT no_of_passengers FROM 11CS10059.Sharing WHERE Id = '.$option_sharing;
	$result = mysql_query($query_1);
	$result_2 = mysql_query($query_1_1);

	while($row = mysql_fetch_array($result)){
		$owner = $row['Owner_Id'];
	}

	while($row = mysql_fetch_array($result_2)){
		$total =  $row['no_of_passengers'];
	}

	$left = $total - $num;

	$query_2 = 'UPDATE 11CS10059.Sharing Set no_of_passengers = '.$left.' WHERE Id = '.$option_sharing;
	mysql_query($query_2);

	$query_3 = "INSERT INTO `11CS10059`.`Notification` (`Owner_Id`, `Requester_Id`, `no_of_passengers` , `Message`) VALUES ('".$owner."', '".$_SESSION['Id']."', '".$num."','".$msg."')";
	mysql_query($query_3);

	header('Location: /dbms/Car_Pool/');
?>