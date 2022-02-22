<?php

if (isset($_POST['oName']))
{
    session_destroy();
    header("Location: index.php");
}

?>