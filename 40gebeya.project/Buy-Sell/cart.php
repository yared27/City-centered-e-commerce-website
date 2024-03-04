<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

  
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
                <li><a href="chat_u.php"><i class="fa fa-message"></i>Chat</a></li>
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
                <li><a href="Itemlist.php"><span class="fas fa-store"></span> Shop </a></li>
                <li class="active"><a href="cart.php"><span class="fa fa-shopping-cart"></span> Cart  (<?php
                        if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]);
                            echo "$count";
                        }
                        else
                            echo "0";
                        ?>) </a></li>
                        <li><a href="chat_u.php"><i class="fa fa-message"></i>Chat</a></li>
                        <li><a href="User_account_c.php"><span class="fa fa-gear"></span> Preferences </a></li>
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
            width: fit-content;
            margin: 0 auto;
            padding: 20px;
           
        }

        .content-cont {
            background-color: #333; /* Dark container background color */
            padding: 20px;
            border-radius: 10px; width: fit-content;
        }

        h1 {
            color: #fff; /* Light heading text color */
        }
        .table-responsive {
            padding-left: 100px;
            padding-right: 100px;
        }

        .table {
            
            background-color: #333; /* Dark table background color */
            color: #fff; /* Light text color */
            border-collapse: collapse;
        }

        th, td {width: fit-content;
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd; /* Light border color */
        }

        th ,tr{width: fit-content;
            background-color: #212121;
            color: #fff; 
        }

        .btn {
            color: #fff; /* Light text color */
            background-color: #007bff; /* Primary button color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-danger {
            background-color: #dc3545; /* Danger button color */
        }

        .btn-warning {
            background-color: #ffc107; /* Warning button color */
        }

        .btn-success {
            background-color: #28a745; /* Success button color */
        }

        .btn-danger:hover, .btn-warning:hover, .btn-success:hover {
            filter: brightness(85%); /* Reduce brightness on hover */
        }

        .fa {
            margin-right: 5px;
        }

        .pull-right {
            float: right;
        }
   </style> 
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <?php
// Check if 'hidden_RID' is set in $_POST before accessing it
if(isset($_POST['hidden_RID'])) {
    $hidden_RID = $_POST['hidden_RID'];
    // Access other $_POST values if needed
    // Perform further processing
} else {
    // Handle the case when 'hidden_RID' is not set
    // For example, set a default value or display an error message
    echo "Restaurant ID not provided.";
}
?>
  <div class="container2">
      <div class="content-cont">
        <h1>Your Shopping Cart</h1>
        
        
      </div>
      
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price Details</th>
                    <th width="15%">Order Total</th>
                    
                </tr>
            </thead>
            <?php  
                $total = 0;
                foreach($_SESSION["cart"] as $keys => $values)
                {
            ?>
            <tr style="background-color: #212121; color: #fff; ">
                <td><?php echo $values["item_name"]; ?></td>
                <td><?php echo $values["item_quantity"] ?></td>
                <td>ETB <?php echo $values["item_price"]; ?></td>
                <td>ETB <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                
            </tr>
            <?php 
                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
            ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">ETB  <?php echo number_format($total, 2); ?></td>
                
            </tr>
        </table>
        <?php
            echo '<a href="cart.php?action=empty"><button class="btn btn-danger" style="background-color:gray;"><span class="fa fa-trash"></span> Empty Cart</button></a>&nbsp;<a href="itemlist.php"><button class="btn btn-warning" style="background-color:gray;">Continue Shopping</button></a>&nbsp;<a href="payment.php"><button class="btn btn-success pull-right" style="background-color:gray;"><span class="fa fa-share-alt"></span> Check Out</button></a>';
        ?>
    </div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?>
  <div class="container">
      <div class="conttent-cont">
        <h1>Your Shopping Cart</h1>
        <p>Oops!your cart is empty. Go back and <a href="itemlist.php">order now.</a></p>
        
      </div>
      +
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "item_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'itema_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="cart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
else
{
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["item_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("item has been removed")</script>';
echo '<script>window.location="cart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="cart.php"</script>';

}
}
}


?>
<?php

?>

    </body>
</html>