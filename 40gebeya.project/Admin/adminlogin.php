<html>
<head>
    <title>40Gebeya</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Welcome.css">
    <link rel="stylesheet" href="css/customersignup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  
  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;"
>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="fa fa-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

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

       </div>

      </div>
    </nav>
    <div id="english-content">
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $security_key = $_POST['Security_Key'];
  $captcha = $_POST['captcha'];

  // Verify the captcha
  if ($captcha != $_SESSION['captcha_answer']) {
    echo "<script>alert('Incorrect captcha answer.');</script>";
    
    
  }

  // Generate a simple arithmetic captcha
  $num1 = rand(1, 10);
  $num2 = rand(1, 10);
  $_SESSION['captcha_answer'] = $num1 + $num2;
}

?>
<div class="wrapper">
  <form action="session.php" method="post" enctype="multipart/form-data">
    <h1>Log in</h1>
    <div class="input-box">
      <input name="username" type="text" placeholder="Username" required>
      <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
      <input name="password" type="password" placeholder="Password" required>
      <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="input-box">
      <select name="Security_Key" required>
        <option value="">Select User Type</option>
        <option value="System manager">System manager</option>
        <option value="Customer Support">Customer Support</option>
        <option value="Courier Company">Courier Company</option>
        <option value="Site Moderator">Site Moderator</option>
      </select>
      <i class='bx bxs-user-check'></i>
    </div>
    <div class="input-box">
      <?php
      $num1 = rand(1, 10);
      $num2 = rand(1, 10);
      $_SESSION['captcha_answer'] = $num1 + $num2;
      echo "<p>$num1 + $num2 = ?</p>";
      ?>
      <input type="text" name="captcha" placeholder="Enter the sum" required>
      <i class='bx bxs-calculator'></i>
    </div>
    <button type="submit" class="btn">Log in</button>
    <div class="register-link">
      <p>Don't have an account? <a href="Adminsignup.php">Sign up</a></p>
    </div>
  </form>
</div>
</div>

    </body>
</html>