<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<html>

  <head>
    <title> Explore | 40Gebeya </title>
  </head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" type = "text/css" href ="css/Itemlist.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/ujquery.min.js"></script>
  <script type="text/javascript" src="js/ubootstrap.min.js"></script>
  <link rel="stylesheet" href="css/welcome.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    

    <body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: repeat-y; background-size: cover;"
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
          <a class="navbar-brand" href="index.php">40Gebeya</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myshop.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="fa fa-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li>
            <form method="post" action="search.php">
    <label for="search">Search</label>
    <input type="search" id="search" name="search">
    <button type="submit" name="submit">Search</button>
  </form>
            </li>
            <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active" ><a href="Itemlist.php"><span class="fas fa-store"></span> Shop </a></li>
            <li><a href="cart.php"><span class="fa fa-shopping-cart"></span> Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
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

   
    <style>

  .container2 {
    max-width: 40%; /* Limit container width to half of the screen */
    margin: 50px auto; /* Center the container */
    background-color: #222; /* Darker grey container background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Box shadow for container */
    display: flex;
  }
  .sect-m{
    width: 50%;
  }
  form label, form input[type="search"], form button {
    color: #fff; /* White text for form elements */
  }
  form button {
    background-color: #007bff; /* Blue button background */
    color: #fff; /* White text for button */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  form button:hover {
    background-color: #0056b3; /* Darker blue on hover */
  }
  img {
    max-width: 100%; /* Ensure images don't overflow their containers */
    height: auto;
    border-radius: 5dvb;
    display: block;
    margin: 20px auto; /* Center images */
  }
  .sect-2{
    
    bottom: 10%;
  }
</style>
</head>
<body>
<br><br>
<div class="container2">
 

<?php
include 'connect.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$stmt = $conn->prepare("SELECT * FROM item WHERE F_ID = ?");
$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<div class='sect-1'>";
    echo "<h1>" . $row['name'] . "</h1>";
    echo "<img src='" . $row['images_path'] . "' alt='" . $row['name'] . "'>";
    echo "</div><br>";

    echo "<div class='sect-m'>";

    echo "</div><br>";

    echo "<div class='sect-2'>";
    echo "<br><br><br><br><br><br><br><br><br><br><p>" . $row['description'] . "</p>";
    echo "<p>Price: ETB " . $row['price'] . "</p>";

    // Form for adding to cart
    echo '<form method="post" action="cart.php?action=add&id=' . $row['F_ID'] . '">';
    echo '<div class="form-group">';
    echo '<label for="quantity">Quantity:</label>';
    echo '<input type="number" id="quantity" name="quantity" min="1" max="25" class="form-control" value="1">';
    echo '</div>';
    echo '<input type="hidden" name="hidden_name" value="' . $row['name'] . '">';
    echo '<input type="hidden" name="hidden_price" value="' . $row['price'] . '">';
    echo '<input type="hidden" name="hidden_RID" value="' . $row['R_ID'] . '">';
    echo '<button type="submit" name="add" class="btn btn-success">Add to Cart</button>';
    echo '</form>';

    echo "</div>";
} else {
    echo "<p>Item not found.</p>";
}

$stmt->close();
$conn->close();
?>

</body>
</html>