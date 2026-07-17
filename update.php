<?php
include "db.php";

$id = $_POST['id'];
$student_id = $_POST['student_id'];
$name = $_POST['name'];
$department = $_POST['department'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cgpa = $_POST['cgpa'];

$sql = "UPDATE students SET
student_id='$student_id',
name='$name',
department='$department',
email='$email',
phone='$phone',
cgpa='$cgpa'
WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "Student Updated Successfully!";
}else{
    echo "Update Failed!";
}
?>