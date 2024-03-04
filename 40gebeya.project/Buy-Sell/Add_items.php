
<?php


if(isset($_POST['submit'])){ // Check if form is submitted
    $name = $conn->real_escape_string($_POST['name']);
    $price = $conn->real_escape_string($_POST['price']);
    $description = $conn->real_escape_string($_POST['description']);
    $images_path = $conn->real_escape_string($_POST['images_path']);
    
    // Rest of your code...
}
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<!DOCTYPE html>
<head>
    <title>40Gebeya</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Welcome.css">
  
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
            <li><a href=""><img src="userimage.php" alt="User" width="45dvb" height="45dvb" style="border-radius: 50%; "></a></li>
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
  
   

    /* Styling for list group */
    .list-group {
      position: relative;
      border-radius: 5dvb;
    }

    /* Styling for list group items */
    .list-group-item {
      background-color: #f8f9fa; /* Light grey background for list items */
      border-color: #343a40; /* Grey border color */
      
    }

    .list-group-item.active {
      background-color: #343a40; /* Grey background for active list item */
    }
    .list-group-item.active:hover {
      background-color: #6c757d; /* Grey background for active list item */
    }

    /* Styling for table background */
    .table-striped {
      background-color: #f8f9fa; /* Light grey background for table */
    }

    /* Styling for checkboxes */
    input[type="checkbox"] {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      width: 16px;
      height: 16px;
      border: 2px solid #6c757d; /* Grey border */
      border-radius: 4px;
      outline: none;
      cursor: pointer;
    }

    input[type="checkbox"]:checked {
      background-color: #6c757d; /* Grey background when checked */
    }

    /* Styling for table header */
    .thead-dark th,td {
      background-color: #343a40; /* Dark grey background for table header */
      color: #fff; /* White text color for table header */
    }

    /* Styling for table rows */
    tbody tr:nth-child(even) {
      background-color: #f8f9fa; /* Light grey background for even rows */
    }

  


  
form {
  
  color:aliceblue;
  background-color: #1f1f1f;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

form input[type="text"], form select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
  color:black;
}

form input[type="submit"] {
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: none;
  color: #ffffff;
  background-color: gray;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #0056b3;
}
.holder{
  width: fit-content;
  position: absolute;
  left: 35%;
  top: 10%;
}
.holderx{
  width: 170dvb;
  left: 10%;
  position: absolute;


}
</style>



    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    <div class="holderx">
    	<div class="col-xs-3" style="text-align: center;">
<br><br><br><br><br><br><br><br>
      <div class="list-group">
    		<a href="myshop.php" class="list-group-item">My Shop</a>
    		<a href="View_items.php" class="list-group-item ">Shop Items</a>
    		<a href="Add_items.php" class="list-group-item active">Add Item</a>
    		<a href="Edit_items.php" class="list-group-item ">Edit Item</a>
    		<a href="Delete_items.php" class="list-group-item ">Delete Item</a>
        <a href="view_order_details.php" class="list-group-item ">Orders Detail</a>
    	</div>
      </div></div>
    
<div class="form">

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

<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></head>
<body>

<div class="holder">
<form action="inserttry.php" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price" name="price"><br>
  <label for="description">Description:</label><br>
  <input type="text" id="description" name="description"><br>
  <label for="category_id">Category:</label><br>
  <select id="category_id" name="category_id">
    <?php foreach($categories as $category): ?>
      <option value="<?= $category['id'] ?>"><?= $category['categoryName'] ?></option>
    <?php endforeach; ?>
  </select><br>
  <label for="subcategory_id">Subcategory:</label><br>
  <select id="subcategory_id" name="subcategory_id">
    <!-- Subcategories will be loaded here -->
  </select><br>
  <label for="images_path">Image:</label><br>
  <input type="file" id="images_path" name="images_path"><br> <!-- Add this line -->
  <input type="submit" value="Submit">
</form>
</div>

<script>
$(document).ready(function() {
  var message = "<?php echo $_SESSION['message']; ?>";
  var error = "<?php echo $_SESSION['error']; ?>";

  if (message) {
    alert(message);
    <?php unset($_SESSION['message']); ?>
  }

  if (error) {
    alert(error);
    <?php unset($_SESSION['error']); ?>
  }
});
</script>

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

</div>

    </div>



  </body>
</html>