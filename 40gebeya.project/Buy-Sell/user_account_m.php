<?php
session_start();
include('connect.php');
if (!isset($_SESSION['login_user1'])) {
    header("location: managerlogin.php");
}

if (strlen($_SESSION['login_user1']) == 0) {
    header('location: managerlogin.php');
} else {
    if (isset($_POST['update'])) {
        if (isset($_POST['fullname']) && isset($_POST['contact'])) {
            $fullname = $_POST['fullname'];
            $contact = $_POST['contact'];
            $query = mysqli_query($conn, "update manager set fullname='$fullname',contact='$contact' where username='" . $_SESSION['login_user1'] . "'");
            if ($query) {
                echo "<script>alert('Your info has been updated');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all the required fields');</script>";
        }
    }

    if (isset($_POST['submit'])) {
        if (isset($_POST['cpass']) && isset($_POST['newpass']) && isset($_POST['cnfpass'])) {
            $sql = mysqli_query($conn, "SELECT password FROM manager WHERE password='" . $_POST['cpass'] . "' AND username='" . $_SESSION['login_user1'] . "'");
            $num = mysqli_fetch_array($sql);
            if ($num > 0) {
                $conn = mysqli_query($conn, "UPDATE manager SET password='" . $_POST['newpass'] . "' WHERE username='" . $_SESSION['login_user1'] . "'");
                echo "<script>alert('Password Changed Successfully !!');</script>";
            } else {
                echo "<script>alert('Current Password not match !!');</script>";
            }
        } else {
            echo "<script>alert('Please fill in all the required fields');</script>";
        }
    }
}
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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            <a class="navbar-brand" href="myShop.php">40Gebeya</a>
            
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav">
                <li> <img src="image/logo.jpg" alt="logo" width="50dvb"  ></a></li>
                
                
            </ul>

            <?php
            if(isset($_SESSION['login_user1'])){
            ?>
            <ul class="nav navbar-nav navbar-right">
            <li><img src="userimage.php" alt="User profile picture" width="45dvb" height="45dvb" style="border-radius: 50%; "></li>
                <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
                <li><a href="chat_m.php"><i class="fa fa-message"></i>Chat</a></li>
                <li><a href="myShop.php">MANAGER CONTROL PANEL</a></li>
                <li><a href="User_account_m.php"><span class="fa fa-gear"></span> Preferences </a></li>
                <li><a href="logout_m.php"><span class="fa fa-log-out"></span> Log Out </a></li>
                
            </ul>
            <?php
            }
            else if (isset($_SESSION['login_user2'])) {
            ?>
            <ul class="nav navbar-nav navbar-right">
            <li><img src="userimage.php" alt="User profile picture" width="45dvb" height="45dvb" style="border-radius: 50%; "></li>
                <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
                <li class="active"><a href="Itemlist.php"><span class="fas fa-store"></span> Shop </a></li>
                <li><a href="cart.php"><span class="fa fa-shopping-cart"></span> Cart  (<?php
                        if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]);
                            echo "$count";
                        }
                        else
                            echo "0";
                        ?>) </a></li>
                        <li><a href="chat_u.php"><i class="fa fa-message"></i>Chat</a></li>
                        <li><a href="User_account_m.php"><span class="fa fa-gear"></span> Preferences </a></li>
                <li><a href="logout_u.php"><span class="fa fa-sign-out"></span> Log Out </a></li>
                
            </ul>
            <?php        
            }
            else {
            ?>
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
            <?php
            }
            ?>

         
            
        </div>
    </div>
</nav>
   
<?php

include('connect.php');
if(!isset($_SESSION['login_user1'])){
    header("location: managerlogin.php");
    exit(); // Exit to prevent further execution
}

if(strlen($_SESSION['login_user1'])==0) {
    header('location: managerlogin.php');
    exit(); // Exit to prevent further execution
} else {
    $fullname = "";
    $email = "";
    $contact = "";

    // Fetch user information if available
    $query = "SELECT * FROM manager WHERE username = '{$_SESSION['login_user1']}'";
    $result = mysqli_query($conn, $query);

    // Check if user information is available
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Assign user information to variables
        $fullname = $row['fullname'];
        $email = $row['email'];
        $contact = $row['contact'];
    } else {
        echo "Error: Unable to fetch user information.";
    }
}
?>

    <div class="dashboard">
<div class="sect1">
    

   <form class="register-form" role="form" method="post">
   <fieldset><legend>User Info</legend>
<div class="form-group">
    <label class="info-title" for="fullname">Full Name<span>*</span></label>
    <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['fullname'];?>" id="fullname" name="fullname" required="required">
</div>

<div class="form-group">
    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo $row['email'];?>" readonly>
</div>
<div class="form-group">
    <label class="info-title" for="Contact No.">Contact No. <span>*</span></label>
    <input type="text" class="form-control unicase-form-control text-input" id="contact" name="contact" required="required" value="<?php echo $row['contact'];?>"  maxlength="10">
</div>
<button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Update</button>
   </fieldset></form>
                          </div>
<?php  ?>

<div class="sectmid"></div>

<div class="sect2">
                         
<form class="register-form" role="form" method="post" name="chngpwd" onSubmit="return valid();">
<fieldset><legend>Change Password</legend>
<div class="form-group">
    <label class="info-title" for="Current Password">Current Password<span>*</span></label>
    <input type="password" class="form-control unicase-form-control text-input" id="cpass" name="cpass" required="required">
</div>

<div class="form-group">
    <label class="info-title" for="New Password">New Password <span>*</span></label>
    <input type="password" class="form-control unicase-form-control text-input" id="newpass" name="newpass">
</div>
<div class="form-group">
    <label class="info-title" for="Confirm Password">Confirm Password <span>*</span></label>
    <input type="password" class="form-control unicase-form-control text-input" id="cnfpass" name="cnfpass" required="required" >
</div>
<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Change </button>

</fieldset>
</form> 



</div>

<div class="sectmid"></div>
<div class="sect1">
<img src="userimage.php" alt="User profile picture" class="userpfp">
<hr>
<form action="uploadpfp.php" method="post" enctype="multipart/form-data">
  <label for="image"><h2><i class="fa fa-picture-o" ></i></h2><i class="fa fa-plus"></i></label>
  <input type="file" id="image" name="image" required>
  <input type="submit" value="Upload Image" name="submit">
</form>
    </div>
</div></div></div>


</div>

<style>
    .dashboard{
        position: relative;
        top: 20dvb;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        left: 10dvb;
        width: fit-content;
        padding: 5dvb;
        gap: 5dvb;
        background-color: rgba(255, 255, 255, 0.3);
    }
    .sectmid{
        border-right: solid gray;
    }

</style>
   
</body>
</html>