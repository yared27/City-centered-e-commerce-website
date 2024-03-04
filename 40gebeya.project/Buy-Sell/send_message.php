<?php
// Include database connection
include('connect.php');

// Start the session
session_start();

// Get message and receiver from POST request
$message = $_POST['message'];
$receiver = $_POST['receiver']; // Assuming receiver is passed from the form

// Get sender from session
$sender = $_SESSION['username'];

// Insert message into database
$query = "INSERT INTO chat_messages (sender, receiver, message) VALUES ('$sender', '$receiver', '$message')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Message sent successfully.";
} else {
    // Handle insert error
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
