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
	<link rel="stylesheet" href="./style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
  </head>
  
  <body>
  
  	<div class="header" style="background: url(images/aboutbg.jpg) no-repeat center center; background-size: cover;">
  		<div class="container">
  			<h1>Jake Butterfield</h1>
  			<p>"Learn as if you were to live forever"</p>
            <p><b>Ghandi</b></p>
  		</div>
  	</div>

  <?php
    include('nav.php')
  ?>

<div id="wrap">

        <div class="jumbotron" style="background-color: #117bff; color: white;">
            <h2><b>Childhood</b></h2>
            <p>I grew up and lived in the North East of England for the majority of my life</p>
            <p>In 2006 I moved to Dubai for 2 years before returning back to the Tropical Isle of Newcastle</p>
            <p>Most of my time growing up has been spent infront of a computer hence my technical abilities</p>
        </div>
		
		<div class="jumbotron" style="background-color: #fff;">       
            <h2><b>Programming</b></h2>
            <p>Software development and web design takes up a lot of my time</p>
            <p>Mainly just for myself to develop my skills for a future career</p>
            <p>I am attending college this year for a Computing Diploma to broaden my skills</p>   
		</div>

        <div class="jumbotron" style="background-color: #117bff; color: white;">
            <h2><b>Bucket List</b></h2>
            <p>There are so many things that I want to do with my life</p>
            <p>Mainly to experience new things and gain valuable life skills</p>
            <p>I have compiled a <del>small</del> large list of some general things I'd like to do</p>
            <a href="../bucket-list/index.html" class = "btn btn-success btn-lg" role="button">Bucket List</a>
        </div>
        
        <div class="jumbotron" style="background-color: #fff;">
            <h2><b>Favourite Quote</b></h2>
            <p>"Everybody is a genius. <br>But if you judge a fish by it's ability to climb a tree, <br>it will live it's whole life believing that it is stupid"</p>
            <p>- Albert Einstein</p>
        </div>
      	
        <div class="jumbotron" style="background-color: #117bff; color: white;">
          <div class="white">
            <h2><b>Software</b></h2>
            <p>For Python/Java I use <a href="https://www.jetbrains.com/" target="_blank">JetBrains</a></p>
            <p>For PHP I use <a href="http://www.sublimetext.com/" target="_blank">Sublime Text 3.</a></p>
            <p>For Graphics I use <a href="http://www.adobe.com/uk/products/photoshop.html" target="_blank">Adobe Photoshop.</a></p>
          </div>
        </div>
        
        
</div> <!-- End of wrap -->
		
    <div id="footer">
      <div class="container footer">
        <p class="text-muted">Website Designed & Developed by <a href="about.php">Jake Butterfield</a></p>
      </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
  </body>
</html>
<?php } ?>