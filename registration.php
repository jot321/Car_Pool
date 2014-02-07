<?php
	
	include('get_id.php');
	$next = $id +1;

	echo $next;
	mysql_query("UPDATE 11CS10059.Global_Var SET Peronal_Id =".$next);

	$name = $_POST['name'];
	$add = $_POST['add'];
	$mob = $_POST['phone'];
	$add = $_POST['email'];
	$add = $_POST['pass1'];
	$add = $_POST['pass2'];

	mysql_query("INSERT INTO 11CS10059.Person (Name, Email, Address, Id, Password, Mobile) VALUES (".$name.",".$email.",".$add.",".$id.",".$pass1.",".$mob.")");

?>