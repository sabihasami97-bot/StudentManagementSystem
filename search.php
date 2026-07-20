<?php
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Search Student</h2>

<form method="GET">
    <input type="text" name="search" placeholder="Enter Student ID or Name" required>
    <input type="submit" value="Search">
</form>

<br>

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
    <th>Enrollment Status</th>
    <th>Result Status</th>
    <th>Retake</th>
    <th>Supplementary</th>
    <th>Attendance</th>
    <th>Section</th>
    <th>Monthly Fee</th>
    <th>Project Status</th>
</tr>

<?php
if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $sql = "SELECT * FROM students
            WHERE student_id LIKE '%$search%'
            OR name LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

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
</tr>
<?php
    }
}
?>

</table>

</body>
</html>