<html>
<head>
	 <script src="assets/js/jquery.js"></script> 
        
       <script type="text/javascript">
               $(document).ready(function(){

               		var num = <?php echo $_SESSION['count']; ?>;

               		var a = new Array();
               		var b= new Array();
               		var j = 0;

	 				a = <?php echo json_encode($_SESSION['arr_req_id']);?>;
	                b = <?php echo json_encode($_SESSION['arr_no_p']); ?>;


               		for (var i = 0; i < num; i++) {
               			console.log(num);
               			console.log("jot");
               			var temp1 = a[i];
               			var temp2 = b[i];

	                    $("#click"+i).click(function(){
								
	                          $.ajax({
	                              type:"post",
	                              url:"grant_access.php",
	                              data:"a="+a[j]+"&b="+b[j],
	                              success:function(data){

	                                 console.log(data);
	                              }
	 
	                          }).always(function(){
	                          		j++;
	                          });
	                    });
	                }
               });
       </script>

</head>

<?php
	
	include('mysqlconnect.php');
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);	

	$count = 0;
	$_SESSION['arr_req_id'] = array();
	$_SESSION['arr_no_p'] = array();

	$query = "SELECT * FROM `11CS10059`.`Notification` WHERE `Owner_Id` = ".$_SESSION['Id']." ORDER BY `Noti_Id` ";
	$result = mysql_query($query);

	echo '<h4>Notifications : People who have requested a seat with you</h4>';
	echo '<table  id="courses" width="90%" align="middle" class="result table-striped">';
	echo '<tr><td>Requester Id</td><td>Name</td><td>Contact No.</td><td>No of Passengers</td><td>Message from the Requester</td></tr>';

	while($row = mysql_fetch_array($result)){

		$query_sub = "SELECT `Name`,`Mobile` FROM `11CS10059`.`Person` WHERE `Id` = ".$row['Requester_Id'];
		$interim_result = mysql_query($query_sub);

		while($row_sub = mysql_fetch_array($interim_result)){
			$name_req = $row_sub['Name'];
			$mobile = $row_sub['Mobile'];
		}


		echo '<tr><td>'.$row['Requester_Id'].'</td><td>'.$name_req.'</td><td>'.$mobile.'</td><td>'.$row['no_of_passengers'].'</td><td>'.$row['Message'].'</td></tr>';

		array_push($_SESSION['arr_req_id'], $row['Requester_Id']);
		array_push($_SESSION['arr_no_p'], $row['no_of_passengers']);
		$count = $count + 1;
	}

	echo '</table>';

	echo '<h4>Enter the Requesters Id you want to grant a seat</h4>';
	echo '<form action = "grant_access.php" method = "post" name="form1">
		  <table  id="courses" width="90%" align="middle" class="result table-striped">
		<tr><td><input type = "text" placeholder = "Enter the Requester Id" name = "requester"></input></td>
		<td><input type = "submit" class = "btn btn-default" value = "Go"></input></td></tr></table>
	</form>';

	$_SESSION['count'] = $count;
?>