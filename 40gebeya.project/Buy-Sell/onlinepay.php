<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<head>
    <title>Online Payment | 40Gebeya</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  
    <link rel="stylesheet" type="text/css" href="css/COD.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

<?php


if(!isset($_SESSION['login_user2']) || !isset($_SESSION['cart'])){
    header("location: customerlogin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["payment_method"])) {
        $payment_method = $_POST["payment_method"];
        
        // Fetch last inserted order ID
        $query = "SELECT F_ID FROM ORDERS ORDER BY order_date DESC LIMIT 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $order_id = $row['F_ID'];
        
        // Update payment method for the last order
        $update_query = "UPDATE ORDERS SET payment_method = '$payment_method' WHERE F_ID = '$order_id'";
        mysqli_query($conn, $update_query);
    }
}

$order_id = null; // Initialize order_id variable

// Fetch the order ID for the logged-in user
$query = "SELECT F_ID 
          FROM ORDERS 
          WHERE username = '{$_SESSION['login_user2']}' 
          ORDER BY order_date DESC 
          LIMIT 1";

$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $order_id = $row['F_ID'];
}

?>



<style>
        /* Add your custom styles here */
        .payment-options {
            margin-top: 20px;
            text-align: center;
        }
        .btn {
            background-color: #555; /* Dark gray button */
            color: #ccc; /* Light gray text */
        }
        .btn:hover {
            background-color: #777; /* Darker gray hover effect */
        }
        .jumbotron {
            background-color: #333; /* Even darker gray for jumbotron */
            border: 1px solid #666; /* Slightly lighter border */
        }
        .jumbotron h1,
        .jumbotron p {
            color: #ccc; /* Light gray text inside jumbotron */
        }
    </style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span class="fa fa-chevron-up"></span>
    </button>
    <div class="container">
        <div class="row">
            <div class="col-md-6"><br>
                <div class="jumbotron">
                    <h2 class="text-center">Online Payment</h2>
                    <p class="text-center">Select your payment option below.</p>
                    <div id="payment-options" class="payment-options">
                        <!-- Payment buttons will be dynamically added here -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                    <a href="onlinepay.php?order_id=<?php echo $order_id; ?>"><button class="btn btn-success"><span class="fa fa-credit-card"></span> Pay Online</button></a>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                            <a href="COD.php?order_id=<?php echo $order_id; ?>"><button class="btn btn-success"><span class="fas fa fa-money-bill-1"></span> Cash On Delivery</button></a>
                            </div>
                </div>
            </div> 
            <?php


// Your payment processing code here
?>

        </div>
    </div>
    <script type="text/javascript">
        // Scroll to top function
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fetch payment methods via AJAX
            $.ajax({
                url: 'fetch_payment_methods.php', // Assuming your PHP script to fetch data is named fetch_payment_methods.php
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // On success, generate buttons
                    if (data && data.length > 0) {
                        var buttonsHTML = '';
                        data.forEach(function(payment) {
                            buttonsHTML += '<button type="button" class="btn btn-primary btn-lg payment-method" data-payment-id="' + payment.payment_id + '">' + payment.payment_name + '</button>&nbsp;<hr>';
                        });
                        $('#payment-options').html(buttonsHTML);
                    } else {
                        $('#payment-options').html('<p>No payment methods available.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching payment methods:', error);
                    $('#payment-options').html('<p>Error fetching payment methods. Please try again later.</p>');
                }
            });

            // Handle click on payment method button
            $(document).on('click', '.payment-method', function() {
                var paymentId = $(this).data('payment-id');
                // You can perform any action you want here when a payment method button is clicked
                console.log('Selected Payment Method ID:', paymentId);
            });
        });
    </script>


    </body>
</html>