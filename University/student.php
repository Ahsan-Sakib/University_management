<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Online University</title>
<link href="images/logokuetpng.png" rel="icon">
<link href="CSS/one.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css">
<link href="css/bootstrap-responsive.min.css">
<link href="css/student.css" rel="stylesheet" type="text/css">
<style>

.container
{
	margin-top:50px;
}
#container ul li:hover > ul
	{
			display:inline-block;
	}
</style>
</head>

<body class="body">
<header class="mainheader">
 <img src="images/logokuetpng.png">
 <nav>
 	<div id="container" ><ul >
		
 		<li><a href="index.php" class="active">Home</a></li>
		
		<!--<li><a href="#">Attendence details</a></li>-->
		<li><a href="result.php">Result</a></li>
		<li><a href="cms.php">Course Materials</a></li>
		<li><a href="#">Online Exam</a></li>
	
		<?php
		if(isset($_SESSION['username']))
		{
		?>
		<li> <a href="profile.php"><?php echo $_SESSION['username'];?></a></li>
		<li > <a href="logout.php">Logout</a></li>
		<?php	
		}
		else {?>
		<li><a href="Login.php">Login</a></li>
		<li><a href="singnup.php">Sign up</a></li>
		<?php } ?>
	</ul></div>
 </nav>
 </header>
 


<h2>Courses</h2>

    <!DOCTYPE html>

    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>PHP Live MySQL Database Search</title>

    <style type="text/css">

        body{

            font-family: Arail, sans-serif;

        }

        /* Formatting search box */

        .search-box{

            width: 300px;

            position: relative;

            display: inline-block;

            font-size: 14px;

        }

        .search-box input[type="text"]{

            height: 32px;

            padding: 5px 10px;

            border: 1px solid #CCCCCC;

            font-size: 14px;

        }

        .result{

            position: absolute;        

            z-index: 999;

            top: 100%;

            left: 0;

        }

        .search-box input[type="text"], .result{

            width: 100%;

            box-sizing: border-box;

        }

        /* Formatting result items */

        .result p{

            margin: 0;

            padding: 7px 10px;

            border: 1px solid #CCCCCC;

            border-top: none;

            cursor: pointer;

        }

        .result p:hover{

            background: #f2f2f2;

        }

    </style>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function(){

        $('.search-box input[type="text"]').on("keyup input", function(){

            /* Get input value on change */

            var inputVal = $(this).val();

            var resultDropdown = $(this).siblings(".result");

            if(inputVal.length){

                $.get("livesearch.php", {term: inputVal}).done(function(data){

                    // Display the returned data in browser

                    resultDropdown.html(data);

                });

            } else{

                resultDropdown.empty();

            }

        });

        

        // Set search input value on click of result item

        $(document).on("click", ".result p", function(){

            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());

            $(this).parent(".result").empty();

        });

    });

    </script>

    </head>

    <body>

        <div class="search-box">

            <input type="text" autocomplete="off" placeholder="Search course" />

            <div class="result"></div>

        </div>

    </body>

    </html>

 
<div class="container">
  <img src="images/html.png" alt="Phython" class="image">
  <div class="overlay">
    <div class="text"><a href="html_course.php">HTML</a></div>
  </div>
</div>
<div class="container">
  <img src="images/ml.jpeg" alt="Phython" class="image">
  <div class="overlay">
    <div class="text">Machine Learning</div>
  </div>
</div>
<div class="container">
  <img src="images/index.png" alt="Phython" class="image">
  <div class="overlay">
    <div class="text">PHP</div>
  </div>
</div>
<div class="container">
  <img src="images/python.png" alt="Phython" class="image">
  <div class="overlay">
    <div class="text">Phython</div>
  </div>
</div>
 

 
 </body>
 </html>
 