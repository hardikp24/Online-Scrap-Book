<!DOCTYPE HTML>
<html>
	<head><title> Registeration Successful!!!</title>
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
	
		<div class ="header"><center><h1 style="font-family:Harrington;color:#purple;font-size:40pt;background-color:#CC9900;">Welcome to Home Page</h1></center></div>
			
			
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
						<th class="active"><a href="aboutus.php"><span>About us</span></a></th>
						<th class="active"><a href="music.php"><span>Music</span></a></th>
						<th class="active"><a href="movie.php"><span>Movies</span></a></th>
						<th class="active"><a href="sport.php"><span>Sports</span></a></th>
						<th class="active"><a href="novel.php"><span>Novels</span></a></th>
						<th class="active"><a href="login.php"><span>Log In</span></a></th>
</div>
	</table>



<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">
			
			<div class="row">
				<center style="font-size:20px;">
						<?php
						require'connect.php';

						if(isset($_POST['name'])&&isset($_POST['loginid'])&&isset($_POST['pass']) &&isset($_POST['cpass'])&&isset($_POST['place'])&&isset($_POST['phone'])&&isset($_POST['email']))
						{
						   $name=$_POST['name'];
						   $loginid=$_POST['loginid'];
						   $pass=$_POST['pass'];
						   $cpass=$_POST['cpass'];
						   $place=$_POST['place'];
						   $phone=$_POST['phone'];
						   $email=$_POST['email'];
							

						   
						     
						        $query= "INSERT INTO `users` VALUES ('$name' , '$loginid' , '$pass' ,'$cpass', '$place' , '$phone' , '$email')";
						      
						        if (mysql_query($query))
						        {
						          echo 'Registeration Successful';
						        } 
						        else
						        {
						          echo mysql_error();
						        }

						}
						?>

				</center>
			</div>
		</div>
	</div>
</div>

<div id="footer" style="float:left;">
	<div class="3u" id="box3">
				<section>

					<p>
						<strong>Follow us on</strong>
						<br>
						<img src="Images/google+.png" width=50px;>
						<img src="Images/facebook.jpg" width=50px;>
						<img src="Images/twitter.jpg" width=50px;>
					</p>
				</section>
	</div>
</div>

<div id="footer">
		<div id="footer" style="background-color:#CC9900;text-align:center;width=100%;">

					<p style="font-family:Segoe Print;">This Site is only for the <strong>project purpose</strong><br></p></center>
			</div>

	</body>
</html>

