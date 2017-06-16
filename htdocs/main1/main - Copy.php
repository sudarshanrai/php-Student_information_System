<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8" />
    
    <title>Lean Slider Demo</title>
<link href="css/layout.css" rel="stylesheet" type="text/css" />
        <link href="css/modal.css" rel="stylesheet" type="text/css" />
    <script src="scripts/modernizr-2.6.1.min.js"></script>
    <script src="ajax.js"></script>
    <script src="lean-slider.js"></script>
    <link rel="stylesheet" href="lean-slider.css" type="text/css" />
    <link rel="stylesheet" href="sample-styles.css" type="text/css" />
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
        session_start()
        $name=$_session['name'];
      echo "<h5>".$name."</h5>";
        ?>
		<img border="0" src="msrit.jpg" width="70" height="70">
        </header>
		
	
 <div class="main">
           <div class="panel">
                <a href="#logout" id="logout">Log out</a>
                <a href="#aboutus" id="aboutus">About us</a>
		<a href="ret.php" id="notification" >View Form</a>
                <a href="company.php" id="message">View Companies</a>
            </div>
			
    <div class="slider-wrapper">
        <div id="slider">
            <div class="slide1">
                <img src="images/1.jpg" alt="" />
            </div>
            <div class="slide2">
                <img src="images/2.jpg" alt="" />
            </div>
            <div class="slide3">
                <img src="images/3.jpg" alt="" />
            </div>
            <div class="slide4">
                <img src="images/4.jpg" alt="" />
            </div>
        </div>
        <div id="slider-direction-nav"></div>
        <div id="slider-control-nav"></div>
    </div>
    </div>
</div>
<div class="footer">
		</div>

    <script type="text/javascript">
    $(document).ready(function() {
        var slider = $('#slider').leanSlider({
            directionNav: '#slider-direction-nav',
            controlNav: '#slider-control-nav'
        });
    });
    </script>
    
</body>
</html>