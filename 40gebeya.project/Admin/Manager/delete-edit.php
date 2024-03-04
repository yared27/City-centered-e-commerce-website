<?php
require 'connect.php';

function fetchCategories($conn) {
    $sql = "SELECT id, categoryName FROM category";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["id"] . "'>" . $row["categoryName"] . "</option>";
        }
    } else {
        echo "0 results";
    }
}

function deleteCategory($conn, $categoryId) {
    // Delete the subcategories of the category
    $sql = "DELETE FROM subcategory WHERE category_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $categoryId);
    $stmt->execute();

    // Delete the category
    $sql = "DELETE FROM category WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $categoryId);
    $stmt->execute();
}

function editCategory($conn, $categoryId, $newName) {
    $sql = "UPDATE category SET categoryName = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newName, $categoryId);
    $stmt->execute();
}

function editSubcategory($conn, $subcategoryId, $newName) {
    $sql = "UPDATE subcategory SET subcategory = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newName, $subcategoryId);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Category Dropdown</h2>

<select id="categoryDropdown">
  <?php fetchCategories($conn); ?>
</select>

<h2>Subcategory Input</h2>

<input type="text" id="subcategoryInput" placeholder="Enter subcategory">

<button onclick="addSubcategory()">Add Subcategory</button>
<button onclick="deleteCategory()">Delete Category</button>
<button onclick="editCategory()">Edit Category</button>
<button onclick="editSubcategory()">Edit Subcategory</button>

<script>
function addSubcategory() {
  var category = document.getElementById('categoryDropdown').value;
  var subcategory = document.getElementById('subcategoryInput').value;

  // Add the subcategory to the selected category in your database
  console.log('Adding subcategory ' + subcategory + ' to ' + category);

  // Clear the input field
  document.getElementById('subcategoryInput').value = '';
}

function deleteCategory() {
  var category = document.getElementById('categoryDropdown').value;

  // Delete the selected category and its subcategories from your database
  console.log('Deleting category ' + category);
}

function editCategory() {
  var category = document.getElementById('categoryDropdown').value;
  var newName = prompt("Enter the new name for the category:");

  // Edit the name of the selected category in your database
  console.log('Editing category ' + category + ' to ' + newName);
}

function editSubcategory() {
  var subcategory = document.getElementById('subcategoryInput').value;
  var newName = prompt("Enter the new name for the subcategory:");

  // Edit the name of the entered subcategory in your database
  console.log('Editing subcategory ' + subcategory + ' to ' + newName);

  // Clear the input field
  document.getElementById('subcategoryInput').value = '';
}
</script>

</body>
</html>
