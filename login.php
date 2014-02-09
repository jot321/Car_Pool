<?php
	
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	
	session_start();
	echo("working");
	if(isset($_SESSION['Name'])){
		session_destroy();
		echo("hey");
		header('Location: /dbms/Car_Pool');
	}
	else{
		include('mysqlconnect.php');
		ini_set('display_errors', 'On');
		error_reporting(E_ALL);	
		$query = "SELECT * FROM 11CS10059.Person WHERE Email='".$_POST['email']."' AND Password='".$_POST['pass1']."'";	
		echo $query;
		echo "<br/>";
		$result2 = mysql_query($query);
		if(!$result2){
			echo "No entry found";
			header('Location: /dbms/Car_Pool/#login_op');
		}		
		else{
			$result = mysql_fetch_array($result2);
			$_SESSION['Id'] = $result['Id'];
			$_SESSION['Name'] = $result['Name'];
			echo $_SESSION['Name'];			
		}
		header('Location: /dbms/Car_Pool');
	}

?>
