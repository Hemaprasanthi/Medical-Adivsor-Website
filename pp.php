
<html>
<head>
	<link href="login-css.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="admin_login_button.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Patient Login</title>

	<style type="text/css">
		/*   Loader Syling    */
					#loader {
						  position: absolute;
						  left: 50%;
						  top: 50%;
						  z-index: 1;
						  width: 100px;
						  height: 100px;
						  margin: -75px 0 0 -75px;
						  border: 16px solid #f3f3f3;
						  border-radius: 50%;
						  border-top: 16px solid #3498db;
						  border-bottom: 16px solid #3498db;
						  width: 30px;
						  height: 30px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}
	</style>

</head>
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">
	<header>
		<div class="logo fadeInDown animated">
				<a href="sam_web.html"><i class="fa fa-github-alt fa-4x"></i></a>
				<h3>Medical Management</h3>
		</div> <!-- end of "logo"-->

		<div class="social">
				<p>Follow Us</p>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/pavanpeela" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="gplus"><a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x"></i></a></li>
					<li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li class="instagram"><a href="http://www.instagram.com/pavanpeela" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="snapchat"><a href="http://www.snapchat.com" target="_blank"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
				</ul>		
				<a href="admin_login.html">Admin Login</a>		
			   
			</div><!-- end of "social"-->
	</header>

	<div class="form">
		<img src="user.jpg">
	<form method="get" action="patient/patient_home.php">
		<div class="form-input">
			Username : <input type="text" name="name" value="" placeholder="Enter Username"/>
		</div>
		<div class="form-input">
			Password  : <input type="password" name="pass" placeholder="Enter the Password"/>
		</div>
		<input type="submit" name="submit" value="Login" class="btn-login">
		<a href="SignUp.php"><input type="button" name="register" value="SignUp" class="btn-SignUp"></a>
		<a href="forget_pass.php"><p>Forget password?</p></a>

		<?php
			include('dbconnect.php');
		
		?>
	</form>	
	</div><!--end of "form"-->
	</div>

			<script type="text/javascript">
	  				/* script for loader  */
							var myVar;
							function myFun(){
								myVar = setTimeout(showPage, 1200);
							}
							function showPage(){
								document.getElementById("loader").style.display="none";
								document.getElementById("mydiv").style.display="block";
							}
	  			</script>
</body>
</html> 
<html>
<head>
	<link href="login-css.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Patient Login</title>

	<style type="text/css">
		/*   Loader Syling    */
					#loader {
						  position: absolute;
						  left: 50%;
						  top: 50%;
						  z-index: 1;
						  width: 100px;
						  height: 100px;
						  margin: -75px 0 0 -75px;
						  border: 16px solid #f3f3f3;
						  border-radius: 50%;
						  border-top: 16px solid #3498db;
						  border-bottom: 16px solid #3498db;
						  width: 30px;
						  height: 30px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}
	</style>

</head>
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">
	<header>
		<div class="logo fadeInDown animated">
				<a href="sam_web.html"><i class="fa fa-github-alt fa-4x"></i></a>
				<h3>Medical Management</h3>
		</div> <!-- end of "logo"-->

		<div class="social">
				<p>Follow Us</p>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/pavanpeela" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="gplus"><a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x"></i></a></li>
					<li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li class="instagram"><a href="http://www.instagram.com/pavanpeela" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="snapchat"><a href="http://www.snapchat.com" target="_blank"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
				</ul>		
				<a href="admin_login.html">Admin Login</a>		
			   
			</div><!-- end of "social"-->
	</header>

	<div class="form">
		<img src="user.jpg">
	<form method="get" action="patient/patient_home.php">
		<div class="form-input">
			Username : <input type="text" name="name" value="" placeholder="Enter Username"/>
		</div>
		<div class="form-input">
			Password  : <input type="password" name="pass" placeholder="Enter the Password"/>
		</div>
		<input type="submit" name="submit" value="Login" class="btn-login">
		<a href="SignUp.php"><input type="button" name="register" value="SignUp" class="btn-SignUp"></a>
		<a href="forget_pass.php"><p>Forget password?</p></a>

		<?php
			include('dbconnect.php');
		
		?>
	</form>	
	</div><!--end of "form"-->
	</div>

			<script type="text/javascript">
	  				/* script for loader  */
							var myVar;
							function myFun(){
								myVar = setTimeout(showPage, 1200);
							}
							function showPage(){
								document.getElementById("loader").style.display="none";
								document.getElementById("mydiv").style.display="block";
							}
	  			</script>
</body>
</html> 
<html>
<head>
	<link href="login-css.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Patient Login</title>

	<style type="text/css">
		/*   Loader Syling    */
					#loader {
						  position: absolute;
						  left: 50%;
						  top: 50%;
						  z-index: 1;
						  width: 100px;
						  height: 100px;
						  margin: -75px 0 0 -75px;
						  border: 16px solid #f3f3f3;
						  border-radius: 50%;
						  border-top: 16px solid #3498db;
						  border-bottom: 16px solid #3498db;
						  width: 30px;
						  height: 30px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}
	</style>

