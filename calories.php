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

	<h2>Calorie Tracker</h2>
    
    <div class="add-info">
        <form action="calories.php" method="post">
        	<fieldset>
        	<span>Today I ate&hellip;</span>
            <input class="meal" type="text" value="Enter you meal" name="meal" />
            <span> for&hellip;</span>
            <select name="meal-type">
            	<option>Choose type</option>
                <option>Breakfast</option>
                <option>Lunch</option>
                <option>Dinner</option>
                <option>Snack</option>
            </select>
            <span>that was&hellip;</span>
            <select name="meal-size">
            	<option>Choose portion</option>
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
            </select>
            
            <input type="submit" class="btn" value="Add Meal" />
            
            <span class="loading" style="display: none;"><img src="images/indicator.gif" height="16" width="16" alt="loading animation" /></span>
            </fieldset>
        </form>
    </div>
    
    <div id="tabs">
                    <ul class="date-tabs">
                        <li><a href="#tabs-1"><span>Day</span></a></li>
                        <li><a href="tracker-info/calories-week.php"><span>Week</span></a></li>
                        <li><a href="tracker-info/calories-month.php"><span>Month</span></a></li>
                    </ul>
                    
                    <div id="tabs-1">
                    <table class="calories-table" id="myTable">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Meal Eaten</th>
                        <th>For</th>
                        <th>Portion</th>
                        <th class="calorie-count">Calories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="monday">
                        <td>Monday</td>
                        <td>Beagel, Coffee</td>
                        <td>Breakfast</td>
                        <td>Small</td>
                        <td class="small-amount">500</td>
                    </tr>
                    <tr class="monday">
                        <td>Monday</td>
                        <td>Beagel, Coffee</td>
                        <td>Breakfast</td>
                        <td>Small</td>
                        <td class="small-amount">500</td>
                    </tr>
                    <tr class="monday">
                        <td>Monday</td>
                        <td>Beagel, Coffee</td>
                        <td>Breakfast</td>
                        <td>Small</td>
                        <td class="small-amount">500</td>
                    </tr>
                    
                    <tr class="tuesday">
                        <td>Tuesday</td>
                        <td>Beagel, Coffee, Beagel, Coffee, Beagel, Coffee, Beagel, Coffee</td>
                        <td>Breakfast</td>
                        <td>Medium</td>
                        <td class="medium-amount">1,500</td>
                    </tr>
                    <tr class="tuesday">
                        <td>Tuesday</td>
                        <td>Beagel, Coffee, Beagel, Coffee, Beagel, Coffee, Beagel, Coffee</td>
                        <td>Breakfast</td>
                        <td>Medium</td>
                        <td class="medium-amount">1,500</td>
                    </tr>
                    <tr class="tuesday">
                        <td>Tuesday</td>
                        <td>Beagel, Coffee, Beagel, Coffee, Beagel, Coffee, Beagel, Coffee</td>
                        <td>Breakfast</td>
                        <td>Medium</td>
                        <td class="medium-amount">1,500</td>
                    </tr>
                    
                    <tr class="wednesday">
                        <td>Wednesday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="wednesday">
                        <td>Wednesday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="wednesday">
                        <td>Wednesday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    
                    <tr class="thursday">
                        <td>Thursday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="thursday">
                        <td>Thursday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="thursday">
                        <td>Thursday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    
                    <tr class="friday">
                        <td>Friday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="friday">
                        <td>Friday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="friday">
                        <td>Friday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    
                    <tr class="saturday">
                        <td>Saturday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="saturday">
                        <td>Saturday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="saturday">
                        <td>Saturday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    
                    <tr class="sunday">
                        <td>Sunday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="sunday">
                        <td>Sunday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                    <tr class="sunday">
                        <td>Sunday</td>
                        <td></td>
                        <td>Breakfast</td>
                        <td>Large</td>
                        <td class="large-amount">3,000</td>
                    </tr>
                </tbody>
            </table>
            
                    </div>
            		<!-- The DIVs for loading the table is placed here -->
                    
                    <div class="table-graph">
                        <h3>Weekly Progress</h3>
                        <img src="images/graph.jpg" alt="Graph showing your calorie intake."/>
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