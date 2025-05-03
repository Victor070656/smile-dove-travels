<?php


include_once "config/function.php";
include_once "config/config.php";
session_start();

$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
    $loggedIn = true;
    $uid = $_SESSION["sdtravels_user"];
}

$now = date("d-m-Y H:i:s");
$subject = "Hotel Booking Notification";
$emailMsg = "
<h4>Hotel Booked Now at $now</h4>
<p>Login to your <a href='https://smiledovetravels.com.ng/manager'>admin dashboard</a> for details</p>
";


if (confirmTransaction($_GET["trxref"])) {

    // echo "<pre>";
    // var_dump($_SESSION["hotel"]);
    // echo "</pre>";
    $ref = $_GET["trxref"];
    $fullname = $_SESSION["hotel"]["fullname"];
    $hotelid = $_SESSION["hotel"]["hotelid"];
    $roomid = $_SESSION["hotel"]["roomid"];
    $email = $_SESSION["hotel"]["email"];
    $phone = $_SESSION["hotel"]["phone"];
    $gender = $_SESSION["hotel"]["gender"];
    $nationality = $_SESSION["hotel"]["nationality"];
    $idtype = $_SESSION["hotel"]["idtype"];
    $idnum = $_SESSION["hotel"]["idnum"];
    $idexp = $_SESSION["hotel"]["idexp"];
    $checkin = $_SESSION["hotel"]["checkin"];
    $checkout = $_SESSION["hotel"]["checkout"];
    $duration = $_SESSION["hotel"]["duration"];
    $guest = $_SESSION["hotel"]["guest"];
    $amount = $_SESSION["hotel"]["amount"];

    $resid = uniqid();

    $query = mysqli_query($conn, "INSERT INTO `hotel_reservations` (`reservationid`, `userid`, `hotelid`, `roomid`, `ref`, `fullname`, `gender`,`idtype`,`idnum`,`idexp`,`nationality`,`email`,`phone`,`checkin`,`checkout`,`duration`,`guests`, `amount`) VALUES ('$resid','$uid','$hotelid','$roomid','$ref','$fullname','$gender','$idtype','$idnum','$idexp','$nationality','$email','$phone','$checkin','$checkout','$duration','$guest','$amount')");
    if ($query) {
        $upd = mysqli_query($conn, "UPDATE `hotel_rooms` SET `available` = 0 WHERE `roomid` = '$roomid'") ?? null;
        unset($_SESSION["hotel"]);
        sendMail($subject, $emailMsg);
        echo "<script>alert('Hotel Room successfully booked'); location.href = 'booking.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! contact the admin.'); location.href = 'booking.php'</script>";
    }
} else {
    echo "<script>alert('Payment not successful'); location.href = 'booking.php'</script>";
}
