<?php
	session_start();
	$name=$_SESSION['name'];
?>
<html>
<head>
	<title>Patient Profile</title>
	<link href="patient_home.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

	<script src="../jquery-3.2.0.min.js"></script>

	<style type="text/css">
		span a{
			color:green;
		}
		body{	background-image: url("../home2.jpg");
		}

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

	<div class="fadeInUp animated">
	<nav>
			<ul>
				<li><a href="patient_home.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> HOME</a></li>
				<li><a href="patient_profile.php"><img src="../insurance.jpg" alt="asset-img" height="20px" width="20px">PROFILE</a></li>
				<li><a href="prediction.php"><img src="../categories.jpg" alt="asset-img" height="20px" width="20px">PREDICTION</a></li>
				<li><a href="send_issues.php"><img src="../location.jpg" alt="asset-img" height="20px" width="20px">SEND ISSUES</a></li>
				<li><a href="reply_status.php"><img src="../location.jpg" alt="asset-img" height="20px" width="20px">REPLY STATUS</a></li>
				
				<li><a href="../login.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> LOG OUT</a></li>
			</ul>
		<div class="handle">Menu
			<i class="icon-reorder"></i>
		</div><!--end of "handle"-->
		</nav>
		</div>
		<div id="tab-display" class="fadeInRight animated">
			<h1>Welcome  <?php echo $name ?></h1> 
		</div>

		<div class="patient_details fadeInUpBig animated">
					<?php
					
					include '../dbconnect.php';
					$query="select *from patient where username='$name'";
						
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

			</script>

	

	
</body>
</html>