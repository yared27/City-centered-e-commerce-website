<?php
include('connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $security_key = $_POST['Security_Key'];
  $captcha = $_POST['captcha'];

  // Verify the captcha
  if ($captcha != $_SESSION['captcha_answer']) {
    echo "<script>alert('Incorrect captcha answer.');</script>";
    exit;
  }

  // Verify the username, password, and security key with your database
  $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ? AND Security_Key = ?");
  $stmt->bind_param("sss", $username, $password, $security_key);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // If verification is successful, set session variables and redirect
    $_SESSION['username'] = $username;
    $_SESSION['Security_Key'] = $security_key;

    // Redirect to the appropriate page based on the security key
    switch ($security_key) {
      case 'System manager':
        header("Location: Manager/system_manager.php");
        exit;
      case 'Customer Support':
        header("Location: Support/customer_support.php");
        exit;
      case 'Courier Company':
        header("Location: Courier/courier_company.php");
        exit;
      case 'Site Moderator':
        header("Location: Moderator/site_moderator.php");
        exit;
      default:
        echo "<script>alert('Invalid security key.');</script>";
        exit;
    }
  } else {
    echo "<script>alert('Invalid username, password, or security key.');</script>";
  }
}
?>
