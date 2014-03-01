<?php
	
	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$tmparr = array();
	$v_t = array();
	$s_t = array();
	$owner = array();

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

			// $v_t = $row_sub['Vehicle_Type'];
			// $s_t = $row_sub['Sitting_Capacity'];
			// $owner = $row_sub['Owner'];
		}

		array_push($tmparr, $row['Vehicle_Id']);
  	}

  	echo '<h3>Vehicles You have Registered.</h3>';
  	echo '<table  id="courses" width="90%" align="middle" class="result"><tbody>';	
  	echo '<tr><td><b>Vehicle Id</b></td><td><b>Vehicle Type</td><td><b>Sitting Capacity</td><td><b>Owner</td></tr>';

  	while($count < count($tmparr)){

	 echo '<tr><td> '.$tmparr[$count].'</td>';
	 echo '<td>'.$v_t[$count].'</td>';
	 echo '<td>'.$s_t[$count].'</td>';
	 echo '<td>'.$owner[$count].'</td></tr>';

	 $count = $count + 1;

	}
	echo '</table>';
	echo '<form action = "vehicle_selected_for_sharing.php" method = "post" name="form1">';
	echo '<input type = "text" name = "selected_vehicle" placeholder = "Enter Vehicle Id:"></input><br>
			<input type = "text" name = "no_of_passengers" placeholder = "No of Passengers:"></input><br>
			<input type = "text" name = "cost" placeholder = "Cost:"></input><br>	
			<input type = "text" name = "source" placeholder = "Source:"></input><br>
			<input type = "text" name = "dest" placeholder = "Destination:"></input><br>
			<input type = "text" name = "start" placeholder = "Start Time:"></input><br>
			<input type = "text" name = "arrival" placeholder = "Arrival Time:"></input><br>
			<input type = "text" name = "date" placeholder = "Date of Travel:"></input><br>

			';
	echo '<button type="submit" class="btn btn-default">Go</button>';
	echo '</form>';
    

?>