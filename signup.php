<?php
	session_start();

	if (isset($_SESSION['id'])) {
		header("Location: home.php");
	} else {	
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
  
  	<div class="header" style="background: url(images/signup.jpg) no-repeat center center; background-size: cover;">
  		<div class="container">
  			<h1>Jake Butterfield</h1>
  			<p>"Be the change you want to see in the world"</p>
            <p><b>Ghandi</b></p><br>
  		</div>
  	</div>

	<?php
		include('nav.php')
	?>

	<br><br><br>

	<?php

		$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		if (strpos($url, 'error=empty') !== false) {
			
			echo "<div class='container'><h2 style='text-align: center; color: red;'>Please fill out all fields</h2></div>";

		}

		elseif (strpos($url, 'error=username') !== false) {
			
			echo "<div class='container'><h2 style='text-align: center; color: red;'>Email is already in use</h2></div>";

		}

	?>

	<br><br>
	
	<div class="container">

		<form action='includes/signup.inc.php' method='POST'>
			
			<div class="form-group">

				<label for="first">First Name:</label>
				<input class='form-control' type='text' name='first' placeholder='First Name'><br>

			</div>

			<div class="form-group">

				<label for="last">Last Name:</label>
				<input class='form-control' type='text' name='last' placeholder='Last Name'><br>

			</div>

			<div class="form-group">

				<label for="email">Email address:</label>
				<input class='form-control' type='email' name='email' placeholder='Email'><br>

			</div>

			<div class="form-group">

				<label for="pwd">Password:</label>
				<input class='form-control' type='password' name='pwd' placeholder='Password'><br>

			</div>

				<button type='submit' class="btn btn-default">SIGN UP</button>

		</form>

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

<html>
<?php } ?>