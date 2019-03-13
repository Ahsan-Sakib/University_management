<?php
session_start();
include('../database/dbcon.php');
$user=$_POST['userid'];
$pass=($_POST['password']);
$sql="SELECT *FROM stuff_registration WHERE (user='$user' OR email='$user') AND password='$pass'";
$result=$con->query($sql);
if($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if(($row['user']==$user OR $row['email']=$user)
	AND $row['password']==$pass)
	{
		$_SESSION['stuffname']=$row['name'];
		header("Location: ../stuff_home.php");
	
	}
}
}
else
{
	header("Location:stufflogin.php?login_error=yes");
}



?>