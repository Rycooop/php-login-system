<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password']))
    header("Location: dashboard.php");

require_once 'conn.php';

$conn = openConnection();

?>

<html lang="en">
<head>
    <link rel="stylesheet" href="styling/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
</head>
<body>
   <?php include 'nav.php'; ?>

    <div id="login-cont" class="login-container">
        <h2>Login!</h2>
<?php
    require 'login.inc.php';
?>
        <form method="post">
            <input type="text" name="lName" placeholder="Username">
            <input type="password" name="lPass" placeholder="Password">
            <button type="submit">Login</button>
        </form>
        <p>Dont have an account? <a id="signup">Signup!</a></p>
    </div>

    <div id="signup-cont" class="login-container">
        <h2>Signup!</h2>
        <form method="post">
            <input type="text" name="sName" placeholder="Username">
            <input type="password" name="sPass" placeholder="Password">
            <button type="submit">Signup</button>
        </form>
        <p>Already have an account? <a id="signin">Signin!</a></p>
    </div>
<?php
    require 'signup.inc.php';
?>
</body>
<script src="js/index.js"></script>
</html>