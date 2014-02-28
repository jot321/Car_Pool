<?php
	
	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$tmparr = array();
	$count = 0;

	$query = "SELECT `Vehicle_Id` from 11CS10059.Own_Vehicle_Relation where `Owner_Id` ='".$_SESSION['Id']."'";
	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result)) {
		array_push($tmparr, $row['Vehicle_Id']);
  	}

  	echo '<table  id="courses" width="90%" align="middle" class="result"><tbody>';	

  	while($count < count($tmparr)){

	 echo '<tr><td> <b>Vehicle Id</b> </td>  <td> '.$tmparr[$count].'</td></tr> ';
	 $count = $count + 1;

	}

    echo '</table>';

?>