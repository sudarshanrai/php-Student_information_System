<?PHP 
 session_start();
		if(!isset($_SESSION['name']))
		{
				header( 'Location: http://localhost/login.php' ) ;
				}
		?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8" />
    
    <title>Lean Slider Demo</title>
<link href="main1/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="main1/css/modal.css" rel="stylesheet" type="text/css" />
    <script src="main1/scripts/modernizr-2.6.1.min.js"></script>
    <script src="main1/ajax.js"></script>
    <script src="main1/lean-slider.js"></script>
    <link rel="stylesheet" href="main1/lean-slider.css" type="text/css" />
    <link rel="stylesheet" href="main1/sample-styles.css" type="text/css" />
	<style>
	body
{
    background-color:#F0FFC2




;
height:                             500px;
}
		#slideshow {
			top:0px; 
		    margin: 10px auto; 
		    position: relative; 
		    width: 500px; 
		    height: 470px; 
		    padding: 10px; 
			border:3px solid #444;
		    box-shadow: 0 0 10px rgba(0,0,0,0.4); 
		}
		
		#slideshow > div { 
		    position: absolute; 
		    top: 10px; 
		    left: 10px; 
		    right: 10px; 
		    bottom: 10px; 
		}
		</style>
</head>

<body>
<header>
            <h2>MS RAMAIAH INSTITUTE OF TECHNOLOGY</h2>
		<h3>(An  Autonomous Institute Affiliated to vtu)</h3>
		<h4>Accredited By National Board of Accredation</h4>
		<?php
         echo "<h5>".$_SESSION['name']."</h5>";
        ?>
		<img border="0" src="main1/msrit.jpg" width="70" height="70">
        </header>
		
	
 <div class="main">
           <div class="panel">
                <a href="unset.php" id="logout">Log out</a>
                <a href="http://www.msrit.edu/placement/" id="aboutus">About us</a>
		<a href="ret.php" id="notification" >View Form</a>
                <a href="form1.php" id="message">View Companies</a>
            </div>
			
    <div class="slider-wrapper">
        <div id="slider">
            <div class="slide1">
                <img src="main1/images/1.jpg" alt="" />
            </div>
            <div class="slide2">
                <img src="main1/images/2.jpg" alt="" />
            </div>
            <div class="slide3">
                <img src="main1/images/3.jpg" alt="" />
            </div>
            <div class="slide4">
                <img src="main1/images/4.jpg" alt="" />
            </div>
        </div>
        <div id="slider-direction-nav"></div>
        <div id="slider-control-nav"></div>
    </div>
    </div>
</div>


    <script type="text/javascript">
    $(document).ready(function() {
        var slider = $('#slider').leanSlider({
            directionNav: '#slider-direction-nav',
            controlNav: '#slider-control-nav'
        });
    });
    </script>
	<?php
	unset($_SESSION['err']); 
	?>
    <div class="footer">
	
		</div>
</body>
</html>