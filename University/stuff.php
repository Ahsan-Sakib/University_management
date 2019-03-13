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
#t
{
	padding:100px 100px ;
	background:red;
	width:70%;
	margin-left:50px;
	
}
</style>
</head>

<body class="body">
<header class="mainheader">
 <img src="images/logokuetpng.png">
 <nav>
 	<div id="container" ><ul >
		
 		<li><a href="index.php" class="active">Home</a></li>
		
		<li><a href="#">Attendence details</a></li>
		<li><a href="Enter_marks.php">Enter marks</a></li>
		<li><a href="course_meterial.php">update Course Materials</a></li>
	
		<?php
		if(isset($_SESSION['stuffname']))
		{
		?>
	
		<li> <a href="#"><?php echo $_SESSION['stuffname'];?></a></li>
	
		<li > <a href="logout.php">Logout</a></li>
		
		<?php	
		}
		else {?>
		<li><a href="stuff/stufflogin.php">Login</a></li>
		<li><a href="stuff/stuffsingnup.php">Signup</a></li>
		<?php } ?>
	</ul></div>
 </nav>

 </body>
 </html>
 