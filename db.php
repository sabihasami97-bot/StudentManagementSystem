<?php
$conn = mysqli_connect("localhost", "root", "", "student_management");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully!";
?>
// echo "Database Connected Successfully!";