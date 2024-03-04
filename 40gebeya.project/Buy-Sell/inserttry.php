<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
  header('Location: Add_items.php');
  exit;
}

// Get POST data
$name = $conn->real_escape_string($_POST['name']);
$price = $conn->real_escape_string($_POST['price']);
$description = $conn->real_escape_string($_POST['description']);
$category_id = $conn->real_escape_string($_POST['category_id']);
$subcategory_id = $conn->real_escape_string($_POST['subcategory_id']);

// Handle the uploaded file
$images_path = $_FILES['images_path']['name'];
$target_dir = "uploads/"; // specify the directory where you want to save the uploaded file
$target_file = $target_dir . basename($images_path);

// Check if the upload folder exists, if not create it
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// You should also add file upload error handling here
if (move_uploaded_file($_FILES['images_path']['tmp_name'], $target_file)) {
    $_SESSION['message'] = "The file ". basename($images_path). " has been uploaded.";
} else {
    $_SESSION['error'] = "Sorry, there was an error uploading your file.";
    header('Location: Add_items.php');
    exit;
}

// First, get the R_ID
$user_check = $_SESSION['login_user1'];
$R_IDsql = "SELECT shops.R_ID FROM shops, MANAGER WHERE shops.M_ID='$user_check'";
$R_IDresult = mysqli_query($conn, $R_IDsql);
$R_IDrs = mysqli_fetch_array($R_IDresult, MYSQLI_BOTH);
$R_ID = $R_IDrs['R_ID'];

// Then, insert the data into the item table
$sql = "INSERT INTO item (name, price, description, images_path, R_ID, category_id, subcategory_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssiii", $name, $price, $description, $target_file, $R_ID, $category_id, $subcategory_id);

if ($stmt->execute()) {
    $_SESSION['message'] = "New record created successfully";
    header('Location: Add_items.php');
} else {
    $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
    header('Location: Add_items.php');
}

$stmt->close();
$conn->close();
?>
