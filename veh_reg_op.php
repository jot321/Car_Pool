<h2 class="description" for="element_1">Vehicle Registration</h2>


<?php
	if(isset($_SESSION['Name'])){
		echo '<br/>';
	echo '

	<p>You can register your own personal Vehicle as well as a Hired Vehicle. Below is registration form for own vehical. Scroll down to register a vehical hired from a Travel Agency.</p>
	<br/>
	<h3 class="description" for="element_1">Own Vehicle</h2>
	<form id="own_vehical" action = "vehicle_registration_.php" method = "post" onsubmit="return validateForm3()" name="form3">
	      <table  id="courses" width="90%" align="middle" class="result"><tbody>
		  
		  <tr><td> Vehicle Type : </td>  <td> <input type="text" name="Vehicle-Type"></td></tr> 
		  <tr><td> Year of Purchase: </td>  <td> <input type="text" name="yofp"></td></tr>
		  <tr><td> Sitting Capacity: </td>  <td> <input type="text" name="sitting_capacity"></td></tr>
		  <tr><td> Owner: </td>  <td> <input type="text" name="owner"></td></tr>
		  <tr><td> License No: </td>  <td> <input type="text" name="license_no"></td></tr>
		  <tr><td> Date of License: </td>  <td> <input type="text" name="date_of_license"></td></tr>
	      </table>
	      <button type="submit" class="btn btn-default">Register</button>
	</form>	

	<h3 class="description" for="element_1">Hired Vehicle</h2>
	<form action = "vehicle_registration_hired.php" method = "post" onsubmit="return validateForm4()" name="form4">
	      <table  id="courses" width="90%" align="middle" class="result"><tbody>
		  
		  <tr><td> Name: </td>  <td> <input type="text" name="name"></td></tr> 
		  <tr><td> Email: </td>  <td> <input type="text" name="email"></td></tr>
		  <tr><td> Address: </td>  <td> <input type="text" name="add"></td></tr>
		  <tr><td> Phone No: </td>  <td> <input type="text" name="phone"></td></tr>
		  <tr><td> Password: </td>  <td> <input type="password" name="pass1"></td></tr>
		  <tr><td> Confirm Password: </td>  <td> <input type="password" name="pass2"></td></tr>
	      </table>
	      <button type="submit" class="btn btn-default">Register</button>
	</form>	  
	';

	}	
	else echo '<br/><p>You need to login first!!</p>';
?>
