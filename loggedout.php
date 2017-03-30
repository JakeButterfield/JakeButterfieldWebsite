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
    

  <style type="text/css">
  
    #body {
       padding:10px;
       padding-bottom:60px;   /* Height of the footer */
    }
    #footer {
       position:absolute;
       bottom:0;
       width:100%;
       height:60px;   /* Height of the footer */
       background:#f5f5f5;
    }

  </style>  
  </head>
  
  <body>

	<?php
		include('nav.php');
	?>

<div id="wrap">         
            
      <div class="jumbotron" style="background-color: #fff;">
					<h2><b>You are not logged in!</b></h2>
					<p>Please create an account to continue:</p>
        	<a href="signup.php"><button type="submit" class="btn btn-default btn-lg">Sign Up</button></a>
          <br><br>
          <p>If you already have an account:</p>
          <a href="login.php"><button type="submit" class="btn btn-default btn-lg">Login</button></a>
			</div>           
                   
</div> <!-- End of wrap -->	
		
    <div id="container">
    <div id="footer">
      <div class="container footer">
        <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
      </div>
    </div>
    </div>
  </body>
</html>
<?php } ?>