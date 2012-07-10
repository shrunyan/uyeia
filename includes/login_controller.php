<?php
if(!empty($_SESSION['user_id'])){//if user is logged in
	
	echo '<p>Hello, '.'<a href="profile.php">'.$GLOBALS['user']->get_username().'</a>'.'</p>'
	.'<a href="logout_controller.php">Logout</a>';

}
else{//else if user not logged in
	echo '<a href="login.php">Login</a> or
	<a href="signup.php">Signup</a>';
}
?>