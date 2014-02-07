<?php

	include('mysqlconnect.php');

	$tbbname = "Global_Var";
	$result_db = mysql_query("SELECT * FROM $tbbname");

	while ($row = mysql_fetch_array($result_db)) {
		
		print_r($row); 
		echo $row['Peronal_Id'];
	}

	echo "jot";

?>