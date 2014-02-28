<?php
	
	include('mysqlconnect.php');
	session_start();
	// ini_set('display_errors', 'On');
	error_reporting(E_ALL);	


	$source = $_POST['source'];
	$dest = $_POST['dest'];

	$query = "SELECT * FROM 11CS10059.Sharing WHERE `source` = '".$source."' and `dest`= '".$dest."'";

	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){

		echo $row[Id];
	}

?>