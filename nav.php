<?php
    if (!isset($_SESSION['username']))
    {
    ?>
        <link rel="stylesheet" href="styling/nav.css">

        <nav class="nav">
                <div class="navwrapper">
                <h1>Welcome</h1>
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>Discord</li>
                </ul>
            </div>
            </nav>
    }
    <?php }
    if (isset($_SESSION['username'])) :
        ?>
        <link rel="stylesheet" href="styling/nav.css">

        <nav class="nav">
        <div class="navwrapper">
        <?php 
        echo "<h1>" .$_SESSION['username']. "</h1>"; 
        ?>
        <ul>
            <form method="post">
            <button>Home</button>
            <button>Messages</button>
            <button name="oName" type="submit">Logout</button>
            </form>
        </ul>
    </div>
    </nav>
    <?php endif ?>

