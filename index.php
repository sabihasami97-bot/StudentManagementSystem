<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Course Enrollment System</title>
    <link rel="stylesheet" type="text/css" href="./style.css?v=2">
</head>
<body>

<h2>Student Details & Academic Records</h2>

<form action="add.php" method="POST">

    Student ID:<br>
    <input type="text" name="student_id" required><br><br>

    Name:<br>
    <input type="text" name="name" required><br><br>

    Department:<br>
    <input type="text" name="department" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Phone:<br>
    <input type="text" name="phone" required><br><br>

    CGPA:<br>
    <input type="number" name="cgpa" min="0" max="4" step="0.01" required><br><br>

    Course Name:<br>
    <input type="text" name="course_name" required><br><br>

    Semester:<br>
    <input type="text" name="semester" placeholder="Spring 2026" required><br><br>

    Enrollment Status:<br>
    <select name="enrollment_status">
        <option value="Enrolled">Enrolled</option>
        <option value="Pending">Pending</option>
    </select><br><br>

    Result Status:<br>
    <select name="result_status">
        <option value="Pending">Pending</option>
        <option value="Pass">Pass</option>
        <option value="Fail">Fail</option>
    </select><br><br>

    Retake:<br>
    <select name="retake">
        <option value="No">No</option>
        <option value="Yes">Yes</option>
    </select><br><br>

    Supplementary:<br>
    <select name="supplementary">
        <option value="No">No</option>
        <option value="Yes">Yes</option>
    </select><br><br>

    Attendance:<br>
    <input type="text" name="attendance" placeholder="95%" required><br><br>

    Section:<br>
    <input type="text" name="section" placeholder="A" required><br><br>

    Monthly Fee Status:<br>
    <select name="monthly_fee_status">
        <option value="Paid">Paid</option>
        <option value="Unpaid">Unpaid</option>
    </select><br><br>

    Project Status:<br>
    <select name="project_status">
        <option value="Pending">Pending</option>
        <option value="Approved">Approved</option>
        <option value="Rejected">Rejected</option>
    </select><br><br>

    <input type="submit" value="Enroll Student">

</form>

</body>
</html>