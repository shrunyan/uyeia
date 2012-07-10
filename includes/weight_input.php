<?php

$error = '';
$userid = $GLOBALS[user]->get_user_id();

if(!empty($_POST['addweight']))
{
	
	
	if(empty($_POST['weight_input']))
	{
		$error['weight_input'] = 'Enter you weight for today';
	}
	
	if(empty($error))
	{
		$qry = "
			INSERT INTO weight SET
			user_id = '$userid',
			weight = '$_POST[weight_input]'
		";
		
		mysql_query($qry) or die(mysql_error());
		
	}
}


$qry = "
	SELECT * FROM weight 
	WHERE
	user_id = '$userid'
	ORDER BY id desc limit 1
";

$result = mysql_query($qry) or die(mysql_error());

$rec = mysql_fetch_array($result);