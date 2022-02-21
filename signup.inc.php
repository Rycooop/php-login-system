<?php


if (isset($_POST["sPass"]) && isset($_POST["sName"]))
{
    $conn = openConnection();
    $username = $_POST["sName"];
    $password = $_POST["sPass"];

    if ($password != NULL && $username != NULL)
    {
        if (mysqli_query($conn, "INSERT INTO users (username, password) VALUES('$username', '$password')"))
        {
           echo "Account Created!";
        }
        else echo "Cant signup :(";
    }
    else echo "Cant Have NULL values!";
    
}

?>