<?php
//session_start();
//database
$conn=new mysqli("localhost","root","12345","student");
$sql="SELECT *FROM meal";
$result=$conn->query($sql);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $to=$row['to'];
	   $from=$row['from'];
    }
} else {
   // echo "0 results";
}

//date from to delevary
$timestam = strtotime($to);
$tod=date("Y-m-j", $timestam);
$timesta= strtotime($from);
$frd=date("Y-m-j", $timesta);

date_default_timezone_set('Asia/Tokyo');
  
// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}
  
// Check format
$timestamp = strtotime($ym,"-01");
if ($timestamp === false) {
    $timestamp = time();
}
  
// Today
$today = date('Y-m-j', time());
//echo $today;  
// For H3 title
$html_title = date('Y / m', $timestamp);
  
// Create prev & next month link     mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
  
// Number of days in the month
$day_count = date('t', $timestamp);
  
// 0:Sun 1:Mon 2:Tue ...
$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
  
  
// Create Calendar!!
$weeks = array();
$week = '';
  
// Add empty cell
$week .= str_repeat('<td></td>', $str);
  
for ( $day = 1; $day <= $day_count; $day++, $str++) {
     
    $date = $ym.'-'.$day;
  //echo $tod;
    if ($date == $today) 
	{
        $week .= '<td class="today">'.$day;
	
	
    }
	else if($date>=$frd && $date<=$tod)
	{
		if(date("d", $timestam)>=$day && date("d", $timesta)<=$day)
		 $week .= '<td class="mloff">'.$day;
		else
		  $week .= '<td class="all">'.$day;
	}
	 else {
        $week .= '<td class="all">'.$day;
    }
    $week .= '</td>';
     
    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
         
        if($day == $day_count) {
            // Add empty cell
            $week .= str_repeat('<td></td>', 6 - ($str % 7));
        }
         
        $weeks[] = '<tr>'.$week.'</tr>';
         
        // Prepare for new week
        $week = '';
         
    }
  
}
  
?>




<style>
.container
{
	padding:100px 100px;
	background:#06F;
	width:20%;
	font-family:"Arial Black", Gadget, sans-serif;
	margin-top:80px;
	color:#000;
}
table 
{
	background:#906;
	border-radius: 20px solid black;
}
th
{
	
	background-color:#9F6;
	hight:30px;
	text-align:center;
	
}
td
{
	hight:30px;
	text-align:center;

}
.today
{
	background:#CF3;
}
.mloff
{
	background:#666;
}
.all
{
	background:#CCC
}
  th:nth-of-type(7),td:nth-of-type(7) {
            color: blue;
        }
        th:nth-of-type(1),td:nth-of-type(1) {
            color: red;
        }
</style>

	
	 <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        <br>
	<table class="table table-bordered">
		<tr>
			<th width="40">S</th>
			<th width="40">S</th>
			<th width="40">M</th>
			<th width="40">T</th>
			<th width="40">T</th>
			<th width="40">W</th>
			<th width="40">F</th>
		</tr>
		
		 <?php
                foreach ($weeks as $week) {
                    echo $week;
                }  
            ?>
	</table>
	
