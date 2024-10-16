<?php
session_start();
include 'database.php'; // This file should contain your database connection details

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if files are uploaded
    if (!isset($_FILES['old_password']) || !isset($_FILES['new_password']) || !isset($_FILES['confirm_password'])) {
        $message = "All fields are required.";
        echo "<script>window.location.href='change_picture.php?message=".urlencode($message)."';</script>";
        exit;
    }

    // Get the file paths
    $old_password_path = $_FILES['old_password']['tmp_name'];
    $new_password_path = $_FILES['new_password']['tmp_name'];
    $confirm_password_path = $_FILES['confirm_password']['tmp_name'];

    // Validate new password and confirm password match
    if (md5_file($new_password_path) !== md5_file($confirm_password_path)) {
        $message = "New password and confirm password do not match.";
        echo "<script>window.location.href='change_picture.php?message=".urlencode($message)."';</script>";
        exit;
    }

    // Assuming the user is already authenticated and their name is stored in the session
    $name = 'patient123';

    // Fetch the user's current password hash (picture) from the database
    $sql = "SELECT password_hash FROM admin_users WHERE name = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        // Verify the old password (compare files)
        if (md5_file($old_password_path) !== $hashed_password) {
            $message = "Old password is incorrect.";
        echo "<script>window.location.href='change_picture.php?message=".urlencode($message)."';</script>";
            
            exit;
        }

        // Generate a hash for the new password picture
        $new_hashed_password = md5_file($new_password_path);

        // Update the password hash in the database
        $sql = "UPDATE admin_users SET password_hash = ? WHERE name = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("ss", $new_hashed_password, $name);
            if ($stmt->execute()) {
                $message = "Password changed successfully.";
        echo "<script>window.location.href='change_picture.php?message=".urlencode($message)."';</script>";
            } else {
                $message = "Error updating password.";
        echo "<script>window.location.href='change_picture.php?message=".urlencode($message)."';</script>";
            }
            $stmt->close();
        }
    }

    $mysqli->close();
} else {
    echo "Invalid request.";
}
?>
