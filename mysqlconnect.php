<?php
/*
 * DATABASE CONNECTION
 */

// DATABASE: Connection variables
$db_host		= "127.0.0.1";
$db_name		= "Car_Pool";
$db_username	= "root";
$db_password	= "jot";



$month = date('n');
$year = date('y');
$curday = date('j');

if($curday>25)
	$month = $month + 1;

//$month = 9;
$db_name = $db_name.'_'.$month.'_'.$year ;


// DATABASE: Try to connect
if (!$db_connect = mysql_connect($db_host, $db_username, $db_password))
	die('Unable to connect to MySQL.');


?>
