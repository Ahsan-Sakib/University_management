<?php
session_start();
include('../database/dbcon.php');
$user=$_POST['userid'];
$pass=$_POST['password'];
$sql="SELECT *FROM registration WHERE (user='$user' OR email='$user') AND password='$pass'";
$result=$con->query($sql);
if($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if(($row['user']==$user OR $row['email']=$user)
	AND $row['password']==$pass)
	{    $_SESSION['username']=$row['first_name'];
		$ses = $_SESSION['username'];
			$pass= $_SESSION['password'];
			
			    $_SESSION['checkbox']  =  $_POST['checkbox'];
			
			if (isset($_POST['checkbox'])) 
            {                
                 setcookie( "username",$ses, time()+60*60*24*100);
                 setcookie( "password",$pass, time()+60*60*24*100);
				header("Location: ../index.php?check=yes");
				break; 
            }  
			
		//$_SESSION['username']=$row['first_name'];
		header("Location: ../index.php");
	
	}
}
}
else
{
	header("Location: ../login.php?login_error=yes");
}



?>