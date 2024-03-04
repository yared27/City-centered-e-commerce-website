<?php
    // Get the full name from the URL parameters
    $fullname = $_GET['fullname'];

    // Create a new PDO instance
    $pdo = new PDO('mysql:host=localhost;dbname=40gebeya', 'root', '');

    // Prepare the SQL statement
    $stmt = $pdo->prepare('SELECT userprofile FROM customer WHERE fullname = :fullname');

    // Bind the parameters
    $stmt->bindParam(':fullname', $fullname);

    // Execute the statement
    $stmt->execute();

    // Fetch the row into an array
    $user = $stmt->fetch();

    // Check if the user has a profile picture
    if ($user['userprofile'] != null) {
        // Get the binary data from the database
        $binaryData = $user['userprofile'];

        // Tell the browser that this is an image
        header("Content-type: image/jpg");

        // Output the image data
        echo $binaryData;
    }
?>
