<?php

include 'conn.php';

?>

<html>
    <link rel="stylesheet" href="style.css">

    <h1 class="header">Basic Login/signup system!</h1>

    <h2>Signup</h2>
    <form method="post">
        <input type="text" name="sName">
        <input type="text" name="sPass">
        <input type="submit">
    </form>
    <br>

<?php

require 'signup.inc.php';

?>

    <h2>Login</h2>
    <form method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <input type="submit">
    </form>
</html>

<?php

require 'login.inc.php';

?>