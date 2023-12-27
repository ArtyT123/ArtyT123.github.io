<?php
$dBServername = "162.241.252.56";
$dBUsername = "autocalc";
$dBPassword = "TangLangShou7!";
$dBName = "autocalc_login";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
