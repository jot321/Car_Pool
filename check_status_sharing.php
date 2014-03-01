<?php
	
	include('mysqlconnect.php');
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$query = "SELECT * FROM `11CS10059`.`Notification` WHERE `Owner_Id` = ".$_SESSION['Id']." ORDER BY `Noti_Id` ";
	$result = mysql_query($query);

	echo '<h4>Notifications : People who have requested a seat with you</h4>';
	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">';
	echo '<tr><td>Requester Id</td><td>No of Passengers</td></tr>';
	while($row = mysql_fetch_array($result)){

		echo '<tr><td>'.$row['Requester_Id'].'</td><td>'.$row['no_of_passengers'].'</td></tr>';
	}

	echo '</table>';

?>