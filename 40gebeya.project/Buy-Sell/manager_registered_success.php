<!DOCTYPE html>
<html>
<head>
	<title>40Gebeya</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/welcome.css">
  <link rel="stylesheet" href="css/confirmation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  
</head>
<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
   <img src="image/logo.jpg" alt="logo" width="50dvb"  ></a>

      <a class="navbar-brand" href="index.php">40Gebeya </a>
    </div>

    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li class="active" ><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <div class="switch">
    <input
      id="language-toggle"
      class="check-toggle check-toggle-round-flat"
      type="checkbox"
    />
    <label for="language-toggle"></label>
    <span class="on">EN</span>
    <span class="off">አማ</span>
  </div>
      </ul>



<ul class="nav navbar-nav navbar-right">
        <li><a href="signup" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-pencil"></span> Sign Up <span class="caret"></span> </a>
            <ul class="dropdown-menu">
          <li> <a href="customersignup.php"> User Sign-up</a></li>
          <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
        </ul>
        </li>

        <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-sign-in"></span> Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li> <a href="customerlogin.php"> User Login</a></li>
          <li> <a href="managerlogin.php"> Manager Login</a></li>
         
        </ul>
        </li>
      </ul>


   </div>

  </div>
</nav>


<?php

require 'connection.php';
$conn = Connect();

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into MANAGER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;"
>
  <div id="english-content">
    <div class="logout-message">
      <center><img src="image/bann.png" alt=""></center>
      <center><h1>you have successfully Registered!</h1></center>
      <center><div class="name-info">
        <div class="name-info-submit"><a href="managerlogin.php"><h3>Login</h3></a>
      </div></center>
  </div>
</body>
<script type="text/JavaScript" src="lang-conf-reg.js"></script>
</html>