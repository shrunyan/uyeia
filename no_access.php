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
                <span class="error"><?php echo $error['user_email']; ?></span>
                
                <label for="user_pass">Password: </label>
                <input type="password" id="user_pass" name="user_pass" tabindex="2" />
                <span class="error"><?php echo $error['user_pass']; ?></span>
                
                <span class="error"><?php echo $error['login']; ?></span>
                <input type="hidden" value="login_form" name="login_form" />
                <input type="submit" value="Login" class="btn" />
                </fieldset>
            </form>
            
    	</div>
    </div>
<div class="clearfix"></div>
</div>
	<div id="content_wrap">
		<div id="content">
			
			<div id="no-access">
				<h2>Sorry but your access level is to low.</h2>
				
				<h3>Try one of these options:</h3>
				<ul>
					<li><a href="index.php">Log In</a></li>
					<li><a href="index.php">Sign Up</a></li>
				</ul>
			</div>
		
			<div class="clearfix"></div>
		</div><!-- close content -->
	</div><!-- close content_wrap -->
<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>