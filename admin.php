<?php
	session_start();

	if (!isset($_SESSION['id'])) {
		header("Location: loggedout.php");
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

    <div class="header" style="background-color: #117bff; height: 600px;">
  		<div class="container">
  			<h1>ADMIN MENU</h1>
  			<p>Jake Butterfield Admin Menu</p>
  		</div>
  	</div>

	<?php
		include('nav.php');
		include('dbh.php');

		if ($_SESSION['admin'] != 1) { ?>
			
	        <div class="jumbotron" style="background-color: #fff;">
			<h2 class="error"><b>STOP</b></h2>
			<p>You do not have permission to view this page!</p>
	   		<a href="index.php" class="btn btn-success btn-lg" role="button">BACK HOME</a>
			</div>

	<?php } else { ?>

<div id="wrap">          
<br><br>
	<div class="container">

		<div class="row">

			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

			<h2>ALL MESSAGES:</h2>

				<?php 

					$sql = "SELECT * FROM contact";
					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result,MYSQLI_NUM)){

						echo "<div class='thumbnail'><div class='caption'>";

						printf ("Message No.%s <br>Name: %s %s <br>Email: %s <br> Message: %s<br>Reply: %s", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);

						echo "
						<form action='includes/adminreply.inc.php' method='POST'>

							<div class='form-group'>

						            <label for='creply'>Reply:</label>
						            <textarea class='form-control' type='text' name='creply' placeholder='Reply to message'></textarea>
                                                            <button type='submit' class='btn btn-default'>Reply</button></form>

					      	        </div>";				

				                echo "</div></div>";
				        } ?>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

			<h2>ALL USERS:</h2>

				<?php 

					$sql = "SELECT * FROM user";
					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result,MYSQLI_NUM)){

						if ($row[5] != 1) {
							$chkadmin = "No";
						} else {
							$chkadmin = "Yes";
						}

						echo "<div class='thumbnail'><div class='caption'>";						

						printf ("User ID: %s <br>Name: %s %s <br>Email: %s <br> Admin: %s<br> DOE: %s",$row[0],$row[1],$row[2],$row[3],$chkadmin,$row[6]);

						echo "</div></div>";

					}

				?>

			</div>

			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

		</div>
	</div>
            
                   
</div> <!-- End of wrap -->
		
    <div id="footer">
      <div class="container footer">
        <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
      </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
  </body>

  <?php } ?> <!-- END OF ELSE -->

</html>
<?php } ?>