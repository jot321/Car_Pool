<?php
session_start();
?>

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
  <script>
    function validateForm1()
    {
      var flag=0;
      var temp = document.forms["form1"];

      if(!temp["name"].value){
        alert("Name not Entered");
        return false;
      }
      if(!temp["email"].value){
        alert("Email not Entered");
        return false;
      }
      if(!temp["add"].value){
        alert("Address not Entered");
        return false;
      }
      if(!temp["phone"].value){
        alert("Phone No. not Entered");
        return false;
      }
      if(!temp["pass1"].value){
        alert("Password not Entered");
        return false;
      }
      if(!temp["pass2"].value){
        alert("Password not Entered");
        return false;
      }      
      if(temp["pass1"].value!=temp["pass2"].value){
        alert("Passwords don't match");
        return false;
      }
    }
    function validateForm2(){
      var temp = document.forms["form2"];
      if(!temp["email"].value){
        alert("Please enter valid email");
        return false;
      }
      if(!temp["pass1"].value){
        alert("Please enter valid password");
        return false;
      }
    }
  </script>  
  
  <?php require('header_bs.php'); ?>
  
  <div id="form_output" class="container">
    
    <div class="row">
      
      
      <div class="span3" id="nav_menu">
	<ul class="nav nav-list bs-docs-sidenav affix-top" >
	  
	  <li style="margin-bottom:5px">
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
	   <li onclick="" id="huha1"><a href="#login_op"><i class="icon-chevron-right"></i>
        <?php  
					if(isset($_SESSION['Name']))
            echo "Logout";
					else echo "Login";?>
        </a></li>

        <?php if(!isset($_SESSION['Name'])) echo '
      	   <li onclick="" id="huha2"><a href="#registeruser_op"><i class="icon-chevron-right"></i>User Register</a></li>';
        ?>
        
        <?php if(isset($_SESSION['Name'])) echo '
      	   <li onclick="" id="huha3"><a href="#veh_reg_op"><i class="icon-chevron-right" ></i>Vehicle Registeration</a></li>';
         ?>
         <?php if(isset($_SESSION['Name'])) echo '
       	 <li onclick="" id="huha4"><a href="#add_sharing"><i class="icon-chevron-right"></i>Add a Sharing</a></li>';
         ?>
         <?php if(isset($_SESSION['Name'])) echo '
       	 <li onclick="" id = "huha5"><a href="#find_sharing"><i class="icon-chevron-right"></i>Find a Sharing</a></li>';
         ?>
         <?php if(isset($_SESSION['Name'])) echo '
         <li onclick="" id = "huha6"><a href="#pending_requests_owner"><i class="icon-chevron-right"></i>Pending Requests (Owner) </a></li>';
         ?>
         <?php if(isset($_SESSION['Name'])) echo '
         <li onclick="" id = "huha7"><a href="#pending_requests_requester"><i class="icon-chevron-right"></i>Pending Requests (Requests) </a></li>';
         ?>
         <?php if(isset($_SESSION['Name'])) echo '
         <li onclick="" id = "huha8"><a href="#open_request"><i class="icon-chevron-right"></i>Open Requests </a></li>';
         ?>
         <?php if(isset($_SESSION['Name'])) echo '
         <li onclick="" id = "huha9"><a href="#search_requester"><i class="icon-chevron-right"></i>Search Requester </a></li>';
         ?>

       	</ul>
      </div>
      <div class="teachForm  span9 " id="resultview">

	<section id="login_op">
	  <form action = "login.php" method="post" name="form2" onsubmit="return validateForm2()">

		<?php if (isset($_SESSION['Name'])) echo '<h2 class="description" for="element_1">Logout</h2><p id="li_1"><br/>
							<p>Are you sure you want to log out?</p>
							<button type="submit" class="btn btn-default">Logout</button>';
		else echo '

	    <h2 class="description" for="element_1">Login</h2><p id="li_1">
	      <table  id="courses" width="90%" align="middle" class="result"><tbody>
		  <tr><td> Email: </td>  <td> <input type="text" name="email"></td></tr>
		  <tr><td> Password: </td>  <td> <input type="password" name="pass1"></td></tr>
	      </table>
	      <button type="submit" class="btn btn-default">Login</button>';
		?>
	  </form>
	</section>

	<section id="registeruser_op">
	 <?php include('test.php');?>	  
	</section>

	<section id="veh_reg_op">
		<?php 
			include 'veh_reg_op.php';
		?>
	</section>
	
  <section id="add_sharing">
    <?php include 'get_vehicles.php'; ?>
  </section>

  <section id="find_sharing">
    <?php include 'find_sharing.php'; ?>
  </section>

  <section id="pending_requests_owner">
    <?php include 'check_status_sharing.php';?>
  </section>

  <section id="pending_requests_requester">
    <?php include 'check_status_sharing_requester.php';?>
  </section>

  <section id="open_request">
    <?php include 'open_request.php';?>
  </section>

  <section id="search_requester">
    <?php include 'search_open_request.php';?>
  </section>

        <div id="chart_div" style="width: 900px; height: 400px;"></div>
      </div>
      
    </div>
    
  </div>


 
  <script src="assets/js/jquery.js"></script> 
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <script type="text/javascript" src="js/jsapi.js"></script>
  <script src="js/mess_edit.js"></script>
  <script src="js/editing.js"></script>
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



  <!--udit--> 
  <script>
    function hideall(){
    $("#huha1").removeClass("active");
    $("#huha2").removeClass("active");
    $("#huha3").removeClass("active");
    $("#huha4").removeClass("active");
    $("#huha5").removeClass("active");
    $("#huha6").removeClass("active");
    $("#huha7").removeClass("active");
    $("#huha8").removeClass("active");
    $("#huha9").removeClass("active");


    $("#registeruser_op").hide();
    $("#login_op").hide();
    $("#veh_reg_op").hide();
    $("#add_sharing").hide();
    $("#find_sharing").hide();
    $("#pending_requests_owner").hide();    
    $("#pending_requests_requester").hide();    
    $("#open_request").hide();
    $("#search_requester").hide();

   }

    $(document).ready(function(){

    hideall();
    var check_var = document.URL;
    var check_var_array = check_var.split('/');
//    if(check_var_array[5]=="")
//       alert("huha");

    $("#huha2").click(function(){
    hideall();
    $("#registeruser_op").fadeIn();
    $("#huha2").addClass("active");
    window.location = "#registeruser_op";
    });

    $("#huha1").click(function(){
    hideall();
    $("#login_op").fadeIn();
    $("#huha1").addClass("active");
    window.location = "#login_op";
    });

    $("#huha3").click(function(){
    hideall();
    $("#veh_reg_op").fadeIn();
    $("#huha3").addClass("active");
    window.location = "#veh_reg_op";
    });

    $("#huha4").click(function(){
    hideall();
    $("#add_sharing").fadeIn();
    $("#huha4").addClass("active");
    window.location = "#add_sharing";
    });

    $("#huha5").click(function(){
    hideall();
    $("#find_sharing").fadeIn();
    $("#huha5").addClass("active");
    window.location = "#find_sharing";
    });

    $("#huha6").click(function(){
    hideall();
    $("#pending_requests_owner").fadeIn();
    $("#huha6").addClass("active");
    window.location = "#pending_requests_owner";
    });

    $("#huha7").click(function(){
    hideall();
    $("#pending_requests_requester").fadeIn();
    $("#huha7").addClass("active");
    window.location = "#pending_requests_requester";
    });

    $("#huha8").click(function(){
    hideall();
    $("#open_request").fadeIn();
    $("#huha8").addClass("active");
    window.location = "#open_request";
    });

    $("#huha9").click(function(){
    hideall();
    $("#search_requester").fadeIn();
    $("#huha9").addClass("active");
    window.location = "#search_requester";
    });

    });
  </script>
  <!--udit-->
  
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
      <p>All contents are (c) Copyright 2014 - 2015, Database and Management Systems, Indian Institute of Technology, Kharagpur. All rights Reserved 
	
	<br>
	Created by : 
	<a href="#jot_modal" role="button" class="" data-toggle="modal"><b>Jot Sarup : sarup.jot@gmail.com</a></b>
  <a href="#roh_modal" role="button" class="" data-toggle="modal"><b>Udit Bhutani : yudi.feb1@gmail.com</a><br>

	
      </p>
    </div>
  </footer>
  
</body></html>
