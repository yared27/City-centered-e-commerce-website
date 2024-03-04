<?php
session_start();

if(!isset($_SESSION['login_user1'])){
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
else if (isset($_SESSION['login_user1'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
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

   
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get categories
$sql = "SELECT id, categoryName FROM category";
$result = $conn->query($sql);

$categories = [];
while($row = $result->fetch_assoc()) {
  $categories[] = $row;
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<form action="inserttry.php" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price" required><br>
  <label for="description">Description:</label><br>
  <input type="textarea" id="description" name="description" required><br>
  <label for="category_id">Category:</label><br>
  <select id="category_id" name="category_id" required>
    <?php foreach($categories as $category): ?>
      <option value="<?= $category['id'] ?>"><?= $category['categoryName'] ?></option>
    <?php endforeach; ?>
  </select><br>
  <label for="subcategory_id">Subcategory:</label><br>
  <select id="subcategory_id" name="subcategory_id" required>
    <!-- Subcategories will be loaded here -->
  </select><br>
  <label for="images_path">Image:</label><br>
  <input type="file" id="images_path" name="images_path" required><br> <!-- Add this line -->
  <input type="submit" value="Submit">
</form>

<script>
$(document).ready(function() {
  $('#category_id').change(function() {
    var categoryId = $(this).val();

    $.ajax({
      url: 'get_subcategories.php',
      type: 'post',
      data: {category_id: categoryId},
      success: function(response) {
        $('#subcategory_id').html(response);
      }
    });
  });
});
</script>

</body>
</html>




   
</body>
</html>