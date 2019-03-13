<?php
include"stuff.php";
?>
<!DOCTYPE html>
<html>
<head>
		<style>
		.mainform
		{
			padding:50px 50px;
			background:white;
			margin-top:20px;
		}
		</style>
</head>
<body>

<div class="mainform"><form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload " name="submit">
</form></div>

</body>
</html>
