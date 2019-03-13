<?php
include"student_home.php";
include"database/dbcon.php";
 ?>
<!DOCTYPE >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
<link href="css/profile.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="mainbody">
		<div class="top">
				<div class="topbutton" >
		
					<a href="#">Edit</a>
				
				</div>
		
			<div class="top_right">
				<div class="photo">
				
				photo
				
				</div>
			<form action="" method="post" enctype="multipart/form-data">
			 <input type="file" name="fileToUpload" id="fileToUpload"><br>
			<input type="submit" value="Upload " name="submit1">
			 </form>
			
		   </div>	
		</div>
	
		<div class="bottom">
		<form action="" method="POST">
			
			 First name:<br>
            <input type="text" name="firstname" ><span class="error"></span><br>
             Last name:<br>
            <input type="text" name="lastname" ><br>
			Email<br>
			<input type="text" name="email"><span class="error"></span><br>
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
<input type="submit" value="Submit" name="submit">
			</form>
		</div>
		
</div>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{         

          echo $fn=$_POST['firstname'];
          $ln=$_SESSION['lastname'];
		  $email=$_POST['email'];
         echo  $nam=$_SESSION['username'];
		  $g=$_POST['gender'];
		  $b=$_POST['date'];
		  $d=$_POST['department'];
		  $add=$_POST['message'];
	   
		    $sql="UPDATE registration set address='$add',first_name='$fn',last_name='$ln',email='$email',
date='$b',
gender='$g',
department='$d',
Address='$add' WHERE first_name='$nam'";
            $con->query($sql);
}
?>
<?php


if(isset($_POST['submit1']))
{
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo '<script>alert("File is not an image.")</script>';
		   // echo ".";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	/*if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}*/
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		
		echo '<script>alert("Sorry, your file is too large.")</script>';
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
	   
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo '<script>alert("Sorry, your file was not uploaded.")</script>';
	
	   // echo "";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			
		$nam=$_SESSION['username'];
			$img=$target_file;
				$sql="UPDATE registration set photo='$img' WHERE first_name='$nam'";
		$con->query($sql);
		header('Location:profile.php');
		echo '<script>alert("Successful")</script>';
		
		} else {
	echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
	
		   
		}
	}
}
?>