<?php
// Include database connection
include('connect.php');

// Fetch users from different tables
$query = "SELECT username FROM customer UNION SELECT username FROM manager UNION SELECT username FROM admin";
$result = mysqli_query($conn, $query);

if ($result) {
    // Initialize options variable
    $options = '<option value="">Select Receiver</option>';

    // Fetch data and append options
    while ($row = mysqli_fetch_assoc($result)) {
        $options .= '<option value="' . $row['username'] . '">' . $row['username'] . '</option>';
    }

    // Output options
    echo $options;
} else {
    // Handle query error
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
