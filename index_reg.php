<!DOCTYPE HTML>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/calc_edit_final.css" media="all">
<link rel="stylesheet" type="text/css" href="css/teach_formula.css" media="all">
<link rel="stylesheet" type="text/css" href="css/super_formula.css" media="all">
<link rel="stylesheet" type="text/css" href="css/research_formula.css" media="all">
<link rel="stylesheet" type="text/css" href="css/admin_formula.css" media="all">


<style>

table td img.img-rounded {
	height: 25px;
	position: relative;
	float : right;
	top : 10px;
	right : 10px;

}

table td img.img-rounded {
	
	filter: grayscale(100%);
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	filter: grayscale(100%);
	opacity: 0.4;
	content:url('css/img/Delete.png');
}

table td.active img.img-rounded {

	filter: grayscale(0%);
	-webkit-filter: grayscale(0%);
	-moz-filter: grayscale(0%);
	filter: grayscale(0%);
	opacity: 1;
	
	content:url('css/img/Check-icon.png');
	
}
table td.active
{

	background-color: #dff0d8 !important;
	
	
}
</style>


<?php require('header_bs.php'); ?>

<div id="form_output" class="container">
	
	<div class="row">
		
		
		<div class="span3 bs-docs-sidebar " id="nav_menu">
			<ul class="nav nav-list bs-docs-sidenav affix-top" >
				
				<li style="margin-bottom:20px">
					<div style="width:258px; text-align:center; margin-top:30px">	  											  
						
						<b class="element select large" id="cur_date" name="cur_date"
						onchange="oncheckchange()" style=
						"margin-top: 20px; text-align:center; width:220px; font-size:20px" value="S2 12/13">
						
						<?php
						
						$plusornot = ""; 
						$curday = date('j');
						if($curday>25)
							$plusornot = '+1 month' ;
						else
							$plusornot = '+0 month' ;
						
						$mnth = date('F', strtotime($plusornot)) ;
						$yrr = date('Y', strtotime($plusornot)) ;
						echo "$curday $mnth, $yrr";
						?>

					</b>
				</div>
			</li>
			
			<li onclick=""><a href="#teaching"><i class="icon-chevron-right"></i>Vehicle Registeration</a></li>
			<li onclick=""><a href="#supervision"><i class="icon-chevron-right"></i>Add a Sharing</a></li>
			<li onclick=""><a href="#research"><i class="icon-chevron-right"></i>Find a Sharing</a></li>
			<!-- <li onclick=""><a href="#admin"><i class="icon-chevron-right"></i>Post an open message</a></li> -->

			
			<!-- <li style="margin-bottom:20px">
				<div style="width:258px; text-align:center; margin-top:30px">
					
					
					
					<b class="element select large" id="cur_tot" name="cur_tot"
					onchange="oncheckchange()" style=
					"margin-top: 20px; text-align:center; width:220px; font-size:20px" value="S2 12/13">
					TOTAL : Rs. <span id="tot_fix">0</span> per week
					
					<br>
					<br>
					
					
					<br>
					<br>
					
					<span class="month_tot text-error">
						TOTAL Rs. <span class="month_total">0</span> for this month
					</span>
				</b>
			</div>
			
		</li>


		<li onclick="hover_admin()">		  		<div style="width:258px; text-align:center; margin-top:30px">	  											  
			
			<b class="element select large">
				<button class="btn btn-primary btn-large" onclick="get_and_send_choices_save()">Save</button>
				
			</b>
		</div></li> -->
	</ul>
	
	

</div>


<div class="teachForm  span9 " id="resultview">

	<section id="teaching">
		
		<form action = "registration.php" method = "post">
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
		</form>

</p>
</section>

<hr>

<section id="supervision">
	<h2 class="description" for="element_3">Log In</h2><p id="li_2">

	<table id="superv" width="40%" align="middle" class="result"><tbody>

		<tr><td>   User Id   </td> <td><input type = "text" name = "id"> </td></tr>
		<tr><td>   Password   </td> <td><input type = "password" name = "id"> </td></tr>
	</table>

		<button type="submit" class="btn btn-default">Log In</button>
</p>

<hr>	
</section>

<section id="research">
	
	<h2 class="description" for="element_4">About Us</h2>

	<br>

	<p id="li_3">
		A Team of young enthusiasts looking for change in the world.		
	</p>




	<hr> 
</section>


<div id="chart_div" style="width: 900px; height: 400px;"></div>


</div>

</div>

</div>


<script src="assets/js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jsapi.js"></script>


<script>




	//console.log("GOOGLE LOAD GERE");
	//console.log(google.load("visualization", "1", {packages:["corechart"]}));
	
	


	</script>
<!--  <script src="js/formula_calc_edit.js"></script>		
--> 
<script src="js/mess_edit.js"></script>
<script src="js/editing.js"></script>
 <!--  <script src="js/session_manager.js"></script>

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
<!--  	<script src="assets/js/jquery.js"></script>
-->	


<script src="assets/js/bootstrap-transition.js"></script>
<script src="assets/js/bootstrap-alert.js"></script>
<script src="assets/js/bootstrap-modal.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script src="assets/js/bootstrap-scrollspy.js"></script>
<script src="assets/js/bootstrap-tab.js"></script>
<script src="assets/js/bootstrap-tooltip.js"></script>
<script src="assets/js/bootstrap-popover.js"></script>
<script src="assets/js/bootstrap-button.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
<script src="assets/js/bootstrap-carousel.js"></script>
<script src="assets/js/bootstrap-typeahead.js"></script>
<script src="assets/js/bootstrap-affix.js"></script>

<script src="assets/js/holder/holder.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>

<script src="assets/js/application.js"></script>	
<script>

</script>


<style>
input
{
	background-color: transparent;
}

td
{
	text-align: center !important;
}

th
{
	text-align: center !important;
}

td
{
	cursor:pointer;
}

td:hover
{
	background-color: #fcf8e3 !important;
}

</style>

<script>

$('table').addClass('table');
$('table').addClass('table-striped');
$('table').addClass('');
$('table').addClass('table-bordered');
$('td').addClass('text-center');



</script>

<footer class="footer" style="z-index:100">
	<div class="container">
		<p>All contents are (c) Copyright 2013 - 2014, Patel Hall of Residence, Indian Institute of Technology, Kharagpur. All rights Reserved 
			
			<br>
			Created by : 
			<a href="#roh_modal" role="button" class="" data-toggle="modal"><b>Rohan Raja : rohanraja9@gmail.com</a><br>
			<a href="#jot_modal" role="button" class="" data-toggle="modal">Jot Sarup : sarup.jot@gmail.com</a></b>
			
		</p>
	</div>
</footer>

</body></html>