<?php
$table = $_GET['table'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the specified table
$sql = "SELECT * FROM $table";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

$conn->close();

// Send JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>
