<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate the username and password (add any necessary validation rules)
    if (empty($email) || empty($password)) {
        echo "Please enter both email and password.";
    } else {
        // Prepare the SQL query to retrieve the user's information from the database
        $sql = "SELECT * FROM register WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Verify the password using the stored hash
            if (password_verify($password, $row["password"])) {
                echo "Login successful. Welcome, " . $row["email"] . "!";
                // You can perform additional actions here, such as setting session variables or redirecting to another page.
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
</head>
<body>
    <h1>Sign In</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Sign In">
    </form>
</body>
</html>