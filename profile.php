<?php
	session_start();

	if (!isset($_SESSION['id'])) {

	} else {

	$userid = $_SESSION['id'];
	$first = $_SESSION['first'];
	$last = $_SESSION['last'];
	$email = $_SESSION['email'];
	$doe = $_SESSION['doe'];

	}
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

  	<div class="header" style="background-color: #117bff; height: 600px;">
  		<div class="container">
  				<h1>YOUR PROFILE</h1>
  				<p>Here you can see all of your information!</p>
  		</div>
  	</div>

	<?php
		include('nav.php');
		include('dbh.php');
	?>

	<?php

	if (!isset($_SESSION['id'])) { ?>

	<div class="jumbotron" style="background-color: #fff;">
	<h2><b>STOP</b></h2>
	<p>You can't have your own profile if you aren't logged in!</p>
	<a href="login.php" class="btn btn-success btn-lg" role="button">LOGIN</a>
	</div>
		
<?php } else { ?>

<div id="wrap">
			
    <div class="jumbotron" style="background-color: #D3D3D3;">

    	<div class="container">

    		<div class="row">

		    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

		    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

		    		<!-- <img src="images/default.png"> -->
		    			
		    		<img style="background:url(images/circleimg.png)" src="images/default.png" />

		    	</div>

		    	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

					<div class="mid">

						<h2><b>Your Profile:</b></h2>
						<br>
						<div class="mid">
							<p><b>First Name: </b><?php echo "$first"; ?></p>
							<p><b>Last Name: </b><?php echo "$last"; ?></p>
							<p><b>Email: </b><?php echo "$email"; ?></p>
							<p><b>DOE: </b><?php echo "$doe" ?></p>
						</div>

					</div>

				</div>

				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

			</div> <!-- End of row -->

		</div> <!-- End of container -->

	</div> <!-- End of jumbotron -->





	<div class="jumbotron" style="background-color: #fff;">

    	<div class="container">

    		<div class="row">

    				<?php

						$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

						if (strpos($url, 'error=empty') !== false) {
							
							echo "<h2 style='color: red;'>|Please fill out all fields|</h2>";

						}

						elseif (strpos($url, 'error=wrongpass') !== false) {
							
							echo "<h2 style='color: red;'>|Password is incorrect|</h2>";

						}

						elseif (strpos($url, 'error=wrongmail') !== false) {
							
							echo "<h2 style='color: red;'>|Email is incorrect|</h2>";

						}

						elseif (strpos($url, 'pcomplete') !== false) {
							
							echo "<h2 style='color: green;'>|Password successfully changed|</h2>";

						}

						elseif (strpos($url, 'ecomplete') !== false) {
							
							echo "<h2 style='color: green;'>|Email successfully changed|</h2>";

						}

						elseif (strpos($url, 'error=email') !== false) {
							
							echo "<h2 style='color: red;'>|Email is already taken|</h2>";

						}

					?>

		    	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>


		    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

		    		<h2><b>Change Password:</b></h2>
		    		<br>

					<div class="container">
					<div class="mid">

						<form action='includes/changepass.inc.php' method='POST'>
							
							<div class="form-group">

								<label for="oldpass">Original Password:</label>
								<input class='form-control' type='text' name='oldpass' placeholder='Original Password'><br>

							</div>

							<div class="form-group">

								<label for="newpass">New Password:</label>
								<input class='form-control' type='text' name='newpass' placeholder='New Password'><br>

							</div>

								<button type='submit' class="btn btn-default">CHANGE PASSWORD</button>

						</form>

					</div>
					</div>

				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

		    		<h2><b>Change Email:</b></h2>
		    		<br>

					<div class="container">
					<div class="mid">

						<form action='includes/changeemail.inc.php' method='POST'>
							
							<div class="form-group">

								<label for="oldemail">Original Email:</label>
								<input class='form-control' type='text' name='oldemail' placeholder='Original Email'><br>

							</div>

							<div class="form-group">

								<label for="newemail">New Email:</label>
								<input class='form-control' type='text' name='newemail' placeholder='New Email'><br>

							</div>

								<button type='submit' class="btn btn-default">CHANGE EMAIL</button>

						</form>

					</div>
					</div>

				</div>


				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

			</div> <!-- End of row -->

		</div> <!-- End of container -->

	</div> <!-- End of jumbotron -->

	<div class="jumbotron" style="background-color: #D3D3D3;">

    	<div class="container">

    		<div class="row">

    			<h2>Your Messages:</h2><br><br>
				
					<?php 

						$sql = "SELECT * FROM contact WHERE cemail='$email'";
						$result = mysqli_query($conn, $sql);

						if (!$result) {
						    printf("Error: %s\n", mysqli_error($conn));
						    exit();
						} else {

							while($row = mysqli_fetch_array($result,MYSQLI_NUM)){

								echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>";

								echo "<div class='thumbnail'><div class='caption'>";

								printf ("<b>Message No.</b>%s <br><b>Name:</b> %s %s <br><b>Email:</b> %s <br><b>Message:</b> %s",$row[0],$row[1],$row[2],$row[3],$row[4]);

								echo "</div>";

								echo "<div class='caption'>";

								printf ("<b>Reply:</b> %s",$row[5]);

								echo "</div></div></div>";

							}

						}

					?>

			</div> <!-- End of row -->

		</div> <!-- End of container -->

	</div> <!-- End of jumbotron -->
            
</div> <!-- End of wrap -->
		
<div id="footer">
  <div class="container footer">
    <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
  </div>
</div>
	
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
  </body>
</html>

<?php } ?>