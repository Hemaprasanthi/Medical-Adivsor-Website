<?php
	session_start();
	$nameval=$_SESSION['name'];
?>

<html>
<head>
	<title>Reply Status</title>
	<link href="patient_home.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="form.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="../table-css.css">
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
		

		span a{
			color:green;
		}
		body{	background-image: url("../home2.jpg");
		}

		.result{
			margin-left: 350px;
			margin-top: 20px;
		}
		#myTable{
			margin-top: 30px;
			margin-left: 400px;
		}
		
	</style>
</head>
	
<body onload="myFun()">
	<div id="loader"></div>
			<div id="mydiv" style="display:none;">
	<header>
	 <div class="head">
		<div class="logo bounceIn animated">
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
			<h1>Welcome  <?php echo $nameval ?></h1> 
		</div>		

		<script>
				$('.handle').on('click',function(){
					$('nav ul').toggleClass('showing')
				})
			</script>
			
		   <div class="fadeInUpBig animated">
			<?php
				include('../dbconnect.php');
					
					 $query="select *from issues_rect where name='$nameval';";
					$run=mysql_query($query);
					if(!$run){
						echo 'Cannot run query';
					}
					
					if(mysql_num_rows($run)>0){
							echo '<table width="100%" border="1" id="myTable">
										<tr class="header">
										<th>Sno</th>
										<th>name</th>
										<th>organ</th>
										<th>description</th>
										<th>precautions</th>
									</tr>
								';
							$p=1;
							while($row=mysql_fetch_array($run))
										{
											echo "<tr>";
											echo "<td>".$p."</td>";
											echo "<td>".$row['name']."</td>";
											echo "<td>".$row['organ']."</td>";
											echo "<td>".$row['description']."</td>";
											echo "<td>".$row['precautions']."</td>";
											
											echo "</tr>";

											$p++;
										}
										echo "</table>";
						}
						else{
							?>
								<div class="result">
									<h4>No previous issues found..</h4>
									<h5>Please send issues if any.</h5>

								</div>
						<?php } ?>
			
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
		</div>

</html>