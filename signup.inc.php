<?php

if (isset($_POST["sName"]) && isset($_POST["sPass"]))
{
    $conn = openConnection();
    $username = $_POST["sName"];
    $password = $_POST["sPass"];

    if ($username != NULL && $password != NULL)
    {
        if (mysqli_query($conn, "INSERT INTO users (username, password) VALUES('$username', '$password')"))
        {
            echo "Success!";
        }
        else echo "Error";
    }
    else echo "Fields cannot be empty!";
}

?>