<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>

  <title>Jake Butterfield</title>

  <link rel='shortcut icon' type='image/x-icon' href='images/favicon.png' />

  <!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet" type="text/css">
    
  <!-- Stylesheets -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Block of style to not conflict with other pages -->
	<style type="text/css">

		.outer {
		    display: table;
		    position: absolute;
		    height: 100%;
		    width: 100%;
		}

		.middle {
		    display: table-cell;
		    vertical-align: middle;
		}

		.inner {
		    margin-left: auto;
		    margin-right: auto; 
		    text-align: center;
		    color: white;
		}

		.inner h2 {
			font-size: 300%;
		}

		.inner p {
			font-size: 150%;
		}

		html {
		  background: url(images/bg.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

	</style>
    
  </head>
  
  <body>

	<div class="outer">
	  <div class="middle">
	    <div class="inner">

	  	<h2>Jake Butterfield | Personal Portfolio</h2>
		<p>Check out who I am and what I can do:</p>
		<a href="home.php"><button type="button" class="btn btn-default btn-lg">ENTER</button></a>

	    </div>
	  </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>