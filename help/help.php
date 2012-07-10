<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Uyei</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<div id="header_wrap">
    <div id="header">
        <h1><a class="logo" href="/index.php">Uyeia</a> |
        <a href="../index.php" class="logout">Logout</a>
        </h1>
        <ul class="nav">
            <li><a href="../dashboard.php">Dashboard</a></li>
            <li><a href="../calories.php">Calories</a></li>
            <li><a href="../exercise.php">Exercise</a></li>
            <li><a href="../profile.php">Profile</a></li>
        </ul>
    </div>
    <div id="weight" style="display: none;">
    	<form action="#" method="post">
        <fieldset>
        	<p>What's your weight today?</p>
        	<input type="text" class="weight-input" title="Inputing your wieght on a daily basis will help track your progress" />
            <input type="submit" value="Submit" class="submit" />
        </fieldset>
        </form>
    </div>
<div class="clearfix"></div>
</div>

<div id="content_wrap">
	<div id="content">
		<div id="finger-tabs">
			<h1 id="top"></h1>
			<ul class="finger-nav">
		    	<li><a href="trackers.html"><span>Using the Trackers</span></a></li>
		        <li><a href="settings.html"><span>Your Settings</span></a></li>
		        <li><a href="goals.html"><span>Reaching Your Goals</span></a></li>
		        <li><a href="contacting.html"><span>Contacting Us</span></a></li>
		        <li><a href="legal-information.html"><span>Legal Information</span></a></li>
		    </ul>
		</div>
	</div>
</div>

	<div class="clearfix"></div> <!-- final clear, all other elements should be floated -->
	</div><!-- Main Wrapper -->
		<div id="footer_wrap">
        <div id="footer"> <!-- Sticky Footer -->
        	<ul class="footer_nav">                        
                <li><a href="../contact.php" class="ajaxtrigger">Contact</a> /</li>
                <li><a href="help.php">Help</a> /</li>
                <li><a href="../privacy.php" class="ajaxtrigger">Privacy</a> /</li>
                <li><a href="../tos.php" class="ajaxtrigger">Terms of Service</a></li>
                <!-- <li><a href="http://healthylives.wikispaces.com/">Health Info</a></li> -->
            </ul>
        </div>
		</div>
        
        	<!-- Container for AJAX content -->
        	<div id="results_wrap">
               	<div id="results">
                </div>
            </div><!-- end -->
            
            <div id="tooltip" style="display: none;">
            	<h3 style="display: none;"></h3>
                <div class="body" style="display: block;"></div>
                <div class="url" style="display: none;"></div>
            </div> 
            
            <div id="success" style="display: none;">
            	<p>Your message was submitted successfully.</p>
            </div>
            
            
<!-- Scripts -->     
<script src="../scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="../scripts/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
<script src="../scripts/jquery.tablesorter.min.js" type="text/javascript"></script>
<script src="../scripts/jquery.tooltip.min.js" type="text/javascript"></script>
<script src="../scripts/jeditable.js" type="text/javascript"></script>
<script src="../scripts/custom.js" type="text/javascript"></script>
</body>
</html>