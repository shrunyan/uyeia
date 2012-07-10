<?php
session_start();//allows us to use $_SESSION

$access = 1;

//initalization
require_once('../objects/init.php');
$init = new init();
$init->init($access);

?>
<table class="exercise-table" id="myTable">
    	<thead>
        	<tr>
            	<th>Date</th>
                <th>Exercise</th>
                <th>Duration</th>
                <th>Weights</th>
                <th class="calorie-count">Calories</th>
            </tr>
        </thead>
        <tbody>
        	<?php 
				$userid = $GLOBALS['user']->get_user_id();
				$qry = "
					SELECT * FROM exercise 
					WHERE
					user_id = '$userid'
					ORDER BY time_stamp DESC
				";
				$results = mysql_query($qry) or die(mysql_error());
				$rec = mysql_fetch_array($results);
				if(empty($rec))
					{
						echo '<tr><td style="font-size: 1.4em;><strong>Log your exercises and see the results!</strong></td></tr>';
					}
				
				while($rec = mysql_fetch_array($results))
				{
					echo '
						<tr class="">
							<td>'.$rec['exercise_date'].'</td>
							<td>'.$rec['exercise'].'</td>
							<td>'.$rec['duration'].'</td>
							<td>'.$rec['weights'].'</td>
							<td class="">'.$rec['calories'].'</td>	
						</tr>
					';
				}
			?>
        </tbody>
        <tfoot>
        	
        </tfoot>
    </table>