<?php

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	
	include('get_id.php');

	$next = $id +1;

	mysql_query("UPDATE 11CS10059.Global_Var SET Peronal_Id =".$next);

	$name = $_POST['name'];
	$add = $_POST['add'];
 	$mob = $_POST['phone'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];


	mysql_query("INSERT INTO 11CS10059.Person (`Name`, `Email`, `Address`, `Id`, `Password`, `Mobile`) VALUES ('".$name."','".$email."','".$add."','".$id."','".$pass1."','".$mob."')");
	header('Location: index_reg.php');


?>