<?php
ob_start();
include('../database/dbcon.php');
require_once('../function/function_testinput.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
		 $id=test_input($_POST['id']);
		
		$name=test_input($_POST['name']);
		
		
		$pass=md5(test_input($_POST['password']));
		
		$email=test_input($_POST['email']);
		
}
 $sql="INSERT INTO stuff_registration() VALUES ('$id','$name','$pass','$email')";
		if( $con->query($sql)===TRUE)
		 header("Location:stufflogin.php");
 ?>

