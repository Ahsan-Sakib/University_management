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
		       <button type="button"><a href="login.php">sign in</a></button>
			   <h1><a href="index.php">Online University</a></h1>
					</header>
		<div class="maincontent">
		    <h2>Student registation form</h2>
			<div class="image-nav"><img src="graduate-member.jpg"</div>
			<div class="content">	
			<form action="Process/registration_process.php" method="POST">
			Register Id<br>
			<input type="number" name="id" required><span class="error"><?php echo $ier;?></span><br>
			 First name:<br>
            <input type="text" name="firstname" required><span class="error"><?php echo $fer;?></span><br>
             Last name:<br>
            <input type="text" name="lastname" required><span class="error"><?php echo $ler?></span><br>
			Password<br>
			<input type="password" name="password"><span class="error"><?php echo $per;?></span><br>
			Re Enter password<br>
			<input type="password" name="repass"><span class="error"><?php echo $reper?></span><br>
			Email<br>
			<input type="text" name="email"><span class="error"><?php echo $mer; ?></span><br>
			Date of Birth<br>
			<input type="date" name="date"><br>
		
			Gender<br>
		<input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
		Department<br>
		<input type="radio" name="department" value="IT" checked>IT<br>
        <input type="radio" name="department" value="cse">CSE<br>
        <input type="radio" name="department" value="ece">ECE<br>
		Address<br>
		<textarea name="message" rows="10" cols="30"></textarea>
  <br>
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
<?php

	if(isset($_GET['error']) && $_GET['error']=='yes')
			 echo '<script>alert("email not valid")</script>';
	
	else if(isset($_GET['error']) && $_GET['error']=='yess')
			 echo '<script>alert("Password not match")</script>';
	 
	else if(isset($_GET['error']) &&$_GET['error']=='no')
	{
		        $t_name=$_POST['firstname'];
				echo '<script>alert("Successful Registration")</script>';
				$connnn=new mysqli("localhost","root","12345","student");
				$sq="CREATE TABLE  $t_name (sl int(11),
  Course_no	varchar(10),
  Course_title	varchar(60),
  	letter_grade	varchar(5))";
	$connnn->query($sq);
	}
				
	 else if(isset($_GET['error']) && $_GET['error']=='another')
				
				echo '<script>alert("Use another email or ID")</script>';
	 else
	 {echo '<script>alert("")</script>';
	 }
?>