<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/main.css">
</head>

<body>
    <?php
    require 'header.php';
    ?>

    <main>
        <div class="wrapper-signup">
            <div class="section-default">
                <h1>Login</h1>
                <form action="include/login.inc.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username/E-mail">
                    <input class="password-input" type="password" name="pwd" placeholder="Password">
                    <span>
                        <button type="submit" name="login-submit">Login</button>
                    </span>
                </form>
            </div>
        </div>
    </main>

    <?php
    require 'footer.php';
    ?>
</body>