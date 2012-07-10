<?php 
session_start();//allows us to use $_SESSION

//initalization
require_once('objects/init.php');
$init = new init();
$init->init();

//log user in
require_once('objects/user.php');
$user = new user();
$error = array();
if(!empty($_POST['login_form'])){
	$error = $user->login($_POST);
}
if(!empty($_POST['signup_form'])){
	$error = $user->sign_up($_POST);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Uyeia</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- Header -->
<div id="header_wrap">
    <div id="header">
        <h1><a class="logo" href="index.php">Uyeia</a></h1>
        <div id="login">
        
            <form action="index.php" method="post" id="login_form">
            	<fieldset>
            	<label for="user_email">Email: </label>
                <input type="text" value="<?php echo $_POST['user_email']?>" id="user_email" name="user_email" tabindex="1" />
                <span class="error" id="email-error"><?php echo $error['user_email']; ?></span>
                
                <label for="user_pass">Password: </label>
                <input type="password" id="user_pass" name="user_pass" tabindex="2" />
                <span class="error" id="pass-error"><?php echo $error['user_pass']; ?></span>
                
                <span class="error" id="login-error"><?php echo $error['login']; ?></span>
                <input type="hidden" value="login_form" name="login_form" />
                <input type="submit" value="Login" class="btn" />
                </fieldset>
            </form>
            
    	</div>
    </div>
<div class="clearfix"></div>
</div>
	
    <!-- Main Content -->
	<div id="content_wrap">
    	<div id="content">
        
        	<div class="demo">
            	<p class="slogan">Track your personal fitness and health goals, for FREE!</p>
                <p class="demo_tagline">Designed for you and your needs. Allows customization so you can track the health goals you want.</p>
				<img src="images/demo_image.jpg" width="421" height="280" alt="People working out at a gym" />
            </div>
            
            <div class="signup">
            	<p>Join for free!</p>
            	<form action="index.php" method="post" id="signup_form">
                	<fieldset>
                	
                	<label for="username">Name:</label><span class="error"><?php echo $error['username']; ?></span>
                	<input type="text" id="username" name="username" title="Please enter your full name" tabindex="3" value="<?php echo $_POST['username'];?>" />
                    
                    
                    <label for="email">Email:</label><span class="error"><?php echo $error['email']; ?></span>
                	<input type="text" id="email" name="email" title="Please enter a valid email" tabindex="4" value="<?php echo $_POST['email'];?>" />
                    
                    
                    <label for="password">Password:</label><span class="error"><?php echo $error['password']; ?></span>
                	<input type="text" id="password" name="password" tabindex="5" value="<?php echo $_POST['password'];?>" />
                	
                	
                    <input type="hidden" value="signup_form" name="signup_form" />
                    <input type="submit" class="btn" value="Sign Up Now!" />
                    
                    </fieldset>
                </form>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div id="features">
    	<div class="feature">
        	<h2>Track Goals</h2>
            <div>
                <p>With uyeia you can set goals and track your progress towards them. That way you can make informed decision for your health and recieve the encouragement of progess.</p>
            </div>
        </div>
        
        <div class="feature">
        	<h2>Easy to Use</h2>
            <div>
                <p>Uyeia should make sense to you. It's designed for easy of use so you don't waste time and can focus on the other parts of your life!</p>
            </div>
        </div>
        
        <div class="feature">
        	<h2>Reminders</h2>
            <div>
                <p>Life gets busy, trust us we know. We have reminders built in to help you remember to get that hour at the gym in or what ever exercise goals you have set.</p>
            </div>
        </div>
    <div class="clearfix"></div>
    </div>
	<div class="clearfix"></div> <!-- final clear, all other elements should be floated -->
	</div><!-- End Main Wrapper -->
    	
        <!-- Footer -->
		<div id="footer_wrap">
        <div id="footer"> <!-- Sticky Footer -->
        	<ul class="footer_nav">                        
                <li><a href="contact.php" class="ajaxtrigger">Contact</a> /</li>
                <li><a href="help/help.php">Help</a> /</li>
                <li><a href="privacy.php" class="ajaxtrigger">Privacy</a> /</li>
                <li><a href="tos.php" class="ajaxtrigger">Terms of Service</a></li>
                <!-- <li><a href="http://healthylives.wikispaces.com/">Health Info</a> /</li> -->
                <!-- <li><a href="iphone/index.html">Iphone App</a></li> -->
            </ul>
        </div><!-- end sticky footer -->
		</div> 
        
        <!-- Container for AJAX content -->
        	<div id="results_wrap">
               	<div id="results">
                    	<div id="load_content">
                        </div>
                </div>
            </div><!-- end -->
            
            <div id="tooltip" style="display: none;">
            	<h3 style="display: none;"></h3>
                <div class="body" style="display: block;"></div>
                <div class="url" style="display: none;"></div>
            </div>

<!-- JavaScript -->               
<script src="scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.7.2.custom.min.js" type="text/javascript"></script>
<script src="scripts/jquery.tablesorter.min.js" type="text/javascript"></script>
<script src="scripts/jquery.tooltip.min.js" type="text/javascript"></script>
<script src="scripts/jeditable.js" type="text/javascript"></script>
<script src="scripts/custom.js" type="text/javascript"></script>
            
</body>
</html>