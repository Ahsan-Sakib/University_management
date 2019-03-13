<?php
include"dbcon.php";
$sql="CREATE TABLE registration
(
id 	int(11) ,
 first_name varchar(10),
 last_name 	varchar(10) ,
 password 	varchar(20),
 email 	varchar(30),
  date 	date ,
   	gender 	varchar(10),
	 	department 	varchar(5) 	,
		Address 	text 
 
)";
$con->query($sql);
?>