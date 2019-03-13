<?php
session_start();
session_destroy();
 setcookie( "username",$ses, time()-60*60*24*100);
 setcookie( "password",$pass, time()-60*60*24*100);
header("Location:index.php");
?>