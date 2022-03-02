<?php

if (isset($_POST["sName"]) && isset($_POST["sPass"]))
{
    $conn = openConnection();
    $username = $_POST["sName"];
    $password = $_POST["sPass"];

    if(empty($username) || empty($password))
    {
        echo "<p style='text-align: center; color: red;'>Cannot be NULL</p>";
        goto finish;
    }

    if (!$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES(?, ?)"))
    {
        echo "Sql Error";
        goto finish;
    }
    
    if (!$stmt->bind_param("ss", $username, $password))
    {
        echo "Sql Error";
        goto finish;
    }

    if (!$stmt->execute())
    {
        echo "Sql Error";
        goto finish;
    }

   echo "Successfully Registered!";
}

finish:

?>