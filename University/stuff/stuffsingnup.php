<?php
$ier=$fer=$ler=$mer=$per=$reper="*";//empty and error check
?>

<!doctype html>
<html>
	<head>
	 <title></title>
	 
	<link href="css/1.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css">
	<link href="css/bootstrap-responsive.css">
	<style>
	.error
	{
		color:red;
	}
	</style>
	</head>
	<body class="body">
		<header class="mainheader">
		       <button type="button"><a href="Login.html">sign in</a></button>
			   <h1><a href="#">Online University</a></h1>
					</header>
		<div class="maincontent">
		    <h2>Stuff registation form</h2>
			
			<div class="content">	
			<form action="stuff_registration_process.php" method="POST">
			Register Id<br>
			<input type="text" name="id" required><span class="error"><?php echo $ier;?></span><br>
			Name :<br>
            <input type="text" name="name" required><span class="error"><?php echo $fer;?></span><br>
             Password :<br>
            <input type="text" name="password" required><span class="error"><?php echo $ler?></span><br>
			Email<br>
			<input type="text" name="email"><span class="error"><?php echo $mer;?></span><br>
<input type="submit" value="Submit">
			</form>
			</div>
		</div>
		</div>
		<footer class="footer">
		copyright &copy;Ahsanul Kabir
		</footer>
	</body>
</html>
