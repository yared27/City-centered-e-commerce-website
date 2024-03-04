<?php
require 'connection.php';
$conn = Connect();

session_start();

$user_check = $_SESSION['username'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT username FROM admin WHERE username = '$user_check' AND Security_Key = 'System manager'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];

if (!$login_session) {
    // Redirect if the user is not logged in as a System Manager
    header("location: adminlogin.php");
    exit;
}
?>
