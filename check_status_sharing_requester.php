<?php
	
	include('mysqlconnect.php');
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$query = "SELECT * FROM `11CS10059`.`Notification` WHERE `Requester_Id` = ".$_SESSION['Id']." ORDER BY `Noti_Id` ";
	$result = mysql_query($query);

	$query_2 = "SELECT * FROM `11CS10059`.`Notification_Granted` WHERE `Requester_Id` = ".$_SESSION['Id']." ORDER BY `Noti_Id` ";
	$result_2 = mysql_query($query_2);

	echo '<h4>Notifications : Requests Granted</h4>';
	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">';
	echo '<tr><td>Owner Id</td><td>Name</td><td>Contact No.</td><td>No of Passengers</td><td>Message You Sent</td></tr>';

	while($row_2 = mysql_fetch_array($result_2)){

		$query_sub_2 = "SELECT * FROM `11CS10059`.`Person` WHERE `Id` = ".$row_2['Owner_Id'];
		$interim_result_2 = mysql_query($query_sub_2);

		while($row_sub_2 = mysql_fetch_array($interim_result_2)){
			$name_req_2 = $row_sub_2['Name'];
			$mobile_2 = $row_sub_2['Mobile'];
		}

		echo '<tr><td>'.$row_2['Owner_Id'].'</td><td>'.$name_req_2.'</td><td>'.$mobile_2.'</td><td>'.$row_2['no_of_passengers'].'</td><td>'.$row_2['Message'].'</td></tr>';
	}

	echo '</table>';

	echo '<h4>Notifications : Your Pending Requests</h4>';
	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">';
	echo '<tr><td>Owner Id</td><td>Name</td><td>Contact No.</td><td>No of Passengers</td><td>Message You Sent</td></tr>';

	while($row = mysql_fetch_array($result)){

		$query_sub = "SELECT `Name`,`Mobile` FROM `11CS10059`.`Person` WHERE `Id` = ".$row['Owner_Id'];
		$interim_result = mysql_query($query_sub);

		while($row_sub = mysql_fetch_array($interim_result)){
			$name_req = $row_sub['Name'];
			$mobile = $row_sub['Mobile'];
		}

		echo '<tr><td>'.$row['Owner_Id'].'</td><td>'.$name_req.'</td><td>'.$mobile.'</td><td>'.$row['no_of_passengers'].'</td><td>'.$row['Message'].'</td></tr>';
	}

	echo '</table>';

?>