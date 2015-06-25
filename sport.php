<!DOCTYPE HTML>
<html>
	<head><title>Sports</title>
<head><title> Sports</title>

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
	height:8px;
	margin:0px 0px;
	border:0px solid #CCC;
	//position:fixed;
	top:0px;
	margin:0px auto;
	background-color:none;
	opacity:2.0;
	filter:alpha(opacity=40);;
}
div.menu
   {	
		text-align:left;
		background-color:none;
		border:0px solid #ccc;
		position:fixed;
		height:851px auto;
		width: 250px;
		margin-top:80px;
		
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
	
	<!-- Css for Input Data-->
   .sport{
			position:absolute;
			height:350px;
			width:350px;
			padding:40px;
			z-index:100;
		}
		.sport input[type=text]{
			width:225px;
			border: 1px solid #ccc;
			-moz-border-radius:10px;
			-webkit-border-radius:10px;
			border-radius"10px;
			-moz-border-shadow:2px 2px 3px #666;
			-webkit-border-shadow:2px 2px 3px #666;
			-box-shadow2px 2px 3px #666;
			font-size:18px;
			padding:1px 2px;
			outline:0;
			-webkit-appearance: none;
			}
		
		.sport input[type=text]focus{
			border-color:#339933;
		}
		
		.sport input[type="submit"] {
			color: black;
			padding: 4px;
			width: 165px;
			height: 35px;
			border-radius: 40px;
			border: 1px;
			font-weight: bold;
			border: 1px groove #7A7A7A;
		}
		.sport input[type="submit"]:hover {
			border: 2px groove #7A7A7A;
		}
		#contact{
		padding:20px;
		margin-left:15px;
		}

</style>

	</head>
	<body>
	
		<div class ="header"><center><h1 style="font-family:Harrington;color:dark green;font-size:40pt;background-color:#006600">Welcome to Sports Section</h1></center></div>
			
			
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
						<th class="active"><a href="logout.php"><span>Sign Out</span></a></th>
</div>
	</table>		

			
		<div id="menu" style="width:100px;float:center;">
								<img src="Images/winner.jpeg" width=350px;>
		</div>
								

				<img src="Images/fifa.jpeg" align="right" width="225">

<div class="sport">
	<form action="submitSport.php" method="post">
		<center><br><br><br>
			<table>	
				<tr>
					<td style="font-family:Segoe Print;">Select Your favorite sport:
						<select name="op3">
					 		 	<option>Football</option>
								 <option>Cricket</option>
								 <option>Hocky</option>
								 <option>Tennis</option>
								 <option>F1 Formula Race</option>
								<option>Base Ball</option>
								 <option>Basket Ball</option>
								<option>Batminton</option>
								<option>Cycling</option>
								<option>Golf</option>
								<option>Volly Ball</option>
							   </select></td>
			<tr>
			<tr>
				<td><br></td>
				<td><br></td>
			</tr>
			
			<tr>
				<td style="font-family:Segoe Print;">Your favourite Sport team you follow : </td> 
				<td><input type="text" name="team" placeholder="Enter sport team"><td>
			</tr>
			<tr>
				<td><br></td>
				<td><br></td>
			</tr>

		<tr>
			<td style="font-family:Segoe Print;">Your Favourite Sport Player : </td> 
			<td><input type="text" name="player" placeholder="Enter player's name."></td>
		</tr>
		<tr>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr>
				<td style="font-family:Segoe Print;">Your favourite PC game : </td>
				<td><input type="text" name="pcgame" placeholder="Enter PC game."></td>
			</tr>
			<tr>
				<td><br></td>
				<td><br></td>
			</tr>

			<tr>
				<td style="font-family:Segoe Print;">Have you ever played at national/international level under your college/school:</td>
				<td><input type="radio" name="poll2" value="yes">YES<input type="text" name="scllgame" placeholder="Mention a sport"></td>
			</tr>
			<tr>
				<td><input type="radio" name="poll2" value="no">NO</td>
			</tr>
	
		</table>
	</center>
</form><br>
		<center><input type="submit" value="SUBMIT"></center><br>
</div>
<div id="contact" style="float:left;">
	<div class="3u" id="box3">
				<section>

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
<div id="footer">
		<img src="Images/olympic12.jpg" width=125px;>
			<div id="footer" style="background-color:#006600;text-align:center;">

					<p style="font-family:Segoe Print;">This Site is only for the <strong>project purpose</strong><br></p></center>
			</div>
</div>

	</body>
</html>

