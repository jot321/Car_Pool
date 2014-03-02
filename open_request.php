<?php
		
	echo '<h4>Post an Open Request so that may see help you :</h4>';
	echo '<table  id="courses" width="90%" align="middle" class="result">';
	echo '<form action = "save_open_request.php" method = "post" name="form1">';

	echo '<tr><td>Picking Point:</td><td><input type = "text" name = "picking_point" placeholder = ""></input></td></tr>
			<tr><td>Destination Point:</td><td><input type = "text" name = "destination_point" placeholder = ""></input></td></tr>
			<tr><td>Bearable Cost:</td><td><input type = "text" name = "cost" placeholder = ""></input></td></tr>	
			<tr><td>Date:</td><td><input type = "text" name = "source" placeholder = ""></input></td></tr>

			';
	echo '<tr><td><button type="submit" class="btn btn-default">Go</button></td><td></td></tr></table>';
	echo '</form>';
?>