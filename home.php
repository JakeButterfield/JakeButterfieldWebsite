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
  
  	<div class="header" style="background: url(images/mainbg.jpg) no-repeat center center; background-size: cover;">
  		<div class="container">
  			<h1>Jake Butterfield</h1>
  			<p>"Creativity is intelligence having fun"</p>
            <p><b>Einstein</b></p><br>
  		</div>
  	</div>

	<?php
		include('nav.php')
	?>

<div id="wrap">
			
            
 		<div class="jumbotron" style="background-color: #117bff;">
			<div class="container">
				
				<div class="row">
                
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
						<img src="./images/circleimg.png" alt="Banter">
					</div>
					
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 mainblue">
						<div class="crunchtext">
							<p><b>Name:</b> Jake Butterfield</p>
							<p><b>DOB:</b> 10th December 1999</p>
                            <p><b>Profession:</b> Student</p>
							<p><b>Lives in:</b> Durham, United Kingdom</p>
							<p><b>Interests:</b> Design/Development</p>
							<p><b>Hobbies:</b> Programming, Diving, Cycling</p>
							<p><b>Career Aspiration:</b> Software Developer</p>
						</div>
					</div>
					
                    
				</div>
                
			</div>
            
		</div>           
            
            <div class="jumbotron" style="background-color: #fff;">
					<h2><b>About Me</b></h2>
					<p>My name is Jake Butterfield and I am 17 years old.</p>
					<p>I'm a Computing/IT student with a love for tech and computers.</p>

            		<?php

					  if (!isset($_SESSION['id'])) { ?>

					    <a href="login.php" class="btn btn-success btn-lg" role="button">Login to see more!</a>

					  <?php } else {  ?>

						<a href="about.php" class="btn btn-success btn-lg" role="button">Learn More</a>

					<?php 
					  } 
					?>

			</div>
		
            <div class="jumbotron" style="background-color: #117bff; color: white;">
					<h2><b>Portfolio</b></h2>
					<p>I used to do a whole load of Graphic Design, as well as development.</p>
					<p>I've compiled some of my best work to showcase.</p>
            		<?php

					  if (!isset($_SESSION['id'])) { ?>

					    <a href="login.php" class="btn btn-success btn-lg" role="button">Login to see more!</a>

					  <?php } else {  ?>

						<a href="portfolio.php" class="btn btn-success btn-lg" role="button">Portfolio</a>

					<?php 
					  } 
					?>
			</div>
        
             <div class="jumbotron" style="background-color: #fff;">
					<h2><b>Contact</b></h2>
					<p>Have a question or want to get in touch?</p>
					<p>Feel free to ask any weird questions you have for me, or check out some of my socials.</p>
            		<?php

					  if (!isset($_SESSION['id'])) { ?>

					    <a href="login.php" class="btn btn-success btn-lg" role="button">Login to see more!</a>

					  <?php } else {  ?>

						<a href="contact.php" class="btn btn-success btn-lg" role="button">Contact</a>

					<?php 
					  } 
					?>
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
</html>