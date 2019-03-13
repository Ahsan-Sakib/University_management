<!doctype html>
<html>
<head>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body class="loginbody">
	<header>
	 <h1><a href="index.php">Online University</a></h1>
	
	</header>
	<div class="loginmain">
	<?php
	if(isset($_GET['login_error'])&&$_GET['login_error']=='yes' )
	{
		echo "WRong userid or password ";
	}
	else
	{
		echo "Stuff"."<br>";
	}
	?>
	<hr>
	<form action="stufflogin_process.php" method="POST">
	UserId:<br>
	<input type="text" name="userid" required><br>
	Password:<br>
	<input type="text" name="password" required><br>
	
	<button type="submit" class="btn btn-primary btn-lg">Submit</button>
	</form>
	<div class="footer">
	</div>
	
	</div>
	
 <footer>
 </footer>
</body>
</html>