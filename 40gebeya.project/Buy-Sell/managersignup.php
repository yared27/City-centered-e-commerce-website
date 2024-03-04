<html>

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

<?php
if(isset($_SESSION['login_user1'])){

?>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
        <li><a href="myshop.php">Seller Panel</a></li>
        <li><a href="logout_m.php"><span class="fa fa-log-out"></span>Log Out</a></li>
      </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
?>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="far fa-user"></span>Welcome<?php echo $_SESSION['login_user2']; ?> </a></li>
        <li><a href="Itemlist.php"><span class="fas fa-store"></span> Shop </a></li>
        <li><a href="cart.php"><span class="fa fa-shopping-cart"></span> Cart
          (<?php
          if(isset($_SESSION["cart"])){
          $count = count($_SESSION["cart"]); 
          echo "$count"; 
        }
          else
            echo "0";
          ?>)
         </a></li>
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



<div id="english-content">
    <div class="wrapper">
      <form action="manager_registered_success.php" method="post">
        <h1>Sign up</h1>
        <div class="input-box">
          <input name="fullname" type="text" placeholder="Name" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input name="username" type="text" placeholder="Username" required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input name="email" type="text" placeholder="Email" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="input-box">
          <input name="password" type="password" placeholder="Password" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="input-box">
          <input name="contact" type="number" placeholder="Phone Number | +251 " required>
          <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
          <input name="address" type="text" placeholder="Adresss" required>
          <i class='bx bxs-lock-alt' ></i>
        </div>
        
        
        <button type="submit" class="btn">Sign up</button>
        <div class="register-link">
          <p>Already have an account? <a href="managerlogin.php">Sign in</a></p>
        </div>
      </form>
  </div>













    </body>

</html>