<?php
/*
 * DATABASE CONNECTION
 */

// DATABASE: Connection variables
$db_host		= "10.5.18.71";
$db_name		= "11CS10059";
$db_username	= "11CS10059";
$db_password	= "jotjot";



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
