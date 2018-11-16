<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Doctor Registration Form</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="../animate.css">
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
              border-top: 8px solid #3498db;
              border-bottom: 8px solid #3498db;
              border-left: 8px solid #3498db;
              width: 15px;
              height: 15px;
              animation: spin 2s linear infinite;
            }
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
              }
      </style>

  
</head>

<body onload="myFun()">
  <div id="loader"></div>
      <div id="mydiv" style="display:none;" class="fadeInRightBig animated">
            <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
          <link rel="stylesheet" href="form.css" type="text/css">
          <div class="body-content">
            <div class="module">
              <h1>Create an account</h1>
              <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="alert alert-error"></div>
                <input type="text" placeholder="First Name" name="firstname" required />
                <input type="text" placeholder="Last Name" name="lastname" required />
                <input type="email" placeholder="Email" name="email" required />
                <input type="text" placeholder="Doctor ID" name="doctorID" required />
                <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
                <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
                <label>Date Of Birth</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="dob" required />
                <input type="text" placeholder="Gender" name="sex" required />
                <input type="text" placeholder="Phone Number" name="phone" required />
                <select name="speciality">
                  <option>-- Select Speciality --</option>
                  <option>Rasiologist</option>
                  <option>Cardiologist</option>
                  <option>Neurologist</option>
                  <option>Gynaecologist</option>
                  <option>Pediatrist</option>
                  <option>Neuro Surgeon</option>
                  <option>General Physician</option>
                </select>
                <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
              </form>
            </div>
          </div>
  
      <?php
          include('dbconnect.php');
          $firstname=$lastname=$doctorID=" ";
          $email=$sex=$password=$phone=$speciality=$dob=" ";

          if ($_SERVER["REQUEST_METHOD"] == "POST") 
          {

           //if($_POST['SignUP']=='SignUP'){
              $firstname=$_POST["firstname"];
              $lastname=$_POST['lastname'];
              $email=$_POST['email'];
              $username=$_POST['doctorID'];
              $password=$_POST['password'];
              $dob=$_POST['dob'];
              $sex=$_POST['sex'];
              $phone=$_POST['phone'];
              $spec=$_POST['speciality'];

               echo $query="insert into doctor (firstname, lastname,email, doctorID, password, DateOfBirth, sex, phone, speciality) values ('".$firstname."','".$lastname."', '".$email."', '".$username."', '".$password."','".$dob."','".$sex."','".$phone."','".$spec."');";

              $run=mysql_query($query);
              if(!$run){
                echo "record cannot be inserted";
              }
              else
              {
                echo "record inserted";
              }
           
          }
    ?>

            <script type="text/javascript">
              /* script for loader  */
                    var myVar;
                    function myFun(){
                      myVar = setTimeout(showPage, 2000);
                    }
                    function showPage(){
                      document.getElementById("loader").style.display="none";
                      document.getElementById("mydiv").style.display="block";
                    }
            </script>
  </div>
</body>
</html>
