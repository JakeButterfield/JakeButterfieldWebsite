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
    
  <style type="text/css">

  </style>

  </head>
  
  <body>
  
  	<div class="header" style="background: url(images/contactbg.jpg) no-repeat center center; background-size: cover;">
  		<div class="container">
  			<h1>Jake Butterfield</h1>
  			<p>"Communication is the real work of leadership"</p>
            <p><b>Nitin Nohria</b></p><br>
  		</div>
  	</div>

  <?php
    include('nav.php')
  ?>
    
<div class="wrap" style="background-color: #117bff">

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

    <form action='includes/contact.inc.php' method='POST'>

      <div class="form-group">

        <label for="cmessage" style="color: #fff">Send Me a Message:</label>
        <textarea class='form-control' type='text' name='cmessage' placeholder='Message'></textarea><br>

      </div>

        <button type='submit' class="btn btn-default">SEND MESSAGE</button>

    </form>

  </div>


  <br><br><br>
    
	<div class="jumbotron" style="background-color: #fff;">
					<h2 style="color: #117bff;"><b>My Socials:</b></h2><br>
					
                    <div class="container">
                    	<div class="row">
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<a href="https://twitter.com/jakebutts99"><img src="images/socialicons/twitter.png">
                                <p>Twitter</p></a>
                            </div>
                    
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<a href="https://uk.pinterest.com/jbutterfield99/"><img src="images/socialicons/pinterest.png">
                                <p>Pinterest</p></a>
                            </div>  
                    
                        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            	<a href="https://www.instagram.com/jakebutterfield99/"><img src="images/socialicons/instagram.png">
                                <p>Instagram</p></a>
                            </div>
                        </div>
                    </div>                	
    </div>    
    
    
    <div id="footer">
      <div class="container footer">
        <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
      </div>
    </div>    
    
    
</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>

<?php } ?>