<div class='nav'>
	<div class='container'>
       	<div class='fixed-nav'>
               <ul>

               	    <?php

                    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                   	if (isset($_SESSION['id'])) {
                      
                   	?>

                   	<a href='home.php'><li <?php if (strpos($url, 'home') !== false) { ?>id='active'<?php } ?>>Home</li></a>
                   	<a href='about.php'><li <?php if (strpos($url, 'about') !== false) { ?>id='active'<?php } ?>>About</li></a>
                   	<a href='portfolio.php'><li <?php if (strpos($url, 'portfolio') !== false) { ?>id='active'<?php } ?>>Portfolio</li></a>
                   	<a href='bucket-list.php'><li <?php if (strpos($url, 'bucket-list') !== false) { ?>id='active'<?php } ?>>Bucket List</li></a>
                   	<a href='contact.php'><li <?php if (strpos($url, 'contact') !== false) { ?>id='active'<?php } ?>>Contact</li></a>
                    <a href='profile.php'><li <?php if (strpos($url, 'profile') !== false) { ?>id='active'<?php } ?>>Profile</li></a>
                   	<a href='includes/logout.inc.php'><li>Logout</li></a>
                   	
                   	<?php

                      if ($_SESSION['admin'] == 1) { ?>
                        <a href='admin.php'><li <?php if (strpos($url, 'admin') !== false) { ?>id='active'<?php } ?>>Admin</li></a>
                      <?php } ?>

                    <?php
                    } else {
                    ?>

                   	<a href='home.php'><li <?php if (strpos($url, 'home') !== false) { ?>id='active'<?php } ?>>Home</li></a>
                    <a href='signup.php'><li <?php if (strpos($url, 'signup') !== false) { ?>id='active'<?php } ?>>Sign Up</li></a>
                   	<a href='login.php'><li <?php if (strpos($url, 'login') !== false) { ?>id='active'<?php } ?>>Login</li></a>

                   	<?php
                   	} // END OF ISSET 'IF'
                   	?>
	                   
               </ul>
        </div>
  	</div>
</div>