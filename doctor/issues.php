
<?php
	session_start();
	$nameval=$_SESSION['name'];
?>

<html>
<head>
	<title>Doctor Home</title>
	<link href="patient_home.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../table-css.css">
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

		span a{
			color:green;
		}
		body{	background-image: url("../home2.jpg");
		}
		
		button{
							background-color: #f4511e;
							border: none;
							color: #FFFFFF;
							text-align: center;
							cursor: pointer;
						}
		#myTable{
			width:75%;
			margin-left: 100px;
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
<div class="fadeInUpBig animated">
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

	<div class="form fadeInDownBig animated">
		<?php
			include('../dbconnect.php');



			$query="select *from issues where status=' '";
			$run=mysql_query($query);

			?>

			&nbsp;&nbsp;&nbsp;<i class="fa fa-search " aria-hidden="true" class="sear"></i>
				<input type="text" class="fadeInLeft animated" id="myInput" onkeyup="myFunction()" placeholder="Search for Names.." title="Type in a name">

			<?php
			$p=1;
			echo '<table width="100%" border="1" id="myTable">
					<tr class="header">
						<th>Sno</th>
						<th>Name</th>
						<th>Organ</th>
						<th>Description</th>
						<th>Enter Precautions</th>
						<th>Modify</th>
					</tr>
			';

			while ($row=mysql_fetch_array($run)) {
				echo "<tr>";
				echo "<td>".$p."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['organ']."</td>";
				echo "<td>".$row['description']."</td>";
				echo '<td><input type="text" name="prec"/></td>';
			
				echo "<td><a href='issues_mod.php?del=".$row['sno']."'><button>Update</button></td>";
				echo "</tr>";

				$p++;
			}
			echo "</table";
		?>
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


							/*     Script for search bar       */
							function myFunction() {
									  var input, filter, table, tr, td, i;
									  input = document.getElementById("myInput");
									  filter = input.value.toUpperCase();
									  table = document.getElementById("myTable");
									  tr = table.getElementsByTagName("tr");
									  for (i = 0; i < tr.length; i++) {
											 td = tr[i].getElementsByTagName("td")[1];
											 if (td) {
											      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
											        tr[i].style.display = "";
											      } 
											      else {
											        tr[i].style.display = "none";
											      }
									    	}       
									  }
							}
				</script>
	</div>	
	

	
</body>
</html>