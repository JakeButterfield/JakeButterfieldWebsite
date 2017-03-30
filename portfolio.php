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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
  
  <!-- Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,100" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Sarala" rel="stylesheet" type="text/css">
    
  <!-- Stylesheets -->
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>
  
  <body>
  
  	<div class="header" style="background-color: #117bff;">
  		<div class="container">
  			<h1>UNDER CONSTRUCTION</h1>
  			<p>Check Back Later</p>
            <p><b></b></p><br>
  		</div>
  	</div>

  <?php
    include('nav.php')
  ?>

<div id="wrap">

  <div class="jumbotron" style="background-color: #D3D3D3;">

    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>

      </div>

    </div>

  </div>
        
</div> <!-- End of wrap -->
		
    <div id="footer">
      <div class="container footer">
        <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
      </div>
    </div>
	
  </body>
</html>

<?php } ?>