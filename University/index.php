<?php include"header.php";?>
 <div class="maincontent">
 	<div class="content">
		<article class="topcontent" style="background:#309; color:#fff">
		 <h2>First </h2>
 <?php
 
 $first="SELECT *from message";
 $result=$con->query($first);
 $max=1;
 if($result->num_rows>0)
 {
	 while($row = $result->fetch_assoc())
	 {
		 if($row['Serial']>$max)
		 $max=$row['Serial'];
	 }
 }
 
 $first="SELECT *from message where Serial=$max";
 $result=$con->query($first);
 $row=$result->fetch_assoc();
 echo $row['Message'];

	?>		 
			<footer>
			<?php
			
			echo $row['date']; 
			?>
			
			 </footer>
		</article>
	</div>
 </div>
 
 	<aside class="middle-sidebar">
 		<article>
			<h2>message </h2>
			<p><marquee width="100%" direction="up"  onmouseover="this.stop();" onMouseOut="this.start();"
  height="-7px"bgcolor="#E6E6FA" scrollamount="5" loop="-1" margin-bottom="-20px" >
 <br>
 <br />

    <br>
			<?php
			$mess="SELECT *from notice";
            $result1=$con->query($mess);
			if($result1->num_rows>0)
 {
	 while($row = $result1->fetch_assoc())
	 {
		 echo $row['statement']."<br>".$row['date']."<br>";
	 }
 }
 else
 {
 echo "No news";
 }
	?>		
			</p>
			</marquee>

		</article>
 	</aside>
	<aside class="bottom-sidebar">
 		<article>
			<h2>Links</h2>
			<p>28.02.2017_Bus Schedule from 1 March, 2017 until next notice ..
19.02.2017_Online Course Registration notice for the 2nd Year 1st ..
03.01.2017_Course Registration and fees details for the postgradua ..
15.12.2016_Selected Candidates for Post-graduate admission for the ..</p>

		</article>
 	</aside>
	
	
</body>
</html>
