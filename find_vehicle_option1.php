<?php
	
	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'Off');
	error_reporting(E_ALL);	


	$source = $_POST['source'];
	$dest = $_POST['dest'];

	$query = "SELECT * FROM 11CS10059.Sharing WHERE `source` = '".$source."' and `dest`= '".$dest."'";

	$result = mysql_query($query);

	echo '<table  id="courses" width="90%" align="middle" class="result table-striped"><tbody>';
	echo '<tr><td><b>Sharing Id</td><td><b>Owner</td><td><b>Contact No.</td><td><b>Vehicle Id</td><td><b>Vehicle</td><td><b>Sitting Capacity</td><td><b>Inital Seats</td><td><b>Seats Left</td><td><b>Cost</td></tr>';

	while($row = mysql_fetch_array($result)){

		$query_sub = "SELECT `Name`,`Mobile` FROM `11CS10059`.`Person` WHERE `Id` = ".$row['Owner_Id'];
		$interim_result = mysql_query($query_sub);

		while($row_sub = mysql_fetch_array($interim_result)){
			$name_owner = $row_sub['Name'];
			$mobile_owner = $row_sub['Mobile'];
		}


		$query_sub = "SELECT * FROM `11CS10059`.`Own_Vehicle` WHERE `Id` = ".$row['selected_vehicle_id'];
		$interim_result = mysql_query($query_sub);

		while($row_sub = mysql_fetch_array($interim_result)){
			$v_t = $row_sub['Vehicle_Type'];
			$s_c = $row_sub['Sitting_Capacity'];
		}

		$a = $row['initial_passengers'];
		$x = $row['cost'] / $a;
		echo '<tr><td>'.$row['Id'].'</td><td>'.$name_owner.'</td><td>'.$mobile_owner.'</td><td>'.$row['selected_vehicle_id'].'</td><td>'.$v_t.'</td><td>'.$s_c.'</td><td>'.$row['initial_passengers'].'</td><td>'.$row['no_of_passengers'].'</td><td>'.floor($x).'</td></tr>';
	}

	echo '</table><br>';

	echo '<form action = "sharing_selected.php" method = "post" name="form1">';

	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">
			<tr><td>Enter the Sharing Id</td><td>No. of Passengers</td><td>Message to Owner</td><td></td></tr>

			<tr>
				<td><input type = "text" name = "selected_sharing_option"></input></td>
				<td><input type = "text" name = "no_of_passengers"></input></td>
				<td><textarea name = "msg"></textarea></td>
				';
	echo '<td>	
			<input type = "submit" class="btn btn-default" value="Go"></input></td></tr></table>';
	echo '</form>';

?>