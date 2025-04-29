<?php
include "../config/config.php";
session_start();
if (!isset($_SESSION['sdtravels_manager'])) {
    echo "<script>alert('Please Login First'); location.href = 'login.php'</script>";
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `pilgrim_dates` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('Pilgrim Group Deleted Successfully'); location.href = 'pilgrim-group.php'</script>";
    } else {
        echo "<script>alert('Error Deleting Pilgrim Group'); location.href = 'pilgrim-group.php'</script>";
    }
} else {
    echo "<script>alert('Invalid Request'); location.href = 'pilgrim-group.php'</script>";
}