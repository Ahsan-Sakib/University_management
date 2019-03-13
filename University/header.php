<?php
session_start();
include'database/teacher_stuff_database.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Online University</title>
<link href="images/logokuetpng.png" rel="icon">
<link href="CSS/one.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css">
<link href="css/bootstrap-responsive.min.css">
<style>


#container ul li:hover > ul
	{display:inline-block;
	}
</style>
</head>

<body class="body">
<header class="mainheader">
 <img src="images/logokuetpng.png">
 <nav>
 	<div id="container" ><ul >
		
 		<li><a href="index.php" class="active">Home</a></li>
		
		<li><a href="student.php">Student</a></li>
		<li><a href="#">Admin</a></li>
		<li><a href="stuff1.php">Stuff</a></li>
		<li><a href="facilities.php">Facilities</a></li>
		<!--<li><a href="#">Notice board</a></li>-->
		<?php
		//echo $_COOKIE['username'];
		if(isset($_SESSION['username']))
		{
		?>
		<li> <a href="#"><?php echo $_SESSION['username'];?></a></li>

		<li > <a href="logout.php">Logout</a></li>
	
		
		
		<?php	
		}
	
		
		else if(isset($_COOKIE['username']))
		{
		?>
		<li> <a href="#"><?php echo $_COOKIE['username'];?></a>	</li>
	
		<li > <a href="logout.php">Logout</a></li>
	
	
	
		
		<?php	
		}
		else if (!isset($_COOKIE['username'])){?>
		<li><a href="Login.php">Login</a></li>
		<li><a href="singnup.php">Sign up</a></li>
		<?php } ?>
	</ul></div>
 </nav>
 </header>