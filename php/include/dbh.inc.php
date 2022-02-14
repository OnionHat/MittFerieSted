<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "MittFereistedDatabase";

// $conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName);

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
// } else {
//     print("vellykket");
//     $datetime = new DateTime();
//     $datetime->setTimezone(new DateTimeZone('Europe/Oslo'));

//     echo $datetime->format('d\-m\-Y H:i:s');
}
