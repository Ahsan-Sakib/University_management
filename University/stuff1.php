<?php
if(isset($_SESSION['stuffname']))
		{
			header("Location:stuff_home.php");
			
		}
		else
		{
			header("Location:stuff\stufflogin.php");
		}
		
		?>