<!DOCTYPE HTML>
<html>
	<head>
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
						
</div>
	</table>




<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">	
			<div class="row">
						
					<?php
@					session_start();
					require 'connect.php';

					if(empty($_SESSION['loginid']))
					{
						if(isset($_POST['loginid'])&&isset($_POST['pass']))
						{

							$loginid=$_POST['loginid'];
							$pass=$_POST['pass'];

							$query="SELECT `loginid` , `pass` FROM `users` 
									WHERE `loginid`='$loginid' 
									and `pass`='$pass'";
										
							if($query_run=mysql_query($query))
							{
								if(mysql_num_rows($query_run)==0)
								{
									echo 
										'
											<form action="authenticateuser.php" method="POST" >
												<center>
															
												<table>
													<tr>
														<label><td>Login ID:</td></label>
														<td><input type="text" name="loginid" placeholder="Enter your Username"></td>
													</tr>
													<tr>
													<td><br></td>
													<td><br></td>
													</tr>

													<tr>
														<label><td>Password:&nbsp;&nbsp;&nbsp;&nbsp;</td></label>
														<td><input type="password" name="pass" placeholder="Enter tour Password"></td>
													</tr>
													<tr>
													<td><br></td>
													<td><br></td>
													</tr>
													<tr>
														<th></th>
														<th width=""><input type="submit" name="submit" class="login-submit"/>
													</tr>
													<tr>
													<td><br></td>
													<td><br></td>
													</tr>
												</table><br>
												Please Enter Valid Login-ID And Password 
											</form>
										';	
								}
								else
								{	
									$_SESSION['loginid']=$loginid;
									echo '<strong style="font-size:20px;">Welcome '.$loginid.'</strong><br><br>';

									admin($loginid);
									
									echo '<a href="logout.php"><br><br>Logout</a>';
								}
							}
							else
							{
								echo mysql_error();
							}
						}
					}
					else
					{
						echo '<strong style="font-size:20px;">Welcome '.$_SESSION['loginid'].'</strong>';			
						
						@admin($loginid);
						
						echo '<a href="logout.php"><br><br>Logout</a>';
					}

					function admin($login)
					{
						if(@mysql_num_rows(mysql_query("SELECT `login` FROM `admins` WHERE '$login' = `login` "))==1)
							echo '<a style="clear" href="adminnewrest.php"><br><br>Verify Newly Added Restuarants</a>';
						else
							echo '<a href="home.php"><br><br>Thanks for visiting</a>';
					}	
					?>


					
				
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
					<p style="font-size:20px;"><strong>Phone</strong>:9158482555</p>
					<p style="font-size:20px;"><strong>Email</strong>:hardik.patil2494@gmail.com</p>
					<p>&nbsp;</p>
					
					<br>
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
</body>
</html>