<?php
// Get the username from the URL parameters
$username = $_GET['username'];

// Create a new PDO instance
$pdo = new PDO('mysql:host=localhost;dbname=40gebeya', 'root', '');

// Prepare the SQL statement
$stmt = $pdo->prepare('SELECT userprofile FROM admin WHERE username = :username');

// Bind the parameters
$stmt->bindParam(':username', $username);

// Execute the statement
$stmt->execute();

// Fetch the row into an array
$user = $stmt->fetch();

// Check if the user has a profile picture
if ($user && $user['userprofile'] != null) {
    // Get the binary data from the database
    $binaryData = $user['userprofile'];

    // Set the appropriate content type header
    header("Content-type: image/jpg");

    // Output the image data
    echo $binaryData;
} else {
    // If user not found or no profile picture, display a default image or an error message
    header("Content-type: image/png"); // Assuming a default image format
    // Output default image or error message
    // Example: echo file_get_contents('default_profile_image.png');
    echo "User not found or no profile picture available.";
}
?>
