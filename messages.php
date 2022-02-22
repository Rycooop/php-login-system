<?php

$conn = openConnection();

?>

<link rel="stylesheet" href="styling/dash.css">
<div class="message-container">
    
<h2>Write message</h2>
<form method="post">
    <input type="text" name="messagecontent" placeholder="Enter Message">
    <button type="submit">Post</button>
</form>

<?php 

if (isset($_POST['messagecontent']))
{
    $message = $_POST['messagecontent'];
    $currUser = $_SESSION['username'];

    if ($message != NULL || strlen($message) > 200)
    {
        mysqli_query($conn, "INSERT INTO messages (fromuser, touser, message) VALUES ('$currUser', 'global', '$message')");
    }
}

if ($res = mysqli_query($conn, "SELECT * FROM messages WHERE touser='global'"))
{

    while ($query = mysqli_fetch_row($res))
    {
        echo "<div class='message'>
                <h2>" .$query[1]. "</h2>
                <p>" .$query[3]. "</p>
            </div>";
    }
}

?>

</div>