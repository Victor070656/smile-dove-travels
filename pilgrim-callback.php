<?php


include_once "config/function.php";
include_once "config/config.php";
session_start();

$loggedIn = false;
if (!empty($_SESSION["sdtravels_user"])) {
    $loggedIn = true;
    $uid = $_SESSION["sdtravels_user"];
}

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (confirmTransaction($_GET["trxref"])) {
    // echo "<pre>";
    // var_dump($_SESSION["visa_application"]);
    // echo "</pre>";

    // try {
    $data = $_SESSION['pilgrim'];

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";

    // die();
    $ref = $_GET["trxref"];
    $origin = $data['origin'];
    $price = $data['price'];
    $files = $data['file'];
    $fileName = basename($files);

    // Move uploaded files to final directory
    if (!empty($data["file"])) {

        $final_upload_dir = "uploads/pilgrim_files/";
        if (!is_dir($final_upload_dir)) {
            mkdir($final_upload_dir, 0777, true);
        }

        $new_path = $final_upload_dir . basename($files);
        rename($files, $new_path);
    }



    $sql = "INSERT INTO `pilgrims` (`userid`, `ref`, `origin`, `price`, `file`) VALUES ('$uid', '$ref', '$origin', '$price', '$fileName')";
    $run = mysqli_query($conn, $sql);
    if ($run) {
        echo "<script>alert('Payment successful! Pilgrimage package booked'); location.href = 'pilgrimage.php'</script>";
    } else {
        echo "<script>alert('Payment not successful'); location.href = 'pilgrimage.php'</script>";
    }
} else {
    echo "<script>alert('Payment not successful'); location.href = 'pilgrimage.php'</script>";
}
