<?php
session_start();

if (!isset($_SESSION['login_user2'])) {
  header("location: customerlogin.php");
}

?>
<?php
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

// Get image data from database
$result = $db->query("SELECT userprofile FROM customer WHERE username = '".$_SESSION['login_user2']."'");
if($result->num_rows > 0){
  $imgData = $result->fetch_assoc();

  // Render image
  header("Content-type: image/jpg"); 
  echo $imgData['userprofile']; 
}else{
  echo 'Image not found...';
}
?>
