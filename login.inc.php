<?php

if (isset($_POST["lName"]) && isset($_POST["lPass"]))
{

    $conn = openConnection();
    $username = $_POST["lName"];
    $password = $_POST["lPass"];

    if (empty($username) || empty($password))
    {
        echo "Cannot be NULL!";
        goto finish;
    }

    if (!$stmt = $conn->prepare("SELECT password FROM users WHERE username=?"))
    {
        echo "Sql Error";
        goto finish;
    }
   
    if (!$stmt->bind_param("s", $username))
    {
        echo "Sql Error";
        goto finish;
    }

    if (!$stmt->execute())
    {
        echo "Sql Error";
        goto finish;
    }

    if (!$res = $stmt->get_result())
    {
        echo "Sql Error";
        goto finish;
    }
    
    $query = $res->fetch_row();

    if (!$query)
    {
        echo "Invalid User";
        goto finish;
    }

    if ($query[0] == $password)
    {
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location: dashboard.php");
        die();
    }
    else echo "Invalid Password";
}

finish:

?>