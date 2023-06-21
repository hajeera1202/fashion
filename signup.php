<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
    <style>
      /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
</style>

    <!-- php connection link -->
    <?php include 'connect.php' ?>
</head>


<body>

<?php
if(isset($_POST['submit']))
{
  $username = mysqli_real_escape_string($conn, $_POST['nusername']);
  $email = mysqli_real_escape_string($conn, $_POST['nemail']);
  $mobile = mysqli_real_escape_string($conn, $_POST['nphone']);
  $password = mysqli_real_escape_string($conn, $_POST['npassword']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['ncpassword']);

  $pass = md5($password);
  $cpass = md5($cpassword);

  $emailquery = "select * from userdata where Email = '$email'"; 
  $emailquery_run = mysqli_query($conn, $emailquery);
  $emailquery_num = mysqli_num_rows($emailquery_run);
  if($emailquery_num > 0)
  {
  ?>
  <script>
    alert("Email Already Exists");
  </script>
  <?php
  }
else 
{
  if($password === $cpassword)
  {
    $insertquery = "insert into userdata(Username, Email, PhoneNumber, Password,cpassword) values ('$username', '$email', '$mobile', '$pass','$cpass')";
    $iquery = mysqli_query($conn, $insertquery);
    if($iquery)
          {
      ?>
      <script>
        alert("Account Created Successfully");
        window.location.href = "success.php";
      </script>
      <?php
          }
          else
          {
             ?>
       <script>
      alert("Error Occured");
      </script>
      <?php
          }
  }
  else
  {
    ?>
    <script>
      alert("Passwords do not match");
    </script>
    <?php
  }
}
}
?>

 
    
    <!-- login -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        
                <div class="col-md-8" id="side2">
                    <h3>Create Account</h3>
                    <div class="inp">
                    <input id="text" type="text" name="nusername" placeholder="Userame" required/>
			<input id="text" type="email" name="nemail" placeholder="Email" required/>
			<input id="number" type="tel"  name="nphone" placeholder="Phone Number"pattern="[6-9]{1}[0-9]{9}" maxlength="10" required/>
			<input id="epass" type="password" name="npassword" placeholder="Password" required/>
            <input id="ecpass" type="password" name="ncpassword" placeholder="Confirm Password" required/>
                    </div>
                    <div id="login"><button type="submit" name="submit">Sign Up</button></div>
                </div>
           
</form>
      </html>