<?php


include_once "config/function.php";
include_once "config/config.php";
session_start();

$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
    $loggedIn = true;
    $uid = $_SESSION["sdtravels_user"];
}


if (confirmTransaction($_GET["trxref"])) {

    // echo "<pre>";
    // var_dump($_SESSION["flight"]);
    // echo "</pre>";
    $ref = $_GET["trxref"];
    $fullname = $_SESSION["flight"]["fullname"];
    $dob = $_SESSION["flight"]["dob"];
    $email = $_SESSION["flight"]["email"];
    $phone = $_SESSION["flight"]["phone"];
    $gender = $_SESSION["flight"]["gender"];
    $nationality = $_SESSION["flight"]["nationality"];
    $idtype = $_SESSION["flight"]["idtype"];
    $idnum = $_SESSION["flight"]["idnum"];
    $idexp = $_SESSION["flight"]["idexp"];
    $depart_date = $_SESSION["flight"]["depart_date"];
    $depart_city = $_SESSION["flight"]["depart_city"];
    $destin_city = $_SESSION["flight"]["destin_city"];
    $destin_country = $_SESSION["flight"]["destin_country"];
    $ticket_type = $_SESSION["flight"]["ticket_type"];
    $airline_class = $_SESSION["flight"]["airline_class"];
    $price = $_SESSION["flight"]["price"];

    $query = mysqli_query($conn, "INSERT INTO `flight_bookings` (`userid`, `ref`, `fullname`,`dob`,`gender`,`id_type`,`id_num`,`id_exp`,`nationality`,`email`,`phone`,`depart_city`, `dest_country`, `dest_city`,`depart_date`,`ticket_type`,`airline_class`,`price`) VALUES ('$uid','$ref','$fullname','$dob','$gender','$idtype','$idnum','$idexp','$nationality','$email','$phone','$depart_city','$destin_country','$destin_city','$depart_date','$ticket_type','$airline_class','$price')");
    if ($query) {
        unset($_SESSION["flight"]);
        echo "<script>alert('Flight successfully booked'); location.href = 'booking.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! contact the admin.'); location.href = 'booking.php'</script>";
    }
} else {
    echo "<script>alert('Payment not successful'); location.href = 'booking.php'</script>";
}
