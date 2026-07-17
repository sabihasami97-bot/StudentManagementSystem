<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Details & Academic Records</h2>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>ID</th>
    <th>Student ID</th>
    <th>Name</th>
    <th>Department</th>
    <th>Email</th>
    <th>Phone</th>
    <th>CGPA</th>
    <th>Course Name</th>
    <th>Semester</th>
    <th>Enrollment</th>
    <th>Result</th>
    <th>Retake</th>
    <th>Supplementary</th>
    <th>Attendance</th>
    <th>Section</th>
    <th>Monthly Fee</th>
    <th>Project Status</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['student_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['cgpa']; ?></td>
    <td><?php echo $row['course_name']; ?></td>
    <td><?php echo $row['semester']; ?></td>
    <td><?php echo $row['enrollment_status']; ?></td>
    <td><?php echo $row['result_status']; ?></td>
    <td><?php echo $row['retake']; ?></td>
    <td><?php echo $row['supplementary']; ?></td>
    <td><?php echo $row['attendance']; ?></td>
    <td><?php echo $row['section']; ?></td>
    <td><?php echo $row['monthly_fee_status']; ?></td>
    <td><?php echo $row['project_status']; ?></td>

    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>