<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['Security_Key'] != 'Customer Support') {
  // The user is not logged in as a system manager
  header("Location: ../adminlogin.php");
  exit;
}

// The user is logged in as a system manager

?>


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
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  
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
   
          <a class="navbar-brand" href="courier_company.php">40Gebeya </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          
          <li><a href="chat.php"><i class="fa fa-message"></i>Chat</a></li>   
          <li><a href="#"><?php echo "Welcome, " . $_SESSION['username'] . ".";?></a></li>
            <li><?php


?></li>
                <li><a href="logout_a.php"><span class="fa fa-log-out"></span> Log Out </a></li>
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
</header>

<body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;"
>
<br>
<style>
    .headings{
        background-color: #1f1f1f;
        padding: 2dvb;
        border-radius: 2dvb;
        width: 60%;
        text-align: center;
        position: relative;
        top: 0%;
        left: 45dvb;
    }
    .contact-left{
        position: relative;
    }
</style>
    



    <div class="english-content">
        <div class="contact-container">
            <div class="headings">
     <h2><?php
     echo "Welcome, " . $_SESSION['username'] . "! You are logged in as a " . $_SESSION['Security_Key'] . ".";
     ?></h2></center>
     
     <br>


            </div></div></div>
</body>
</html>
