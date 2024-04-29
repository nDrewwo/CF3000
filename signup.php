<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="icon" href="assets/icon.png">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div id="content">
        <h2>Create your account</h2>
        <form action="processes/register_process.php" method="post">

            <label for="rfid" class="sr-only">RFID</label>
            <input type="rfid" name="rfid" id="rfid" placeholder="RFID" required>

            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" required>

            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>

            <input type="submit" value="Sign up">
        </form>
        <p>Already have an account? <a href="login.html" class="href">Log in</a></p>
    </div>
</body>
</html>

<?php
session_start();

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']); // remove it after displaying
}

?>