<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Account Registration Form (battle.net)</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
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
      <select>
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
  
  
</body>
</html>
