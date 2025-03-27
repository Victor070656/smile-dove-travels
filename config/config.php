<?php

$conn = mysqli_connect("localhost", "root", "", "sdtravels");

if (!$conn) {
    die("<script>alert('Database connection failed')</script>");
}