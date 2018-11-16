<?php
	session_start();
	if(isset($_GET['name'])){
		$nameval=$_GET['name'];
		$_SESSION['name'] = $nameval;
	}
	else{
	 $nameval=$_SESSION['name'];
	}
?>

<html>
<head>
	<title>Admin Home</title>
	<link href="admin_home.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">

	<script src="jquery-3.2.0.min.js"></script>

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



	body{color:#fff;}
		span a{
			color:green;
		}
		body{	background-image: url("home2.jpg");
		}

	</style>
</head>
	
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" class="fadeIn animated" style="display:none;">
				<header>
				 <div class="head">
					<div class="logo">
							<a href="admin_home.php"><i class="fa fa-github-alt fa-4x"></i></a>
							<h3>Medical Expert System</h3>
					</div> <!-- end of "logo"-->

					<div class="logo-right">
						<div class="chat">
						 	<a href="support.php"><i class="fa fa-comments-o">Support</i></a>
						</div><!--end of "chat"-->

						<div class="phone">
						 <ul>
							<li><i class="fa fa-phone"></i></li>
							<li>(891-250-3270)</li>
						 </ul>
						 <!--<span><a href="home_user.php" target="_blank">User View</a></span>-->
						</div><!--end of "phone-->

					</div><!--end of "logo-right"-->
				 </div><!--end of "head"-->
				</header>

				<nav>
						<ul>
							<li><a href="admin_home.php"><img src="asset.jpg" alt="asset-img" height="20px" width="20px"> HOME</a></li>
							<li><a href="regForm/doctor_reg.php" target="_blank"><img src="insurance.jpg" alt="asset-img" height="20px" width="20px">DOCTOR REGISTRATION</a></li>
							<li><a href="admin_doctor_details.php"><img src="categories.jpg" alt="asset-img" height="20px" width="20px">DOCTOR DETAILS</a></li>
							<li><a href="admin_patient_details.php"><img src="location.jpg" alt="asset-img" height="20px" width="20px">PATIENT DETAILS</a></li>
							
							<li><a href="admin_login.html"><img src="asset.jpg" alt="asset-img" height="20px" width="20px"> LOG OUT</a></li>
						</ul>
					<div class="handle">Menu
						<i class="icon-reorder"></i>
					</div><!--end of "handle"-->

					<div id="tab-display">
				<h1>Welcome  <?php echo $nameval; ?></h1>
				</div>

					<script>
							$('.handle').on('click',function(){
								$('nav ul').toggleClass('showing')
							})

						
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
				</nav>
		</div>

	
</body>
</html>