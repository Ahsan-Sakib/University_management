<?php
include"student_home.php";
$conne=new mysqli("localhost","root","12345","university");
 $nam=$_SESSION['username'];
$sql="SELECT *FROM registration WHERE first_name='$nam'";
 $result=$conne->query($sql);

 ?>
<!DOCTYPE >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
<link href="css/profile.css" type="text/css" rel="stylesheet" />
<style>
.head
{
	color:#63C;
	text-align:justify;
	text-justify:auto;
	font-size:18px;

}
</style>
</head>

<body>
<div class="mainbody">
		<div class="top">
				<div class="topbutton" >
		
					<a href="Profile_edit.php">Edit</a>
				
				</div>
		<?php	if($result-> num_rows > 0)
{
 while($row=$result->fetch_assoc())
 {?>
			<div class="top_right">
				<div class="">
				<?php if(empty($row['photo'])){ ?>
				
				<img src="images/menu_hover.jpg">
				<?php } else {?>
				<img src="<?php echo $row['photo'];?>" alt="profile photo"height="150" width="150">
				<?php  }?>
				</div>
			
			 
		   </div>	
		</div>
	
		<div class="bottom">
	
	    <span class="head">Full name :</span><?php echo $row['first_name']." ".$row['last_name'];?><br>
	    <span class="head"> Email :</span><?php echo $row['email'];?><br>
		<span class="head">Birth date :</span><?php echo $row['date'];?><br>
		<span class="head">Gender :</span> <?php echo $row['gender']; ?><br> 
		<span class="head">Department :  </span>  <?php echo $row['department']; ?><br>
		<span class="head">Address :</span><?php echo $row['Address'];?><br>
		
		
		<?php		 }
}
 ?>

	
		</div>
		
</div>
    
</body>
</html>