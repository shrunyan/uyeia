<?php 
session_start();//allows us to use $_SESSION

//initalization
require_once('objects/init.php');
$init = new init();
$init->init();

?>

<?php 

$error = array();

if(!empty($_POST))
{
	
	if(empty($_POST['name']))
	{
		$error['name'] = 'Enter your full name';
	}
	if(empty($_POST['email']))
	{
		$error['email'] = 'Enter your email address';
	}
	if(empty($_POST['message']))
	{
		$error['message'] = 'Enter a message';
	}
	
	if(empty($error))
	{
	$mailto = 'info@uyeia.com';
	$subject = 'Uyeia contact form';
	$message = '
		
		Name: '.$_POST['name'].'
		
		Email: '.$_POST['email'].'
	
		Message: '.$_POST['message'].'
	
	';
	
	mail($mailto, $subject, $message);
	
	header('location:index.php');
	
	}
}
?>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	  include('includes/header.php');
}?>
<div id="content_wrap">
    <div id="content">
        <div id="load_content">
            <h1>Contact Us</h1>
            <form action="contact.php" method="post">
            
                <label for="name">Full Name:</label><span class="error"><?php echo $error['name']; ?></span><br />
                <input type="text" id="name" name="name" value="<?php echo $_POST['name']; ?>" /><br />
                
                <label for="email">Email:</label><span class="error"><?php echo $error['email']; ?></span><br />
                <input type="text" id="email" name="email" value="<?php echo $_POST['email']; ?>" /><br />
                
                <label for="message">Message:</label><span class="error"><?php echo $error['message']; ?></span><br />
                <textarea id="message" name="message"><?php echo $_POST['message']; ?></textarea><br />
                
                <input type="submit" class="btn" name="submit" value="Submit" />
                
            </form>
        </div>
    <div class="clearfix"></div>
	</div>
</div>
<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>