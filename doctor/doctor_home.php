<?php
	session_start();
	if(isset($_GET['name'])){
		$nameval=$_GET['name'];
		$_SESSION['name'] = $nameval;
	}
	else{
	 $name=$_SESSION['name'];
	$_SESSION['name'] = $name;
	}
?>
<html>
<head>
	<title>Doctor Home</title>
	<link href="patient_home.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../animate.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

	<script src="../jquery-3.2.0.min.js"></script>

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
						  border-top: 20px solid #3498db;
						  border-left: 20px solid #3498db;
						  
						  width: 15px;
						  height: 15px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}



		span a{
			color:green;
		}
		body{	background-image: url("../home2.jpg");
		}
		.patient_details.hidden{opacity:0;}

		#myTable {
				  border-collapse: collapse;
				  width: 25%;
				  border: 3px solid #eee;
				  font-size: 18px;
				  margin-left: 15px;


				}

				#myTable th, #myTable td {
				  text-align: left;
				  padding: 12px;
				}

				#myTable tr {
				  border-bottom: 1px solid #ddd;
				
				  color: #FFE4E1;
				}

				#myTable tr.header{
				  background-color: #008B8B;
				  color: #ADD8E6;
				}

				#myTable tr:hover {
				  background-color: #F08080;
				}
		
	</style>
</head>
	
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" style="display:none;">
	<header>
	 <div class="head">
		<div class="logo slideInLeft animated">
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
   <div class="fadeInUpBig animated">
	<nav>
			<ul>
				<li><a href="doctor_home.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> HOME</a></li>
				<li class="details"><a><img src="../insurance.jpg" alt="asset-img" height="20px" width="20px">PROFILE</a></li>
				
				<li><a href="issues.php"><img src="../location.jpg" alt="asset-img" height="20px" width="20px">ISSUES</a></li>
			
				
				<li><a href="doctor_login.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> LOG OUT</a></li>
			</ul>
		<div class="handle">Menu
			<i class="icon-reorder"></i>
		</div><!--end of "handle"-->
		</nav>
		</div>
		<div id="tab-display" class="slideInRight animated">
			<h1>Welcome  
			<?php 
				if(isset($_GET['name']))
					echo $_GET['name'];
				else
					echo $name;
			 ?></h1> 
		</div>

		<div class="patient_details hidden">
					<?php
					if(isset($_GET['name']))
					$namep= $_GET['name'];
					else
					$namep= $name;
					include '../dbconnect.php';
					$query="select *from doctor where doctorID='$namep'";
						
					$run=mysql_query($query);
					
					echo '<table id="myTable"';
					while($row=mysql_fetch_array($run))
								{
									
									echo "<tr><th>firstname</th><td>".$row['firstname']."</td></tr>";
									echo "<tr><th>lastname</th><td>".$row['lastname']."</td></tr>";
									echo "<tr><th>email</th><td>".$row['email']."</td></tr>";
									echo "<tr><th>doctorID</th><td>".$row['doctorID']."</td></tr>";
									echo "<tr><th>password</th><td>".$row['password']."</td></tr>";
									echo "<tr><th>Date Of Birth</th><td>".$row['DateOfBirth']."</td></tr>";
									echo "<tr><th>sex</th><td>".$row['sex']."</td></tr>";
									echo "<tr><th>phone</th><td>".$row['phone']."</td></tr>";
									echo "<tr><th>speciality</th><td>".$row['speciality']."</td></tr>";
									
									echo "</tr>";
								}
								echo "</table>";
			?>
		</div>
		

		<script>
				$('.handle').on('click',function(){
					$('nav ul').toggleClass('showing')
				})

				$('.details').on('click',function(){
					$('.patient_details').removeClass('hidden');
				})

			</script>
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
	</div>	
	

	
</body>
</html>