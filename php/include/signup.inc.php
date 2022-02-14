<?php

if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordReapet = $_POST['pwd-repeat'];
    $newsCheck = $_POST['news'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordReapet)) {
        header("Location: ../signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email);
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=" . $username);
        exit();
    }
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=" . $email);
        exit();
    }
    if ($password !== $passwordReapet) {
        header("Location: ../signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        $sql = "SELECT username FROM Users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror0");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=" . $email);
                exit();
            } else {

                if ($newsCheck !== "yes") {
                    $getNews = 0;
                }else {
                    $getNews = 1;
                }


                $sql = "INSERT INTO Users (username, useremail, userpwd, news) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror1");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sssi", $username, $email, $hashedPwd, $getNews);
                    mysqli_stmt_execute($stmt);


                    $sql = "SELECT * FROM Users WHERE username=? OR useremail=?";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../login.php?error=sqlerror0");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
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
                    // header("Location: ../signup.php?regis=success");
                    // exit();
                }
            }
        }
    }








    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signup.php");
    exit();
}
