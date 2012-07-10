<?php 
session_start();//allows us to use $_SESSION

$access = 1;

//initalization
require_once('objects/init.php');
$init = new init();
$init->init($access);

?>


<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
		if($access == 1){
		  include('includes/header.php');
		}
		else { echo'
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
		                <input type="text" value="" id="user_email" name="user_email" tabindex="1" />
		                <span class="error"></span>
		                
		                <label for="user_pass">Password: </label>
		                <input type="password" id="user_pass" name="user_pass" tabindex="2" />
		                <span class="error"></span>
		                
		                <span class="error"></span>
		                <input type="hidden" value="login_form" name="login_form" />
		                <input type="submit" value="Login" class="btn" />
		                </fieldset>
		            </form>
		            
		    	</div>
		    </div>
		<div class="clearfix"></div>
		</div>
		';
		
		}
}?>

    <div id="content_wrap">
        <div id="content">
            <div id="page-404">
                <h2>404 Error</h2>
                <h3>We can't seem to find the page you are looking for.</h3>
                <p>We aplogize for this inconvenice. Perhaps you may find what you are looking for in the <a href="/help/help.php">help section</a>.</p>
            </div>
        <div class="clearfix"></div>
    </div>
    </div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>