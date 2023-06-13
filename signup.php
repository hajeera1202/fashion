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