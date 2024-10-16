<?php

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect the form data
    $doctor_name = $_POST["doctorName"];
    $specialization = $_POST["specialization"];
    
    $available = $_POST["available"];
    $salary = $_POST["salary"];
    $experience = $_POST["experience"];

    //$passwordHash = md5_file($password['tmp_name']);

    // Prepare and bind
    $stmt = $mysqli->prepare("INSERT INTO doctors (doctor_name, specialization, available, salary, experience) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssii", $doctor_name, $specialization, $available, $salary, $experience);

    // Execute the statement
    if ($stmt->execute()) {
        $message = "Doctor registered successfully";
        echo "<script>window.location.href='doctors.php?message=".urlencode($message)."';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$mysqli->close();
?>