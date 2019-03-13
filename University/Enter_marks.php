<?php
include"stuff.php";
?>

 </header>
<div class="t" style="padding:100px 100px ;
	background:white;
	width:78%;
	line-height:200%;
	margin-top:50px;">
 <div class="jumbotron">
  <div class="container">
 <form action="<?php echo $_SERVER["PHP_SELF"];?>" mathod="POST" >
		Name        : <input type="text" name="name" placeholder="username" /><br>
		Course NO: <input type="text" name="cn" placeholder="course No"/><br>
		Course Title: <input type="text" name="course_title" placeholder="course title"/><br>
		Grade :       <input type="text" name="grade" placeholder="grade"/><br>
		
<input type="submit" name="submit" value="Submit" />
</form>
  </div>
</div></div>

<?php
 echo "what";
//echo $_POST['name'];
if(isset($_POST['submit']) && !empty($_POST['submit']))
{   echo "what";
	echo $name=$_POST["username"];
	$cn=$_POST['cn'];
	$ct=$_POST['course_title'];
	$grade=$_POST['grade'];
	$con=new mysqli("localhost","root","12345","student");
	$sql="SELECT *FROM $name";
    $result=$con->query($sql);
	if($result->num_rows > 0)
	{echo "what";
	while($row=$result->fetch_assoc())
	{
			if($row['Course_no']==$cn && $row['Course_title']==$ct)
		{//echo $sqlupdate1 = "UPDATE table SET commodity_quantity=$qty WHERE user='".$rows['user']."' ";
		     echo $sql1="UPDATE $name SET letter_grade=$grade WHERE $cn='".$row['Course_no']."'";
			 $con->query($sql1);
		}
		else
		{
			echo "what";
		}
	}
	
	}
}
?>