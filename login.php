<?php
session_start();
include 'connect.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="styleLogin.css">
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
if(isset($_POST['submit'])){
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $email_search="select * from userdata where Email = '$Email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $pass = mysqli_fetch_assoc($query);
        $_SESSION['user_id'] = $pass['id'];
        
        if (md5($password) === $pass["Password"]) {
       
            ?>
            <script>
                alert("Successful")
                window.location.href = "index.php"
            </script>
            <?php
             
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
<div class="form_bg text-center">
       
       <div class="container">
       
       <div class="row">
       <div class="col-12 col-md-12 col-lg-6 box2 ">
 <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div>
        <h1>Login</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="email">Email:</label>
            <input type="text" name="Email" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" value="login" name="submit">
            <div >
    <button class="footbtn"> <a href="forgot.php"> Forgot Password?</a></button>&nbsp;&nbsp;
    <button class="footbtn"> <a href="change.php"> Change Password</a></button>
    </div>
        </form>
    </body>
    </html>
        </div>
         </html>



