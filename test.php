<?php

	echo "Jot Sarup";

	echo '<form action = "registration.php" method = "post" onsubmit="return validateForm1()" name="form1">
	    <h2 class="description" for="element_1">New Registration</h2><p id="li_1">
	      <table  id="courses" width="90%" align="middle" class="result"><tbody>
		  
		  <tr><td> Name: </td>  <td> <input type="text" name="name"></td></tr> 
		  <tr><td> Email: </td>  <td> <input type="text" name="email"></td></tr>
		  <tr><td> Address: </td>  <td> <input type="text" name="add"></td></tr>
		  <tr><td> Phone No: </td>  <td> <input type="text" name="phone"></td></tr>
		  <tr><td> Password: </td>  <td> <input type="password" name="pass1"></td></tr>
		  <tr><td> Confirm Password: </td>  <td> <input type="password" name="pass2"></td></tr>
	      </table>
	      <button type="submit" class="btn btn-default">Register</button>
	  </form>';
?>