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

</head>

<?php


	echo '<h3>Find a Sharing </h3>';
	echo '<form action = "find_vehicle_option1.php" method = "post" name="form1">
			  <input type = "text" name = "option1_1" id = "option1_1" placeholder = "Source"> </input>
			  <input type = "text" name = "option1_2" id = "option1_2" placeholder = "Destination"> </input><br>
			  <input type="button" value="Go" id="click"></input>
		  </form>
		  ';

	echo '<div id = "jot"> </div>';	  


	// echo ' 	<h5>Enter Date</h5>
	// 		 <form action = "find_vehicle_option2.php" method = "post" name="form2">
	// 			<input type = "text" name = "option1" placeholder = "Date"> </input><br>
	// 			<button type="submit" class="btn btn-default">Go</button>
	// 		</form>
	// 		';



?>
</html>