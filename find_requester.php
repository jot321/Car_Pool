<?php

	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$source = $_POST['source'];
	$dest = $_POST['dest'];
	$inter1 = $_POST['inter1'];
	$inter2 = $_POST['inter2'];
	$inter3 = $_POST['inter3'];
	$inter4 = $_POST['inter4'];	

	$query  = "SELECT * FROM `11CS10059`.`open_message` WHERE `picking_point` = '".$source."' or `picking_point` = '".$inter1."' or `picking_point` = '".$inter2."' or `picking_point` = '".$inter3."' or `picking_point` = '".$inter4."'";

	$result_last = mysql_query($query);

	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">';
	echo '<tr><td>Name</td><td>Picking Point</td><td>Destination Point</td></tr>';
	while($row = mysql_fetch_array($result_last)){

		$d = $row['dest_point'];
		if($d == $dest or $d == $inter1 or $d == $inter2 or $d == $inter3 or $d ==$inter4){
			echo '<tr><td></td><td>'.$row['picking_point'].'</td><td>'.$d.'</td></tr>';
		}
	}

	echo '</table>';

?>