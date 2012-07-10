<?php
session_start();

require_once('objects/init.php');
$init = new init();
$init->init();

require_once('objects/user.php');
$user = new user();
$error = $user->forgot_password($_POST, $success);

?>

<?php include('snippets/header.php')?>
	
	<div id="container">
	
		<h2>Forgot your password?</h2>
		
		<p>Enter your email address for your account and we will send you a link to reset your password.</p>
		
		<form method="post" action="forgot_pass.php" id="forgot_pass_form">
		
			<label for="email">Email:</label><span class="error"><?php echo $error['email']; ?></span>
			<input type="text" name="email" id="email" value="<?php echo $_POST['email']; ?>" />
			
			
			<input type="submit" class="add" value="Submit" />
			<p class="success"><?php echo $success; ?></p>
			
			<p><a href="signup.php">Don't have an account?</a></p>
			<p><a href="login.php">Already have an account?</a></p>
		
		</form>
	</div>
	
	<?php include('snippets/sidebar.php'); ?>
	
<?php ('snippets/footer.php'); ?>