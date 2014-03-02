<html>
<head>
	 <script src="assets/js/jquery.js"></script> 
        
       <script type="text/javascript">
               $(document).ready(function(){
                    $("#click").click(function(){
 
                          var source=$("#option1_1").val();
                          var dest=$("#option1_2").val();
 
                          $.ajax({
                              type:"post",
                              url:"find_vehicle_option1.php",
                              data:"source="+source+"&dest="+dest,
                              success:function(data){
                                 $("#jot").html(data);
                              }
 
                          });
 
                    });
               });
       </script>

       <script src="assets/js/jquery.js"></script> 
        
       <script type="text/javascript">
               $(document).ready(function(){
                    $("#click2").click(function(){
 
                          var date=$("#option2").val();
 						  console.log(date);
                          $.ajax({
                              type:"post",
                              url:"find_vehicle_option2.php",
                              data:"date="+date,
                              success:function(data){
                                 $("#jot2").html(data);
                              }
 
                          });
 
                    });
               });
       </script>

</head>

<?php


	echo '<h3>Find a Sharing </h3>';
	echo '<h5>Enter Source and Destination</h5>';
	echo '<form action = "find_vehicle_option1.php" method = "post" name="form1">
			  <table  id="courses" width="90%" align="middle" class="result table-striped">
			  <tr>
			  <td><input type = "text" name = "option1_1" id = "option1_1" placeholder = "Source"> </input></td>
			  <td><input type = "text" name = "option1_2" id = "option1_2" placeholder = "Destination"> </input></td>
			  <td><input type="button" value="Go" id="click" class="btn btn-default"></input></td></tr></table>
		  </form>
		  ';

	echo '<div id = "jot"> </div>';	  


	echo ' 	<h3>OR</h3><h5>Enter Date</h5>
			 <form action = "find_vehicle_option2.php" method = "post" name="form2">
			 <table  id="courses" width="90%" align="middle" class="result table-striped">
			  <tr>
				<td><input type = "text" name = "option2" id = "option2" placeholder = "dd/mm/yy"> </input><br></td>
				<td><input type="button" value="Go" id="click2" class="btn btn-default"></input></td></tr></table>

			</form>
			';
	echo '<div id = "jot2"> </div>';	  

?>
</html>