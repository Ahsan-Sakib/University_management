<?php
include'student_home.php';
include'database/upload_db.php';
?>
<!doctype>
<html>
<head>
<title>Result</title>
<link href="css/result.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="main">
<!--start table--->
<table>
	<tr>
	   <th>Sl. No.</th>
	   <th>	Course No.</th>
	 
	</tr>
   
<?php
 if(isset($_SESSION['username'])){$tablename= $_SESSION['username'];
$sql="SELECT *From material ";//student database set table userid
$result = $connection->query($sql);
$i=1;
 if($result->num_rows >0) {
    // output data of each row Full texts	
    while($row = $result->fetch_assoc()) {
     ?>
	 <tr>
	 <td><?php echo $i++; ?></td>
	 <td><a href="<?php echo $row['location'] ?>" download><?php echo $row['name']; ?></a></td>
	 </tr>
	 <?php
    }

} else {
   echo "Nothing";
}
$connection->close();
 }
 else
 {
	 header('Location:login.php');
 }
?>
</table>
</div>
</body>
</html>