<?php
session_start();
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
		
		
		<li><a href="result.php">Result</a></li>
		<li><a href="cms.php">Course Materials</a></li>
		<li><a href="#">Online Exam</a></li>
	
		<?php
		if(isset($_SESSION['username']))
		{
		?>
		<li> <a href="profile.php"><?php echo $_SESSION['username'];?></a></li>
		<li > <a href="logout.php">Logout</a></li>
		<?php	
		}
		else {?>
		<li><a href="Login.php">Login</a></li>
		<li><a href="singnup.php">Sign up</a></li>
		<?php } ?>
	</ul></div>
 </nav>
 </header>
 </body>
 </html>
 