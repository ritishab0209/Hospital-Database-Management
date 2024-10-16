<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_FILES['password'];

    if ($password['error'] !== UPLOAD_ERR_OK) {
        $message = "File upload error. Please try again.";
        echo "<script>window.location.href='admin_login.php?message=".urlencode($message)."';</script>";
        exit;
    }

    $allowedTypes = ['image/jpeg'];
    if (!in_array($password['type'], $allowedTypes)) {
        $message = "File must be a JPG image.";
        echo "<script>window.location.href='admin_login.php?message=".urlencode($message)."';</script>";
        exit;
    }

    $passwordHash = md5_file($password['tmp_name']);

    $stmt = $mysqli->prepare("SELECT * FROM admin_users WHERE name = ? AND password_hash = ?");
    $stmt->bind_param("ss", $name, $passwordHash);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Login successful! Welcome, $name.";
        echo "<script>window.location.href='admin_page.php?message=".urlencode($message)."';</script>";
    } else {
        $message = "Invalid name or password. Please try again.";
        echo "<script>window.location.href='admin_login.php?message=".urlencode($message)."';</script>";
    }

    $stmt->close();
    $mysqli->close();
}
?>