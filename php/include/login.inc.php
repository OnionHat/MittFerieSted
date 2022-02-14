<?php
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields&uid=" . $mailuid);
        exit();
    } else {
        $sql = "SELECT * FROM Users WHERE username=? OR useremail=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror0");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['userpwd']);

                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['username'];

                    header("Location: ../index.php");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
