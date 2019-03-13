<?php
include"stuff.php";
include"database/upload_db.php";
?>
<html>
<head> 
	<style>
	.mainbody
		{
			padding:50px 50px;
			background:white;
			margin-top:20px;
		}
	</style>
</head>
<body>
<div class="mainbody"><?php
$target_dir = "uploads/";
$filename= basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	/*$sql="INSERT INTO course_material(location,type,visibility
	) VALUES()";*/
	$sql1="INSERT INTO material(location,type,visibility,name) VALUES('$target_file','$imageFileType','$uploadOk','$filename')";

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 

else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		if($connection->query($sql1)===TRUE)
		{
			
		}
		else
		die();

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
	else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</div>
</body>
</html>