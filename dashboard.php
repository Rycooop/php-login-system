<?php
    session_start();

    if (!isset($_SESSION['username']))
        header("Location: index.php");

    require 'logout.inc.php';
    require 'conn.php';
?>

<link rel="stylesheet" href="styling/dash.css">

<body>
    
<?php include 'nav.php'; ?>

<?php include 'messages.php'; ?>


</body>

