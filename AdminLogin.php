<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form validation</title>
  <?php include'Links.php' ?>
   <?php include'connect.php' ?>
  <link rel="stylesheet" href="StyleAdminLogin2.css">
  
</head>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['nemail'];
    $password = $_POST['npassword'];

    $email_search="select * from adminlogin where Email = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $pass = mysqli_fetch_assoc($query);

        
        if ($password === $pass["Password"]) {
      
            ?>
            <script>
                alert("Successful")
            </script>
            <?php
             header("Location: dashboard.php");
        }
        else{
            ?>
    <script>
        alert("invalid password")
    </script>
    <?php
        }
      }
        else{
            ?>
            <script>
                alert("Invalid Email")
            </script>
            <?php
        }
    }

?>

<body>
  <div class="wrapper">
    <div class="d-flex">
  <a href="Main.php" ><i class="fa-solid fa-house"></i></a> 
    <header>Login Form</header>
    </div>
    <form action="#" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email Address" name="nemail" required >
          <i class="icon fas fa-envelope"></i>
        </div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="npassword" required>
          <i class="icon fas fa-lock"></i>
        </div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" value="Login" class="btn" name="submit">
    </form>
   
  </div>

 
</body>
</html>