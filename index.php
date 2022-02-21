<?php

include 'conn.php';

$conn = getConn();

echo "Connected <br>";

$query = "SELECT UID FROM users WHERE username='rycoop'";

if ($res = mysqli_query($conn, $query))
{
    echo "Queried <br>";
    if (mysqli_num_rows($res) != 0)
    {
        echo "User found! <br>";
    }
    else echo "User not found :( <br>";

}
else echo "Fuck";

?>

<html>
    <h1>Hello World</h1>
</html>


