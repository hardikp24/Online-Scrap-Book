<!DOCTYPE html>
<html><head>
<title>Submit Movie Form</title>


<style type="text/css">
div.header-cont{width:100%; position:fixed; top:0px auto;}
.spotlightmenu{
width: 100%;
overflow:hidden;
}

.spotlightmenu tr{
margin-top: 0px auto;
padding-top: 0;
font: bold 18px Segoe Print; /* font style and size */
list-style-type: none;
text-align: right; /* "left", "center", or "right" align menu */
}

.spotlightmenu th{
display: inline-block;
position:relative;
padding: 5px;
margin: 0;
margin-right: 5px; /* right margin between menu items */
}


.spotlightmenu th a{
display:inline-block;
padding: 5px;
min-width:50px; /* horizontal diameter of spotlight */
height:50px; /* vertical diameter of spotlight */
text-decoration: none;
color: black;
margin: 0 auto;
overflow:hidden;
-moz-transition: all 0.5s ease-in-out; /* CSS3 transition to animate all A properties */
-webkit-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.spotlightmenu th:hover a{
color: white;
background: #a71b15; /* background color of spotlight */
-webkit-border-radius: 50%; /* large radius to create circular borders */
-moz-border-radius: 50%;
border-radius: 50%;
}

.spotlightmenu th a span{
position:relative;
top:35%; /* move text down so it appears centered within menu item */
}
div.header
{
	width:100%;
	height:65px;
	margin:0px 0px;
	border:0px solid #CCC;
	//position:fixed;
	top:0px;
	margin:0px auto;
	background-color:none;
	opacity:2.0;
	filter:alpha(opacity=40);
}
div.menu
   {	
		text-align:left;
		background-color:none;
		border:0px solid #ccc;
		position:fixed;
		height:851px auto;
		width: 250px;
		margin-top:67px;
		
   }
 div.content
  {
  //align:right;
  width:100%;
  margin:66px auto;
  border:0px solid #CCC;
  //margin-bottom:66px;
  height:1350px auto; 
  color:black;
  background:white;
  }
  div.footer
  {
	text-align:bottom auto; 
	background-color:none
	border: 0px solid #ccc;
	margin-top: auto;
	
	
  }
</style>

	</head>
	<body>
	
		<div class ="header"><center><h1 style="font-family:Harrington;color:#purple;font-size:40pt;background-color:#CC9900;">Submit Form!</h1></center></div>
			
			
	<center>
	<!--<table cellpadding="8">
				<tr align="center">	
					<div  class="spotlightmenu" style="background-color:white; margin-top:0px;">
			-->

<div class="content" style="position:inherit;"> 					
<div  class="spotlightmenu" style="background-color:white; margin-top:0px;">					
<table cellpadding="8">
				<tr align="center">
						<th class="active"><a href="homepg.php"><span>Home</span></a></th>
						<th class="active"><a href="logout.php"><span>Log Out</span></a></th>





</div>
	</table>

			
		
			<br><br><br><p style="font-family:Segoe Print;">Go Back to <a href="homepg.php">Home Page</a> else <a href="logout.php">Log OUT</a> here</p>

			<?php
	
				$con = mysql_connect("localhost","root",""); 
				mysql_select_db("hardik", $con);
					
				require'connect.php';

						if(isset($_POST['op2'])&&isset($_POST['movie1'])&&isset($_POST['movie2'])&&isset($_POST['movie3'])&&isset($_POST['movie4'])&&isset($_POST['movie5'])&&isset($_POST['actor'])&&isset($_POST['actress'])&&isset($_POST['watched1'])&&isset($_POST['watched2'])&&isset($_POST['watched3']))
						{
						   $op2=$_POST['op2'];
						   $movie1=$_POST['movie1'];
						   $movie2=$_POST['movie2'];
						   $movie3=$_POST['movie3'];
						   $movie4=$_POST['movie4'];
						   $movie5=$_POST['movie5'];
						   $actor=$_POST['actor'];
						$actress=$_POST['actress'];
						$watched1=$_POST['watched1'];
						$watched2=$_POST['watched2'];
						$watched3=$_POST['watched3'];

						        $query= "INSERT INTO `movie` VALUES ('$op2' , '$movie1' , '$movie2' , '$movie3' , '$movie4' , '$movie5' , '$actor' , '$actress' , '$watched1' , '$watched2' , '$watched3')";
						      
						        if (mysql_query($query))
						        {
						          echo 'Your data has Submitted! Thank you..';
						        } 
						        else
						        {
						          echo mysql_error();
						        }
					
			
						}

			?>

		</body> 
</html>
	
