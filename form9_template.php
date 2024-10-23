<?php
// form9_template.php

// Database connection
include 'database.php';

$student_id = $_GET['student_id'];
$query = "SELECT subject, grade FROM grades WHERE student_id='$student_id'";
$result = mysqli_query($conn, $query);

// Generate School Form 9
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="School_Form_9.pdf"');

// PDF generation logic goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate School Form 9</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Generating School Form 9...</h1>
</body>
</html>
