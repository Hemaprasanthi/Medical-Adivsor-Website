<?php
// Turn off all error reporting
//error_reporting(0);
?>
<html>
	<head>
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="patient_sighUp.css">
		<link rel="stylesheet" type="text/css" href="animate.css">

		<title>Patient Register Page</title>

		<style type="text/css">
				body{
						background: none;
						background: linear-gradient(132deg, #6495ED, #DC143C);
						background-size: 400% 400%;
						animation: BackgroundGradient 20s ease infinite;
					}

					@keyframes BackgroundGradient{
						0% {background-position: 0% 50%;}
						50% {background-position: 100% 50%;}
						100% {background-position: 0% 50%;}
					}

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
						.logo h3{color:#FF7F50;}

		</style>
	</head>

<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">

<?php
	include('dbconnect.php');
	$first_name=$last_name=$middle_name=" ";
	$email=$username=$password=$re_password=$org_no=" ";

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {

   //if($_POST['SignUP']=='SignUP'){
			$first_name=$_POST["first_name"];
			$last_name=$_POST['last_name'];
			$email=$_POST['email'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$age=$_POST['age'];
			$sex=$_POST['sex'];
			$blood_group=$_POST['blood_group'];

			 $query="insert into patient (firstname, lastname,email, username, password,age,sex,bloodgroup) values ('".$first_name."','".$last_name."', '".$email."', '".$username."', '".$password."','".$age."','".$sex."','".$blood_group."');";

			$run=mysql_query($query);
			if(!$run){
				echo "record cannot be inserted";
			}
			else
			{
				echo "record inserted";
			}
	 //}
	}


?>
		<header>
		<div class="logo ">
				<a href="MainPage.php"><i class="fa fa-github-alt fa-4x rollIn animated"></i></a>
				<h3 class="rollIn animated"><marquee>Patient Registration</marquee></h3>
		</div> <!-- end of "logo"-->

		<div class="social bounceInRight animated">
				<p>Follow Us</p>
				<ul>
					<li class="facebook"><a href="http://www.facebook.com/pavanpeela" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
					<li class="gplus"><a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus-official fa-2x"></i></a></li>
					<li class="twitter"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a></li>
					<li class="linkedin"><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
					<li class="instagram"><a href="http://www.instagram.com/pavanpeela" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li class="snapchat"><a href="http://www.snapchat.com" target="_blank"><i class="fa fa-snapchat-square fa-2x"></i></a></li>
				</ul>				
			   
			</div><!-- end of "social"-->
	</header>

	<div class="form fadeInUp animated 1s">
		<img src="sign1.jpg">
		<form method="post"><br>
		  <div class="form-input">
			<label>FirstName :</label> <input type="text" name="first_name" placeholder="Enter your firstname"/><br>
			
			<label>LastName :</label>  <input type="text" name="last_name" placeholder="Enter your lastname"/><br>
			<label>Email :</label> <input type="text" name="email" placeholder="Enter your mail id"/><br>
			<label>UserName :</label> <input type="text" name="username" placeholder="Choose a user name"/><br>
			<label>Password :</label> <input type="password" name="password" placeholder="Enter a password"/><br>
			<label>Re-Type Password :</label> <input type="password" name="re_password" placeholder="Re-Enter the password"/><br>
			<label>Age :</label> <input type="text" name="age" placeholder="Enter your Age"/><br>
			<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br>			<label>Sex :</label> 
					<input type="radio" name="sex" value="Male"> Male
					<input type="radio" name="sex" value="Female"> Female  	<br><br><br><br><br><br><br>
			<label>Blood Group :</label> 
					<input type="radio" name="blood_group" value="A+"> A+
					<input type="radio" name="blood_group" value="A-"> A-
					<input type="radio" name="blood_group" value="B+"> B+
					<input type="radio" name="blood_group" value="B-"> B-<br>
					<input type="radio" name="blood_group" value="AB+"> AB+
					<input type="radio" name="blood_group" value="AB-"> AB-
					<input type="radio" name="blood_group" value="O+"> O+
					<input type="radio" name="blood_group" value="O-"> O-
			-->
			<label>Sex :</label>
						<select name="sex">
							<option value="not specified">--Select Gender--</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>

			<label>Blood Group :</label>
						<select name="blood_group">
							<option value="not specified">--Select Blood Group--</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
		  </div>
		  <input type="submit" name="SignUp" value="SignUp">
		</form>
		</div>

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