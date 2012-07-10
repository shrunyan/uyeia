<?php 
session_start();//allows us to use $_SESSION

$access = 1;

//initalization
require_once('objects/init.php');
$init = new init();
$init->init($access);

?>


<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	  include('includes/header.php');
}?>
<div id="content_wrap">
<div id="content">
	<h2><?php echo $GLOBALS['user']->get_username(); ?> Profile Settings</h2>
	
    <div class="profile-module">
    	<h3>Personal Settings</h3>
        <div class="settings">
        	<p>Name: <span class="editable_textarea" id="profilename"><?php echo $GLOBALS['user']->get_username(); ?></span></p>
            <p>Age: <span class="editable_textarea" id="profileage"><?php echo $GLOBALS['user']->get_user_age(); ?></span></p>
            <p>Email: <span class="editable_textarea" id="profileemail"><?php echo $GLOBALS['user']->get_email(); ?></span></p>
            <div>Sex: <form action="settings.php" method="post">
            			<fieldset>
                            <label for="male">Male</label>
                            <input type="checkbox" name="male" id="male" />
                            <label for="female">Female</label>
                            <input type="checkbox" name="female" id="female" />
                        </fieldset>
            		</form>
            </div>
            <p>Current Weight: <span class="editable_textarea" id="profileweight"><?php echo $rec['weight']; ?> lbs</span></p>
            <p>Height: <span class="editable_textarea" id="profileheight"><?php echo $GLOBALS['user']->get_user_height(); ?></span></p>


        </div>
    </div>
	
    <div class="profile-module">
    	<h3>Health Goals</h3>
        <div class="settings">
        	<form action="" method="post">
        		<p>What is your desired weight?</p>
        		<label for="desired_weight">LBS:</label>
	        	<input type="text" id="desired_weight" />
	        	
	            <p>When do you want to acheive your desired weight by?</p>
	            <label for="datepicker">Date:</label>
	            <input type="text" id="datepicker" />
        	</form>
        	
        </div>
    </div>
    
    <div class="profile-module">
    	<h3>Application Settings</h3>
        <div class="settings">
        	<form action="" method="post">
            <fieldset>
                <h4>Display Widgets:</h4>
                <ul>
                    <li><input type="checkbox" /> Display today's calories</li>
                    
                    <li><input type="checkbox" /> Display today's exercise schedule</li>
                    
                    <li><input type="checkbox" /> Display health tips</li>
                </ul> 
                <h4>Notifications:</h4>
                <ul>
                    <li><input type="checkbox" /> Email me health notifications</li>
                    
                    <li><input type="checkbox" /> Email exercise reminders</li>
                </ul>
                <a class="btn email-report-btn" href="JavaScript:;">email health report</a>         	
            </fieldset>
            </form>
        </div>
    </div>

<div class="clearfix"></div>
</div>
</div>

<div id="email-report" style="display: none;">
	<form action="" method="post">
    	<p>What email will you send this to?</p>
        <fieldset>
            <input type="text" name="email" />
            <input type="submit" class="btn" value="Send Email" />
        </fieldset>
    </form>
</div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>