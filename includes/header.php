<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Uyeia</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="wrapper">

<div id="header_wrap">
    <div id="header">
        <h1>
        	<a class="logo" href="dashboard.php">Uyeia</a>
            <span>|</span>
            <a class="logout" href="includes/logout_controller.php">Logout</a></h1>
        <ul class="nav">
            <li><a href="dashboard.php">Dashboard</a></li>
            
            <li><a href="calories.php">Calories</a></li>
            
            <li><a href="exercise.php">Exercise</a></li>
            
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </div>
    <div id="weight">
    	<?php include('includes/weight_input.php'); ?>
    	<form action="dashboard.php" method="post">
        	<p>What's your weight today?</p>
            <fieldset>
	        	<input type="text" name="weight_input" id="weight_input" class="weight-input" title="Inputing your wieght on a daily basis will help track your progress" />
	           
	            <input type="hidden" value="addweight" name="addweight" />
	            <input type="submit" value="Submit" class="btn" />
            </fieldset>
            <p class="error"><?php echo $error['weight_input']; ?></p>
        </form>
    </div>
<div class="clearfix"></div>
</div>

