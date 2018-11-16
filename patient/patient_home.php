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
	<title>Patient Home</title>
	<link href="patient_home.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="animate.css">
	
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

	<script src="../jquery-3.2.0.min.js"></script>

	<style type="text/css">
					.logo h3{
						background: #000;
						background: linear-gradient(132deg, #6495ED, #DC143C);
						background-size: 400% 400%;
						animation: BackgroundGradient 20s ease infinite;
					}

					@keyframes BackgroundGradient{
						0% {background-position: 0% 50%;}
						50% {background-position: 100% 50%;}
						100% {background-position: 0% 50%;}
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
	
<body>
	<header>
	 <div class="head">
		<div class="logo rollIn animated">
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
	<div class="fadeInDown animated">
	<nav>
			<ul>
				<li><a href="patient_home.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> HOME</a></li>
				<li class="details"><a><img src="../insurance.jpg" alt="asset-img" height="20px" width="20px">PROFILE</a></li>
				<li><a href="prediction.php"><img src="../categories.jpg" alt="asset-img" height="20px" width="20px">PREDICTION</a></li>
				<li><a href="send_issues.php"><img src="../location.jpg" alt="asset-img" height="20px" width="20px">SEND ISSUES</a></li>
				<li><a href="reply_status.php"><img src="../location.jpg" alt="asset-img" height="20px" width="20px">REPLY STATUS</a></li>
				
				<li><a href="../login.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> LOG OUT</a></li>
			</ul>
	</nav>
	</div>
		<div class="handle">Menu
			<i class="icon-reorder"></i>
		</div><!--end of "handle"-->

		<div id="tab-display">
			<h1 style="color:#B22222"><marquee>Welcome  
			<?php 
				if(isset($_GET['name']))
					echo $_GET['name'];
				else
					echo $name;
			 ?></marquee></h1> 
		</div>

		<div class="patient_details hidden">

					<?php
					if(isset($_GET['name']))
					$namep= $_GET['name'];
					else
					$namep= $name;
					include '../dbconnect.php';
					$query="select *from patient where username='$namep'";
						
					$run=mysql_query($query);
					echo '<table border="1" id="myTable" cellspacing="20px">';

					while($row=mysql_fetch_array($run))
								{
									
									echo "<tr><th>firstname</th><td>".$row['firstname']."</td></tr>";
									echo "<tr><th>lastname</th><td>".$row['lastname']."</td></tr>";
									echo "<tr><th>email</th><td>".$row['email']."</td></tr>";
									echo "<tr><th>username</th><td>".$row['username']."</td></tr>";
									echo "<tr><th>password</th><td>".$row['password']."</td></tr>";
									echo "<tr><th>age</th><td>".$row['age']."</td></tr>";
									echo "<tr><th>sex</th><td>".$row['sex']."</td></tr>";
									echo "<tr><th>bloodgroup</th><td>".$row['bloodgroup']."</td></tr>";
									echo "<tr><th>disease</th><td>".$row['disease']."</td></tr>";
									echo "<tr><th>last-appointment</th><td>".$row['last-appointment']."</td>";
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
	</nav>
	

	
</body>
</html>