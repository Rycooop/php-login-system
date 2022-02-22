<?php

if (isset($_POST["lName"]) && isset($_POST["lPass"]))
{
    $conn = openConnection();
    $username = $_POST["lName"];
    $password = $_POST["lPass"];

    if ($res = mysqli_query($conn, "SELECT password FROM users WHERE username='$username'"))
    {
        $query = mysqli_fetch_row($res);

        if ($query)
        {
            if($query[0] == $password)
            {
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                header("Location: dashboard.php");
            }
            else echo "Invalid Password!";
        }
        else echo "Invalid User";
    }
    else echo "Network error";
}

?>