<?php
	
	include('mysqlconnect.php');
	ini_set('display_errors', 'Off');
	error_reporting(E_ALL);
	session_start();

	$query = "SELECT * FROM `11CS10059`.`open_message` WHERE `Id` = ".$_SESSION['Id'];

	$result = mysql_query($query);
	echo "<h3>Your Previus Open Messages</h3>";
	echo '<table  id="courses" width="90%" align="middle" class="result">';
	echo '<tr><td>Picking Point</td><td>Destination Point</td><td>Bearable Cost</td><td>Date</td></tr>';

	while($row = mysql_fetch_array($result)){

		echo '<tr><td>'.$row['picking_point'].'</td><td>'.$row['dest_point'].'</td><td>'.$row['cost'].'</td><td>'.$row['date'].'</td></tr>';
	}
	echo '</table>';

	echo '<h3>Post an Open Request so that may see help you :</h3>';
	echo '<table  id="courses" width="90%" align="middle" class="result">';
	echo '<form action = "save_open_request.php" method = "post" name="form1">';

	echo '<tr><td>Picking Point:</td><td><input type = "text" name = "picking_point" placeholder = ""></input></td></tr>
			<tr><td>Destination Point:</td><td><input type = "text" name = "destination_point" placeholder = ""></input></td></tr>
			<tr><td>Bearable Cost:</td><td><input type = "text" name = "cost" placeholder = ""></input></td></tr>	
			<tr><td>Date:</td><td><input type = "text" name = "date" placeholder = ""></input></td></tr>

			';
	echo '<tr><td><button type="submit" class="btn btn-default">Go</button></td><td></td></tr></table>';
	echo '</form>';
?>