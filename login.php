<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>

  <title>Jake Butterfield</title>

  <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
  
  <!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet" type="text/css">
    
  <!-- Stylesheets -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
  </head>
  
  <body>
  
  	<div class="header" style="background: url(images/login.jpg) no-repeat center center; background-size: cover;">
  		<div class="container">
  			<h1>Jake Butterfield</h1>
  			<p>"One thing leads to another, everything is connected"</p>
            <p><b>Charlotte Bonham-Carter</b></p><br>
  		</div>
  	</div>

	<?php
		include('nav.php')
	?>

	<br><br><br>

	<?php

		$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		if (strpos($url, 'error=empty') !== false) {
			
			echo "<div class='container'><h2 style='text-align: center; color: red;'>Your password is incorrect!</h2></div>";

		}

	?>

	<div class="container">

		<form action="includes/login.inc.php" method="POST">
			
			<div class="form-group">

			    <label for="email">Email address:</label>
			    <input type="email" class="form-control" name="email" placeholder="Email">

			</div>

			<br>
			
			<div class="form-group">

			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" name="pwd" placeholder="Password">

			</div>

			<button type="submit" class="btn btn-default">Log In</button>

		</form>

		<br>

		<h3>Don't have an account?</h3>
		<a href="signup.php"><button type="submit" class="btn btn-default">Create one now, its free!</button></a>


	</div>

	<br><br><br>
		
    <div id="footer">
      <div class="container footer">
        <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
      </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>