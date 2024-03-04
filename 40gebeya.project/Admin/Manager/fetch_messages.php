<?php
// Include database connection
include('connect.php');

// Get receiver from GET data
$receiver = $_GET['receiver'];

// Fetch chat messages for the specified receiver
$query = "SELECT * FROM chat_messages WHERE receiver = '$receiver' ORDER BY timestamp ASC";
$result = mysqli_query($conn, $query);

if ($result) {
    // Output chat messages
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p><strong>" . $row['sender'] . ":</strong> " . $row['message'] . "</p>";
    }
} else {
    // Handle query error
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
