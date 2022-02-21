<?php

function openConnection()
{
    $server = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "test";

    $conn = new mysqli($server, $user, $password, $database);

    return $conn;
}

?>