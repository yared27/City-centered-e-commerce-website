<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['Security_Key'] != 'Site Moderator') {
  // The user is not logged in as a system manager
  header("Location: ../adminlogin.php");
  exit;
}

// The user is logged in as a system manager
echo "Welcome, " . $_SESSION['username'] . "! You are logged in as a " . $_SESSION['Security_Key'] . ".";
echo "<h1><i class='fa fa-globe'>&nbsp; page not built currently! Coming Soon!";
?>
