<?php
// Assuming you have a database connection in a separate file
require 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['category_id'])) {
    // Fetch subcategories for the dropdown
    $category_id = $_POST['category_id'];
    $subcategory_result = $conn->query("SELECT * FROM subcategory WHERE categoryid = " . $category_id);

    while($row = $subcategory_result->fetch_assoc()){
        echo '<option value="'.$row['id'].'">'.$row['subcategory'].'</option>';
    }
    exit;
}

// Fetch categories for the dropdown
$category_result = $conn->query("SELECT * FROM category");


?>


