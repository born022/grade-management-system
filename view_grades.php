<?php
// view_grades.php

// Database connection
include 'database.php';

$student_id = $_GET['student_id'];
$query = "SELECT subject, grade FROM grades WHERE student_id='$student_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Grades</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>View Grades</h1>
    <table>
        <tr>
            <th>Subject</th>
            <th>Grade</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['grade']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
