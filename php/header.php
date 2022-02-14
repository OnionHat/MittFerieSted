<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <header>
        <a href="index.php"><img class="nav_logo" src="../images/logoHawaii.png" alt=""></a>
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="island.php">Island</a></li>
                <li><a href="experience.php">Experience</a></li>
            </ul>
        </nav>
        <div class="nav_login">
            <?php
            if (isset($_SESSION['userId'])) {
                echo '<a class="account" href="account.php">Hi, ' . $_SESSION['userUid'] . ' ▼</a>
                <form action="include/logout.inc.php" method="post">
                <button type="submit" name="logout-submit" class="signup" href="login.php"><a>Logout</a></button>
                </form>';
            } else {
                echo '<a class="login" href="login.php">Login</a>
                <a class="signup" href="signup.php">Signup</a>';
            }
            ?>




        </div>
    </header>
</body>

</html>