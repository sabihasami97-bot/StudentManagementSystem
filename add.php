<?php
include "db.php";

$student_id = $_POST['student_id'];
$name = $_POST['name'];
$department = $_POST['department'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cgpa = $_POST['cgpa'];
$course_name = $_POST['course_name'];
$semester = $_POST['semester'];
$enrollment_status = $_POST['enrollment_status'];
$result_status = $_POST['result_status'];
$retake = $_POST['retake'];
$supplementary = $_POST['supplementary'];
$attendance = $_POST['attendance'];
$section = $_POST['section'];
$monthly_fee_status = $_POST['monthly_fee_status'];
$project_status = $_POST['project_status'];

$sql = "INSERT INTO students
(student_id, name, department, email, phone, cgpa, course_name, semester, enrollment_status, result_status, retake, supplementary, attendance, section, monthly_fee_status, project_status)

VALUES

('$student_id','$name','$department','$email','$phone','$cgpa','$course_name','$semester','$enrollment_status','$result_status','$retake','$supplementary','$attendance','$section','$monthly_fee_status','$project_status')";

if(mysqli_query($conn,$sql))
{
    echo "Student Enrolled Successfully!";
}
else
{
    echo "Error: ".mysqli_error($conn);
}
?>