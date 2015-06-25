<!DOCTYPE HTML>
<html>
	<head><title> Login Page</title>

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
						<th class="active"><a href="register.php"><span>Sign In</span></a></th>
</div>
	</table>

<br><br>

</div>
<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">
			<div class="row">


				<form action="authenticateuser.php" method="POST">
					<center>
					
					<table>
					
					<tr>
						<label><td style="font-family:Segoe Print;"><strong>Login ID:</strong></td></label>
						<td><input type="text" name="loginid" placeholder="Enter your Username"></td>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>

					<tr>
						<label><td style="font-family:Segoe Print;"><strong>Password:&nbsp;&nbsp;&nbsp;&nbsp;</strong></td></label>
						<td><input type="password" name="pass" placeholder="Enter your Password"></td>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>
					<tr>
						<th></th>
						<th><input type="submit" value="Log In" class="login-submit"/></th>
					</tr>
					<tr>
						<td><br></td>
						<td><br></td>
					</tr>
					</table><br>
					</center>
				</form>

			</div>
		</div>
	</div>
</div>

<div id="footer-wrapper">
	<div class="5grid-layout">
		<div class="row" id="footer-content">
			<div class="3u" id="box3">
				<section>
					<h2>Contact Information</h2>
					<p><strong>Phone</strong>:9158482555</p>
					<p><strong>Email</strong>:hardikpatil@gmail.com</p>
					<p>&nbsp;</p>

					<p>
						<strong>Follow us on</strong>
						<br>
						<a href="https://plus.google.com/108121040583749959474/posts"><img src="Images/google+.png" width=50px;></a>
						<a href="http://facebook.com/hardikpatil444"><img src="Images/facebook.jpg" width=50px;></a>
						<a href="http://twitter.com/hardikp_24"><img src="Images/twitter.jpg" width=50px;></a>
					</p>
				</section>
			</div>
		</div>
	</div>
</div>
<div class="5grid-layout" id="copyright">
	<div class="row">
		<div class="12u">
			<center><p>DEVELOPED BY Hardik Patil</p>
				<div class="footer">
<p>This Site is only for the <strong>project purpose</strong><br>

</div>
		</div>
	</div>	
</div>
</body>
</html>