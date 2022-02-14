<?php
date_default_timezone_set('Europe/Oslo');

include 'include/account.inc.php';


?>

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

    <main class="account-main">

        <?php
        echo '
        
        <form action="' . setComment() . '" method="POST">
        <input type="hidden" name="date" value="' . date("Y-m-d H:i:s") . '">
        <textarea name="message"></textarea><br>
        <button class="comment-submit" type="submit" name="submit-comment">Comment</button>
        </form>';
        ?>
        <div class="all-comments">
            <?php 
            getComment();
            ?>
        </div>
    </main>

    <!-- <form action="'.setComment($conn).'" method="POST">
    <input type="hidden" name="uid" value="' . $_SESSION['userId'] .'">
    <input type="hidden" name="date" value="'.date("d-m-Y H:i:s").'">
    <textarea name="message"></textarea><br>
    <button class="comment-submit" type="submit" name="submit-comment">Comment</button>
    </form> -->
    <?php
    require 'footer.php';
    ?>
</body>