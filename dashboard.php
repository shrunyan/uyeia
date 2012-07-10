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

	<h2>Hi, <a href="profile.php"><?php echo $GLOBALS['user']->get_username(); ?></a> <small>(<?php echo $rec['weight']; ?>lbs)</small></h2>
    
    <div class="drop_area">
	<div class="module_small">
    	<h3><a href="profile.php" title="Set your personal health goals">Health Goals</a><a href="JavaScript://" class="close">close</a></h3>
        <div class="module_content">
            <dl>
                <dt>Weight Goal:</dt>
                <dd>180lbs</dd>
                
                <dt>Fitness Goal:</dt>
                <dd>Slim Down</dd>
                
                <dt>Weight Progress:</dt>
                <dd><strong>Lost 22 lbs</strong></dd>
            </dl>
        </div>
    </div>
    </div>
    
    <div class="drop_area">
    <div class="module_small">
    	<h3><a href="calories.php" title="Manage your calories">Today's Calories</a><a href="JavaScript://" class="close">close</a></h3>
        <div class="module_content">
            <dl>
                <dt>Calorie Goal:</dt>
                <dd>2,500/day</dd>
                
                <dt>Calories Eaten:</dt>
                <dd>750</dd>
                
                <dt>Calories Remaining:</dt>
                <dd><strong>1,750</strong></dd>
            </dl>
        </div>
    </div>
    </div>
    
    <div class="drop_area">
    <div class="module_small">
    	<h3><a href="exercise.php" title="Manage your exercise schedule">Today's Exercise</a><a href="JavaScript://" class="close">close</a></h3>
        <div class="module_content">
            <dl>
                <dt>Today’s Schedule:</dt>
                <dd>Basketball @ 4pm</dd>
                
                <dt>Exercise Done:</dt>
                <dd>weight lifting</dd>
                
                <dt>Calories Burned:</dt>
                <dd><strong>500</strong></dd>
            </dl>
        </div>
    </div>
    </div>
    
    <div class="drop_area">
    <div class="module_medium">
    	<h3><a href="profile.php" title="Manage the Health Tips feature">Health Tips</a><a href="JavaScript://" class="close">close</a></h3>
        <div class="module_content health-tips">
            <p>Eat 5 fruits and vegetables a day!</p>
        </div>
    </div>
    </div>

<div class="clearfix"></div>
</div>
</div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>