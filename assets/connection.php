<?php
$conn = mysqli_connect("localhost", "root", "", "practice");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully!";
?>
