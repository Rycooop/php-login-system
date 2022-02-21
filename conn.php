<?php

function getConn()
{
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "test";

    $conn = new mysqli($host, $user, $password, $database);
    return $conn;
}

?>