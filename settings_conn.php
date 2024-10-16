<?php
function updateUserCredentials($conn, $userId, $newUsername, $newPassword) {
    // Prepare and bind
    $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssi", $newUsername, $newPasswordHash, $userId);

    // Hash the new password
    $newPasswordHash = password_hash($newPassword, PASSWORD_BCRYPT);

    // Execute the query
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Example usage
$userId = 1; // The ID of the user you want to update
$newUsername = "new_username";
$newPassword = "new_password";

// Update user credentials
updateUserCredentials($conn, $userId, $newUsername, $newPassword);

// Close the connection
$conn->close();
?>