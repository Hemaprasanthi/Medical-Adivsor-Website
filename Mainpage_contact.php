<?php
	$name=$email=$msg="";
	include('dbconnect.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST"){

			$name=$_POST['name'];
			$email=$_POST['email'];
			$msg=$_POST['message'];

			$query="insert into contact(name,email,message) values ('".$name."','".$email."','".$msg."');";
			$run=mysql_query($query);
			if(!$run)
				echo 'cannot insert';
	}
?>