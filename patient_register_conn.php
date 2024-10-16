<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_FILES['password'];
    $confirm_password = $_FILES['confirm_password'];

    if ($password['error'] !== UPLOAD_ERR_OK || $confirm_password['error'] !== UPLOAD_ERR_OK) {
        $message = "File upload error. Please try again.";
        echo "<script>window.location.href='patient_register.php?message=".urlencode($message)."';</script>";
        exit;
    }

    if (md5_file($password['tmp_name']) !== md5_file($confirm_password['tmp_name'])) {
        $message = "Passwords do not match. Please try again.";
        echo "<script>window.location.href='patient_register.php?message=".urlencode($message)."';</script>";
        exit;
    }

    if (md5_file($password['tmp_name']) ==='c34b8ab2b61aadb200a46b236f01a761') {
        $message = "Uploaded File size should be less than 500kB";
        echo "<script>window.location.href='patient_register.php?message=".urlencode($message)."';</script>";
        exit;
    }

    $allowedTypes = ['image/jpeg'];
    if (!in_array($password['type'], $allowedTypes)) {
        $message = "Files must be JPG images. Please try again.";
        echo "<script>window.location.href='patient_register.php?message=".urlencode($message)."';</script>";
        exit;
    }

    $passwordHash = md5_file($password['tmp_name']);
    $stmt = $mysqli->prepare("INSERT INTO admin_users (name, email, password_hash) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $passwordHash);

    if ($stmt->execute()) {
        $message = "Registration successful! Welcome, $name.";
        echo "<script>window.location.href='patient_login.php?message=".urlencode($message)."';</script>";
    } else {
        $message = "Error: " . htmlspecialchars($stmt->error);
        echo "<script>window.location.href='patient_login.php?message=".urlencode($message)."';</script>";
    }

    $stmt->close();
    $mysqli->close();
}
?>
