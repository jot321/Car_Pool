<html>
<head>
	 <script src="assets/js/jquery.js"></script> 
        
       <script type="text/javascript">
               $(document).ready(function(){
                    $("#click_request").click(function(){
 
                          var source = $("#source_option1").val();
                          var dest = $("#dest_option2").val();
                          var inter1 = $("#inter1").val();
                          var inter2 = $("#inter2").val();
                          var inter3 = $("#inter3").val();
                          var inter4 = $("#inter4").val();

                          console.log(inter1);
                          console.log(inter2);
                          console.log(inter3);
                          console.log(inter4);


                          if(inter1 == "") inter1 = "0";
                          if(inter2 == "") inter2 = "0";
                          if(inter3 == "") inter3 = "0";
                          if(inter4 == "") inter4 = "0";

 	
                          $.ajax({
                              type:"post",
                              url:"find_requester.php",
                              data:"source="+source+"&dest="+dest+"&inter1="+inter1+"&inter2="+inter2+"&inter3="+inter3+"&inter4="+inter4,
                              success:function(data){
                                 $("#requester_data").html(data);
                              }
 
                          });
 
                    });
               });
       </script>

</head>

<?php


	echo '<h3>Find a Requester </h3>';
	echo '<h5>Enter Source and Destination</h5>';
	echo '
		  <table  id="courses" width="90%" align="middle" class="result table-striped">
		  <tr>
		  <td><input type = "text" name = "source_option1" id = "source_option1" placeholder = "Source"> </input></td>
		  <td><input type = "text" name = "dest_option2" id = "dest_option2" placeholder = "Destination"> </input></td></tr>
		  <tr><td><b>Enter Intermediate Points.</td><td>If You can stop there to take passengers</td></tr>
		  <tr>
		  <td><input type = "text" name = "inter1" id = "inter1" placeholder = "Intermediate Location"> </input></td>
		  <td><input type = "text" name = "inter2" id = "inter2" placeholder = "Intermediate Location"> </input></td>
		  </tr>
		  <tr>
		  <td><input type = "text" name = "inter3" id = "inter3" placeholder = "Intermediate Location"> </input></td>
		  <td><input type = "text" name = "inter4" id = "inter4" placeholder = "Intermediate Location"> </input></td>
		  </tr>

		  <tr><td><input type="button" value="Go" id="click_request" class="btn btn-default"></input></td><td></td></tr>

		  </table>

	  ';

	echo '<div id = "requester_data"> </div>';	  

?>
</html>