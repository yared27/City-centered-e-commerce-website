<?php
// Assuming you have your database connection established already
// Fetch payment methods from the database
include('connect.php');

$sql = "SELECT * FROM payment_systems";
$result = $conn->query($sql);

$paymentMethods = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $paymentMethods[] = $row;
    }
}

$conn->close();

// Return payment methods as JSON
header('Content-Type: application/json');
echo json_encode($paymentMethods);
?>
