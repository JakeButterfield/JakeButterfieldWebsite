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
  
  	<div class="header" style="background: url(images/bucketbg.jpg) no-repeat center center; background-size: cover;">
  		<div class="container">
  			<h1>Jake Butterfield</h1>
  			<p>"You can, you should, and if you're brave enough to start, you will"</p>
            <p><b>Stephen King</b></p>
  		</div>
  	</div>

	<?php
		include('nav.php')
	?>

<div id="wrap">

		<div class="jumbotron" style="background-color: #117bff; color: white;">
                    
            <h2><b>Bucket List</b></h2>
            <p>This is a little list of some things I want to do in life</p>
            <p>Have a read through and see first hand what I want to do</p>
            <p>Be sure to keep a tally on how many you wouldn't mind doing yourself</p>
            
		</div>

<!-- 4:1 -->
  <div class="container" style="margin-top: 3%;">
	<div class="row">
    
    
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3>Great Barrier Reef</h3><!-- style="color: lime" when complete-->
			<p>I would love to dive or snorkel in this amazing place and see all the beautiful sights from down below.</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> Not Yet</p>
		  </div>
		  </div>
	  </div>
      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3>Go on Safari</h3><!-- style="color: lime" when complete-->
			<p>Safari's are a great oppurtunity to see all kinds of wild animals in their natural habitats, I'd love to do one.</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> Not Yet</p>
		  </div>
		  </div>
	  </div>      
      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3>Visit all 7 Continents</h3><!-- style="color: lime" when complete-->
            <p><span style="color: ">Antarctica</span><br>
			   <span style="color: #117bff">North America</span><br>
               <span style="color: #117bff">South America</span><br>
               <span style="color: #117bff">Africa</span><br>
               <span style="color: ">Asia</span><br>
               <span style="color: #117bff">Europe</span><br>
               <span style="color: ">Oceania</span><br>
            </p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> Not Yet</p>
		  </div>
		  </div>
	  </div>
      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3>Do Route 66</h3><!-- style="color: lime" when complete-->
			<p>This classic road trip sounds like an amazing thing to do.</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> Not Yet</p>
		  </div>
		  </div>
	  </div>
      </div>
      </div>
      
      
      
<!-- 4:2 -->
  <div class="container" style="margin-top: 3%;">
	<div class="row">      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3 style="color: lime;">Learn to Dive</h3>
			<p>Having a better alternative to snorkelling would be awesome and open up more possibilities for me</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> August 2015</p>
		  </div>
		  </div>
	  </div>
      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3>Walk the Golden Gate Bridge</h3><!-- style="color: lime" when complete-->
			<p>Such a simple thing but it's amazing infrastructure has always fascinated me, I want to at least see it!</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> Not Yet</p>
		  </div>
		  </div>
	  </div>      
      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3>Be above the clouds</h3><!-- style="color: lime" when complete-->
			<p>No, not in a plane. I want to climb a mountain or something similar to stand above the clouds.</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> Not Yet</p>
		  </div>
		  </div>
	  </div>
      
	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
		<div class="thumbnail">
		  <div class="caption">
			<h3 style="color: lime">Visit New York</h3>
			<p>The Big Apple has continuously astounded me, mainly due to the 'block' layout of the city and the atmosphere</p>
            <p><b>Added:</b> July 2016</p>
            <p><b>Completed:</b> March 2016</p>
		  </div>
		  </div>
	  </div>
                  
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