</head>
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">
	<header>
		<div class="logo fadeInDown animated">
				<a href="sam_web.html"><i class="fa fa-github-alt fa-4x"></i></a>
				<h3>Medical Management</h3>
		</div> <!-- end of "logo"-->

		<div class="social">
				<p>Follow Us</p>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/pavanpeela" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="gplus"><a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x"></i></a></li>
					<li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li class="instagram"><a href="http://www.instagram.com/pavanpeela" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="snapchat"><a href="http://www.snapchat.com" target="_blank"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
				</ul>		
				<a href="admin_login.html">Admin Login</a>		
			   
			</div><!-- end of "social"-->
	</header>

	<div class="form">
		<img src="user.jpg">
	<form method="get" action="patient/patient_home.php">
		<div class="form-input">
			Username : <input type="text" name="name" value="" placeholder="Enter Username"/>
		</div>
		<div class="form-input">
			Password  : <input type="password" name="pass" placeholder="Enter the Password"/>
		</div>
		<button class="button" type="submit"><span>LogIn </span></button>
		<a href="SignUp.php"><input type="button" name="register" value="SignUp" class="btn-SignUp"></a>
		<a href="forget_pass.php"><p>Forget password?</p></a>

		<?php
			include('dbconnect.php');
		
		?>
	</form>	
	</div><!--end of "form"-->
	</div>

			<script type="text/javascript">
	  				/* script for loader  */
							var myVar;
							function myFun(){
								myVar = setTimeout(showPage, 1200);
							}
							function showPage(){
								document.getElementById("loader").style.display="none";
								document.getElementById("mydiv").style.display="block";
							}
	  			</script>
</body>
</html> 
<html>
<head>
	<link href="login-css.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Patient Login</title>

	<style type="text/css">
		/*   Loader Syling    */
					#loader {
						  position: absolute;
						  left: 50%;
						  top: 50%;
						  z-index: 1;
						  width: 100px;
						  height: 100px;
						  margin: -75px 0 0 -75px;
						  border: 16px solid #f3f3f3;
						  border-radius: 50%;
						  border-top: 16px solid #3498db;
						  border-bottom: 16px solid #3498db;
						  width: 30px;
						  height: 30px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}
	</style>

</head>
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">
	<header>
		<div class="logo fadeInDown animated">
				<a href="sam_web.html"><i class="fa fa-github-alt fa-4x"></i></a>
				<h3>Medical Management</h3>
		</div> <!-- end of "logo"-->

		<div class="social">
				<p>Follow Us</p>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/pavanpeela" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="gplus"><a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x"></i></a></li>
					<li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li class="instagram"><a href="http://www.instagram.com/pavanpeela" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="snapchat"><a href="http://www.snapchat.com" target="_blank"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
				</ul>		
				<a href="admin_login.html">Admin Login</a>		
			   
			</div><!-- end of "social"-->
	</header>

	<div class="form">
		<img src="user.jpg">
	<form method="get" action="patient/patient_home.php">
		<div class="form-input">
			Username : <input type="text" name="name" value="" placeholder="Enter Username"/>
		</div>
		<div class="form-input">
			Password  : <input type="password" name="pass" placeholder="Enter the Password"/>
		</div>
		<input type="submit" name="submit" value="Login" class="btn-login">
		<a href="SignUp.php"><input type="button" name="register" value="SignUp" class="btn-SignUp"></a>
		<a href="forget_pass.php"><p>Forget password?</p></a>

		<?php
			include('dbconnect.php');
		
		?>
	</form>	
	</div><!--end of "form"-->
	</div>

			<script type="text/javascript">
	  				/* script for loader  */
							var myVar;
							function myFun(){
								myVar = setTimeout(showPage, 1200);
							}
							function showPage(){
								document.getElementById("loader").style.display="none";
								document.getElementById("mydiv").style.display="block";
							}
	  			</script>
</body>
</html> 
<html>
<head>
	<link href="login-css.css" rel="stylesheet">
	<link href="animate.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<title>Patient Login</title>

	<style type="text/css">
		/*   Loader Syling    */
					#loader {
						  position: absolute;
						  left: 50%;
						  top: 50%;
						  z-index: 1;
						  width: 100px;
						  height: 100px;
						  margin: -75px 0 0 -75px;
						  border: 16px solid #f3f3f3;
						  border-radius: 50%;
						  border-top: 16px solid #3498db;
						  border-bottom: 16px solid #3498db;
						  width: 30px;
						  height: 30px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}
	</style>

</head>
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">
	<header>
		<div class="logo fadeInDown animated">
				<a href="sam_web.html"><i class="fa fa-github-alt fa-4x"></i></a>
				<h3>Medical Management</h3>
		</div> <!-- end of "logo"-->

		<div class="social">
				<p>Follow Us</p>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/pavanpeela" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="gplus"><a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x"></i></a></li>
					<li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li class="instagram"><a href="http://www.instagram.com/pavanpeela" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="snapchat"><a href="http://www.snapchat.com" target="_blank"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
				</ul>		
				<a href="admin_login.html">Admin Login</a>		
			   
			</div><!-- end of "social"-->
	</header>

	<div class="form">
		<img src="user.jpg">
	<form method="get" action="patient/patient_home.php">
		<div class="form-input">
			Username : <input type="text" name="name" value="" placeholder="Enter Username"/>
		</div>
		<div class="form-input">
			Password  : <input type="password" name="pass" placeholder="Enter the Password"/>
		</div>
		<button class="button" type="submit"><span>Log In </span></button>
		<a href="SignUp.php"><input type="button" name="register" value="SignUp" class="btn-SignUp"></a>
		<a href="forget_pass.php"><p>Forget password?</p></a>

		<?php
			include('dbconnect.php');
		
		?>
	</form>	
	</div><!--end of "form"-->
	</div>

			<script type="text/javascript">
	  				/* script for loader  */
							var myVar;
							function myFun(){
								myVar = setTimeout(showPage, 1000);
							}
							function showPage(){
								document.getElementById("loader").style.display="none";
								document.getElementById("mydiv").style.display="block";
							}
	  			</script>
</body>
</html> 