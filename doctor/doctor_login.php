<html>
	<head>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../main.css">
		<link rel="stylesheet" type="text/css" href="../animate.css">
		<title>Doctor Login</title>

		<style type="text/css">
				body{
				background: none;
				background: linear-gradient(132deg, #ec5218, #1665c1);
				background-size: 400% 400%;
				animation: BackgroundGradient 10s ease infinite;
			}

			@keyframes BackgroundGradient{
				0% {background-position: 0% 50%;}
				50% {background-position: 100% 50%;}
				100% {background-position: 0% 50%;}
			}
			.form{
				position: absolute;
				margin-top: 200px;
				margin-left: 500px;
			}
			.btn-login{
				height:35px;
				width:130px;
				margin-left: 70px;
			}
			.logo{
				max-width: 100%;
			}
		</style>
	</head>
<body>
	<!--<i class="icon-camera-retro"></i> icon-camera-retro-->

	<header>
		<div class="logo rotateInUpRight animated">
				<i class="icon-github-alt icon-4x"></i></a>
				<h3><marquee>Doctor Private Login</marquee></h3>
		</div> <!-- end of "logo"-->

	</header>

	<div class="form fadeInUpBig animated">
	<form method="get" action="doctor_home.php">
		
			<label>Username : </label><input type="text" name="name" required /><br><br>
			<label>Password  : </label><input type="password" name="pass" required /><br><br>
			<input type="submit" name="submit" value="Login" class="btn-login">
			
	</div><!--end of "form"-->

	</form>
</body>
</html> 