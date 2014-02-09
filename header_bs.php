

<head>
	<meta charset="utf-8">
	<title>Carpool System</title>

	<!-- Le styles -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="assets/css/docs.css" rel="stylesheet">
	<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	
	<script src="js/common_bs.js"></script>
	
	<style>
	.container, .navbar, header

	{
		opacity: 0.3;
	}
	
	
	#top_main_nav li a
	{
		font-size: 15px;
		padding-top: 15px !important ;
	}
	</style>



<style>
table
{
	text-align: center;
}

.fixedcenter { 
	/* fixed position a zero-height full width container */
	position: fixed;

	height: 70px;
	text-align: center;
	left: 0;
	top: 0;
	right: 0;
	bottom: 0;
	margin: auto; /* this requires a fixed size */
	z-index: 1;
}

.container > div {
	/* make the block inline */
	display: inline-block;
	/* reset container's center alignment */
	text-align: left;
}




</style>


	
		<title>Your Calculated WeWaIC Index</title>
		<link rel="stylesheet" href="css/jquery-ui.css" />


</head>




<div class="fixedcenter">
	<img src="css/img/loading_home.gif" style="width:70px; height:70px">
	
	<h3>Loading</h3>
</div>


<body data-spy="scroll" data-target=".bs-docs-sidebar">

	<div class="navbar navbar-inverse navbar-fixed-top">

	  <div class="navbar-inner">

		<div class="container">

		  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>

 		<div class="nav-collapse collapse" id="top_main_nav">
			<ul class="nav">
			  <li id="li_v">
				<!--<a href="./index.php">My Mess Options</a>
					
					here i can add some options if needed
					
				-->
				<?php  
					if(isset($_SESSION['Name'])) 
						echo "<a>Hi, ".$_SESSION['Name']."</a>";
					else 
						 echo "<a>No login</a>";
				?>
			  </li>


			</ul>
		  </div>
		  
		  
		  
		  <div class="brand" style="cursor:hand;">		  	 
		  	 <div class="dropdown" id="accdropmenu">
		  	 <a class="dropdown-toggle" id="drop_acc" role="button" data-toggle="dropdown" href="#"></a>		  	

		  	 <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop_acc" style="font-size:14px">
		  	   <li role="presentation"><a role="menuitem" tabindex="-1" href="./change_pass.php" onclick="on_changepass_click()">Change Password</a></li>
		  	   <li role="presentation" class="divider"></li>
		  	   <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="on_logout_click()" id="logout_a">Logout</a></li>
		  	 </ul>
		 </div>
		  	 
		  </div>
		  
		</div>
	  </div>
	</div>


	<header class="jumbotron subhead" id="overview">
	  <div class="container">

		<h2><a>Carpool System</a></h2>
		<h3>This is Awesomeness</h3>

	  </div>
	</header>


