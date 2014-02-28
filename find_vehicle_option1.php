<?php
	
	include('mysqlconnect.php');
	session_start();
	// ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	include('index.php');

	$source = $_POST['option1_1'];
	$dest = $_POST['option1_2'];

	$query = "SELECT * FROM 11CS10059.Sharing WHERE `source` = '".$source."' and `dest`= '".$dest."'";

	$result = mysql_query($query);

	echo "jot";

	// while($row = mysql_fetch_array($result)){


	// }

?>