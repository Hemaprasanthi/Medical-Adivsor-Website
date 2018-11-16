
<?php
	session_start();
	$nameval=$_SESSION['name'];
?>

<html>
<head>
	<title>Doctor - Patient Issues </title>
	<link href="patient_home.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="../animate.css">
	<link rel="stylesheet" type="text/css" href="../admin_login_button.css">
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
						  border-top: 16px solid #3498db;
						  border-bottom: 16px solid #3498db;
						  width: 15px;
						  height: 15px;
						  animation: spin 2s linear infinite;
						}
						@keyframes spin {
							  0% { transform: rotate(0deg); }
							  100% { transform: rotate(360deg); }
							}
						button{
							background-color: #f4511e;
							border: none;
							color: #FFFFFF;
							text-align: center;
							cursor: pointer;
						}
		span a{
			color:green;
		}
		body{	background-image: url("../home2.jpg");
		}
		
		
	</style>
</head>
	
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" style="display:none;">
	<header>
	 <div class="head">
		<div class="logo bounceInRight animated">
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

	<div class="fadeInDownBig animated">
		<nav>
			<ul>
				<li><a href="doctor_home.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> HOME</a></li>
				<li><a href="doctor_profile.php"><img src="../insurance.jpg" alt="asset-img" height="20px" width="20px">PROFILE</a></li>
				
				<li><a href="issues.php"><img src="../location.jpg" alt="asset-img" height="20px" width="20px">ISSUES</a></li>
			
				
				<li><a href="doctor_login.php"><img src="../asset.jpg" alt="asset-img" height="20px" width="20px"> LOG OUT</a></li>
			</ul>
		<div class="handle">Menu
			<i class="icon-reorder"></i>
		</div><!--end of "handle"-->
		</nav>
		</div>

		<div id="tab-display" class="slideInRight animated">
		 <h1>Welcome  <?php echo $nameval ?></h1>
		</div>

		<script>
				$('.handle').on('click',function(){
					$('nav ul').toggleClass('showing')
				})
			</script>
	</nav>

	<div class="form fadeInUp animated">
		<?php
			include('../dbconnect.php');

				if(isset($_GET['del'])){
								$del_id=$_GET['del'];

							$query="select *from issues where sno = '$del_id'";
							$run=mysql_query($query);
								$row=mysql_fetch_array($run);
		?>

		<form method="post">
				<label>Name :</label> &nbsp;&nbsp;<?php echo $row['name']; ?><br>
				<label>Organ :</label>&nbsp;&nbsp; <?php echo $row['organ']; ?><br>
				<label>Description :</label>&nbsp;&nbsp; <?php echo $row['description']; ?><br>
				 <textarea name="prec" placeholder="Enter the precautions to be taken.."></textarea><br>
				<button class="button" type="submit"><span>SEND </span></button>
		</form>
			
			<?php		
					$prec="";
					$prec=$_POST['prec'];

				if ($_SERVER["REQUEST_METHOD"] == "POST") 
  				{
						 $run1=mysql_query("insert into issues_rect(name,organ,description,precautions) values ('".$row['name']."','".$row['organ']."','".$row['description']."','".$prec."')");
						if(!$run1){
							echo  'cannot inset issues_rect';
						}
						else{
						    echo 'inserted issues_rect';
							$query2="update issues SET status='Yes' where sno = '$del_id'";
							$run2=mysql_query($query2);
							if(!$run2){
								echo 'Not Updated record in issues';
							}
							else echo 'Updated record in issues (Sent to Patient)';					
						}
				}


			}

		

			
		?>
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