<?php 
session_start();//allows us to use $_SESSION

$access = 1;

//initalization
require_once('objects/init.php');
$init = new init();
$init->init($access);


$error = array('exercise' => 'Type your exercise');


if(!empty($_POST))
{	
	if($_POST['exercise'] == 'Type your exercise')
	{
		$error['exercise'] = 'enter your exercise';	
	}
	
	
	else{
		$userid = $GLOBALS['user']->get_user_id();
		$qry = "
			INSERT INTO exercise SET
			user_id = '$userid',
			exercise = '$_POST[exercise]',
			duration = '$_POST[exercise_duration]',
			weights = '$_POST[exercise_weights]',
			exercise_date = CURRENT_DATE()
		";
		
		mysql_query($qry) or die(mysql_error());
	}	
}

?>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	  include('includes/header.php');
}?>
<div id="content_wrap">
<div id="content">
	<h2>Exercise Tracker</h2>
    <div class="add-info">
        <form action="exercise.php" method="post">
        	<fieldset>
        	<span>Today I did&hellip;</span>
            	<input class="exercise_input" type="text" value="<?php echo $error['exercise']; ?>" name="exercise" />
            <span> for&hellip;</span>
           		<input type="text" name="exercise_duration" value="exercise duration" class="exercise_duration" />
            <span>&amp; used these weights&hellip;</span>
            	<select name="exercise_weights" class="exercise_weights">
                <option>None</option>
                <option value="5">5 lbs</option>
                <option value="10">10 lbs</option>
                <option value="20">20 lbs</option>
                <option value="25">25 lbs</option>
                <option value="30">30 lbs</option>
                <option value="35">35 lbs</option>
                <option value="40">40 lbs</option>
                <option value="45">45 lbs</option>
                <option value="50">50 lbs</option>
                <option value="55">55 lbs</option>
                <option value="60">60 lbs</option>
                <option value="65">65 lbs</option>
                <option value="70">70 lbs</option>
                <option value="75">75 lbs</option>
                <option value="80">80 lbs</option>
            </select>
           
            <input type="hidden" value="addexercise" name="addexercise" /> 
            <input type="submit" class="btn" value="Add Exercise" />
            
            <span class="loading" style="display: none;"><img src="images/indicator.gif" height="16" width="16" alt="loading animation" /></span>
            </fieldset>
        </form>
    </div>
    
    
    <div id="tabs">
                    <ul class="date-tabs">
                        <li><a href="tracker-info/exercise-day.php"><span>Day</span></a></li>
                        <li><a href="tracker-info/exercise-week.php"><span>Week</span></a></li>
                        <li><a href="tracker-info/exercise-month.php"><span>Month</span></a></li>
                    </ul>
            		<!-- The DIVs for loading the table is placed here -->
                    <div class="table-graph">
                        <h3>Weekly Progress</h3>
                        <img src="images/graph.jpg" alt="Graph showing your calorie burn." />
                        <a class="ajaxtrigger btn" id="export_report" href="export.php">Print / Email / PDF</a>
                    <div class="clearfix"></div>
                    </div>
    <div class="clearfix" style="float:none"></div>
    </div>
<div class="clearfix"></div>
</div>
</div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>