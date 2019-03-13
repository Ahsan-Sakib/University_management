<?php
include'student_home.php';
include'database/dbconstudent.php';
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
	   <th>Course Title</th>
	   <th>	Letter Grade</th>  
	</tr>
   
<?php
 if(isset($_SESSION['username'])){$tablename= $_SESSION['username'];
$sql="SELECT *From $tablename";//student database set table userid
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row Full texts	
    while($row = $result->fetch_assoc()) {

 echo "<tr>"."<td>".$row["sl"]."</td>"."<td>".$row["Course_no"]."</td>"."<td>".$row['Course_title']."</td>"."<td>".$row['letter_grade']."</td>"."</tr>";
    }

} else {
   echo "Nothing";
}
$con->close();
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