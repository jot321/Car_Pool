<?php
	
	include('mysqlconnect.php');
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	


	$source = $_POST['source'];
	$dest = $_POST['dest'];

	$query = "SELECT * FROM 11CS10059.Sharing WHERE `source` = '".$source."' and `dest`= '".$dest."'";

	$result = mysql_query($query);

	echo '<table  id="courses" width="90%" align="middle" class="result table-striped"><tbody>';
	echo '<tr><td><b>Sharing Id</td><td><b>Vehicle Id</td><td><b>Owner</td><td></td></tr>';

	while($row = mysql_fetch_array($result)){

		echo '<tr><td>'.$row['Id'].'</td><td>'.$row['selected_vehicle_id'].'</td><td>'.$row['Owner_Id'].'</td></tr>';
	}

	echo '</table><br>';

	echo '<form action = "sharing_selected.php" method = "post" name="form1">';

	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">
			<tr><td>Enter the Sharing Id</td><td>No. of Passengers</td><td></td></tr>

			<tr>
				<td><input type = "text" name = "selected_sharing_option"></input></td>
				<td><input type = "text" name = "no_of_passengers"></input></td>
				';
	echo '<td>	
			<input type = "submit" class="btn btn-default" value="Go"></input></td></tr></table>';
	echo '</form>';

?>