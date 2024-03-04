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
        echo "<div style=' margin-right:2dvb; padding:1dvb;'><p> <strong style='color:black'><i class='fa fa-user' ></i>&nbsp;" . $row['sender'] . ":</strong> <br>"."<p style='text-align:right; padding-right:2dvb; color:gray;' >". $row['message'] ."</p>". "</p></div><hr><hr>";
    }
} else {
    // Handle query error
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
