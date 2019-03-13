<?php
ob_start();
include('../database/dbcon.php');
require_once('../function/function_testinput.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
		 $id=test_input($_POST['id']);
		
		 $fn=test_input($_POST['firstname']);
		
		 $ln=test_input($_POST['lastname']);
		
		$pass=test_input($_POST['password']);
		$repass=test_input($_POST['repass']);
		$gender=test_input($_POST['gender']);
		$email=test_input($_POST['email']);
		$birth=test_input($_POST['date']);
		$department=test_input($_POST['department']);
	   $address=test_input($_POST['message']);
	   $user=$fn.$id;
	 
}
if(filter_var($email, FILTER_VALIDATE_EMAIL)!=TRUE)
         {
	     header("Location: ../singnup.php?error=yes");
		 die();
      }
else if($pass!=$repass)
{ header("Location: ../singnup.php?error=yess");
		 die();
}
else{
$sql="SELECT *FROM registration WHERE (user='$user' OR email='$email')";
$result=$con->query($sql);
if($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if(($row['user']==$user OR $row['email']==$user))
	{
		 header("Location: ../singnup.php?error=another");
	};	  
}
}
	  else{
		  $img="images/images.jpeg";
		  $sql="INSERT INTO registration() VALUES                   ('$user','$id','$fn','$ln','$pass','$email','$birth','$gender','$department','$address','$img')";
			if( $con->query($sql)===TRUE)
			 header("Location:../singnup.php?error=no");
		 
		 }
}

	 
 ?>
