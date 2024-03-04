<?php
session_start();

if (!isset($_SESSION['login_user1'])) {
  header("location: customerlogin.php");
}

?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
      $image = $_FILES['image']['tmp_name'];
      $imgContent = addslashes(file_get_contents($image));
      
      // Database details
      $dbHost     = 'localhost';
      $dbUsername = 'root';
      $dbPassword = '';
      $dbName     = '40gebeya';
      
      // Create connection and select DB
      $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
      
      // Check connection
      if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
      }
      
      // Insert image content into database
      $update = $db->query("UPDATE item SET images_path = '$imgContent' WHERE username = '".$_SESSION['login_user1']."'");
      if($update){
        echo "<script type='text/javascript'>alert('File uploaded successfully.');</script>";
        header("location: Add_items.php");
      }else{
        echo "File upload failed, please try again.";
      } 
    }else{
      echo "Please select an image file to upload.";
    }
  }
?>
