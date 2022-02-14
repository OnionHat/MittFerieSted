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
                <h1>Signup</h1>
                <form action="include/signup.inc.php" method="POST">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="text" name="mail" placeholder="E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                    <div class="checkpoint-news">
                        <input type="checkbox" name="news" value="yes">
                        <label for="news"> Send me news (optional)</label>
                    </div>
                    <span class="submit-span">
                        <button type="submit" name="signup-submit">Signup</button>
                    </span> </form>
            </div>
        </div>
    </main>

    <?php
    require 'footer.php';
    ?>
</body>