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
	?>
	<form action="Process/login_process.php" method="POST">
	UserId:<br>
	<input type="text" name="userid" required><br>
	Password:<br>
	<input type="password" name="password" required><br>
	
	<button type="submit" class="btn btn-primary btn-lg">Submit</button>
	<input type="checkbox" name="checkbox"><span style="font-size:15px;"> Keep me logged in</span></br><br>
	</form>
	<div class="footer">
	</div>
	
	</div>
	
 <footer>
 </footer>
</body>
</html>