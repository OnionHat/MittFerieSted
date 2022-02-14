<?php

function setComment()
{
    require 'dbh.inc.php';
    if (isset($_POST['submit-comment'])) {
        $date = $_POST['date'];
        $message = $_POST['message'];
        $id = $_SESSION['userId'];

        // $sql = "INSERT INTO Comments (dates, messages, Users_idUsers) VALUES ('$date', '$message', $id)";


        // mysqli_query($conn, $sql);

        $sql = 'INSERT INTO Comments (dates, messages, Users_idUsers) VALUES (?, ?, ?)';
        $stmt = mysqli_stmt_init($conn);
        // echo "ERROR: Det oppsto en feil <br> $sql. <br><br>";
        // echo mysqli_error($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: account.php?error=sqlerror1");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ssi", $date, $message, $id);
            mysqli_stmt_execute($stmt);
        }
    }
}


function getComment()
{
    require 'dbh.inc.php';

    if ($_SESSION['userId'] == null) {
        header("Location: index.php?error=notlogedin");
        exit();
    } else {
        $sql = 'SELECT * FROM Comments';
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {

            $id = $row['Users_idUsers'];
            $sql1 = "SELECT username FROM Users WHERE idUsers = '$id'";
            $result1 = $conn->query($sql1);

            if ($row1 = $result1->fetch_assoc()) {
                echo '<div class="comment-box">';
                echo '<br><p>' . $row1['username'] . '<br>';
                echo '<p>' . $row['dates'] . '<br>';
                echo '<p>' . $row['messages'] . '<br><br>';
                echo '</div>';
            }
        }
    }
}
