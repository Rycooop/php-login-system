<?php

include_once 'conn.php';

if (isset($_POST["username"]) && isset($_POST["password"]))
{
    $conn = openConnection();
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($res = mysqli_query($conn, "SELECT password FROM users WHERE username='$username'"))
    {
        $query = mysqli_fetch_row($res);
    
        if ($query)
        {
            if ($query[0] == $password)
            {
                echo "Logged in!";
            }
            else echo "invalid password";
        }
        else echo "Invalid Username\r\n";
    }
    else echo "Failed query";
}

?>