<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Student</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Student ID:<br>
<input type="text" name="student_id" value="<?php echo $row['student_id']; ?>"><br><br>

Name:<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Department:<br>
<input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>

Email:<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

CGPA:<br>
<input type="text" name="cgpa" value="<?php echo $row['cgpa']; ?>"><br><br>

<input type="submit" value="Update Student">

</form>

</body>
</html>