<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the selected category ID
$category_id = $_POST['category_id'];

// Fetch subcategories based on the selected category
$sql = "SELECT id, subcategory FROM subcategory WHERE category_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $category_id);
$stmt->execute();
$result = $stmt->get_result();

$subcategories = [];
while($row = $result->fetch_assoc()) {
  $subcategories[] = $row;
}

// Close connection
$stmt->close();
$conn->close();

// Output subcategories as options for the select element
foreach($subcategories as $subcategory) {
  echo "<option value='" . $subcategory['id'] . "'>" . $subcategory['subcategory'] . "</option>";
}
?>
