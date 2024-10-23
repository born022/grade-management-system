<?php
// grade_entry.php

// Database connection
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];

    // Insert grade into database
    $query = "INSERT INTO grades (student_id, subject, grade) VALUES ('$student_id', '$subject', '$grade')";
    if (mysqli_query($conn, $query)) {
        echo "Grade recorded successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Grade Entry</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Teacher Grade Entry</h1>
    <form method="POST">
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
