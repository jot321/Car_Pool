<?php
	
	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$tmparr = array();
	$v_t = array();
	$s_t = array();
	$owner = array();
	$affinity = array();

	$count = 0;

	$query = "SELECT `Vehicle_Id` from 11CS10059.Own_Vehicle_Relation where `Owner_Id` ='".$_SESSION['Id']."'";
	$result = mysql_query($query);

	while ($row = mysql_fetch_array($result)) {

		$query_sub = "SELECT * FROM `11CS10059`.`Own_Vehicle` WHERE `Id` = ".$row['Vehicle_Id'];
		$interim_result = mysql_query($query_sub);

		while($row_sub = mysql_fetch_array($interim_result)){
			
			array_push($v_t, $row_sub['Vehicle_Type']);
			array_push($s_t, $row_sub['Sitting_Capacity']);
			array_push($owner, $row_sub['Owner']);
			array_push($affinity,$row_sub['Affinity']);

		}

		array_push($tmparr, $row['Vehicle_Id']);
  	}

  	echo '<h3>Vehicles You have Registered.</h3>';
  	echo '<table  id="courses" width="90%" align="middle" class="result"><tbody>';	
  	echo '<tr><td><b>Vehicle Id</b></td><td><b>Vehicle Type</td><td><b>Sitting Capacity</td><td><b>Owner</td><td><b>Self/Hired</td></tr>';

  	while($count < count($tmparr)){

	 echo '<tr><td> '.$tmparr[$count].'</td>';
	 echo '<td>'.$v_t[$count].'</td>';
	 echo '<td>'.$s_t[$count].'</td>';
	 echo '<td>'.$owner[$count].'</td>';
	 echo '<td>';

	if($affinity[$count] == "S")
	 	echo 'Self';
	if($affinity[$count] == "H")
		echo 'Hired';
	 echo '</td></tr>';

	 $count = $count + 1;

	}

	echo '</table>';
	echo '<h4>Enter Your Preferred Vehicles from above :</h4>';
	echo '<table  id="courses" width="90%" align="middle" class="result">';
	echo '<form action = "vehicle_selected_for_sharing.php" method = "post" name="form1">';
	echo '<tr><td>Enter Vehicle Id:</td><td><input type = "text" name = "selected_vehicle" placeholder = ""></input></td></tr>
			<tr><td>No of Passengers:</td><td><input type = "text" name = "no_of_passengers" placeholder = ""></input></td></tr>
			<tr><td>Cost:</td><td><input type = "text" name = "cost" placeholder = ""></input></td></tr>	
			<tr><td>Source:</td><td><input type = "text" name = "source" placeholder = ""></input></td></tr>
			<tr><td>Destination:</td><td><input type = "text" name = "dest" placeholder = ""></input></td></tr>
			<tr><td>Start Time:</td><td><input type = "text" name = "start" placeholder = ""></input></td></tr>
			<tr><td>Arrival Time:</td><td><input type = "text" name = "arrival" placeholder = ""></input></td></tr>
			<tr><td>Date of Travel:</td><td><input type = "text" name = "date" placeholder = ""></input></td></tr>

			';
	echo '<tr><td><button type="submit" class="btn btn-default">Go</button></td><td></td></tr></table>';
	echo '</form>';
    

?>