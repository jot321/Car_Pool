<?php

	$tbbname = "Global_Var";
	$result_db = mysql_query("SELECT * FROM 11CS10059.Global_Var");

	if (!$result_db) {
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}

	while ($row = mysql_fetch_array($result_db)) {
		
		$v_id =  $row['Vehicle_Id'];
	}


?>