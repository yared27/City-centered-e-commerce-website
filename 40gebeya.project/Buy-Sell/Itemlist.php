<?php
session_start();

if(!isset($_SESSION['login_user2'])){
    header("location: customerlogin.php"); 
}
?>

<html>
<head>
    <title> Explore | 40Gebeya </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/Itemlist.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: repeat-y; background-size: cover;">

<button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="fa fa-chevron-up"></span>
</button>

<script type="text/javascript">
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
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
                <li><a href="myShop.php">MANAGER CONTROL PANEL</a></li>
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
.item-container {
    background-color: rgba(50, 50, 50,1); /* Greyish and slightly transparent black */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 2px 2px 2px 2px black;

}

.item-info {
    transition: all 0.3s ease;
}

.item-info:hover {
    color: #FF5733; /* Change text color when hovered */
}

.item-info:hover img {
    border-color: #FF5733;
    transform: scale(1.05);
}
.container-fluid{
  position: relative;
  top: 10dvb;
}
</style>
<div class="container-fluid">

<div class="search-cont">
                <form method="post" action="" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="search" id="search" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" name="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
            </div>
<br><br><br><br>
    <!-- Display all items from the item table -->
    <?php
    require 'connection.php';
    $conn = Connect();

    $search = "";
    if(isset($_POST['submit'])){
        $search = $_POST['search'];
    }

    $sql = "SELECT * FROM item WHERE options = 'ENABLE' AND name LIKE '%$search%' ORDER BY F_ID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $count=0;

        while($row = mysqli_fetch_assoc($result)){
            if ($count == 0)
                echo "<div class='row'>";

            ?>
            <div class="col-md-2 col-sm-4 col-xs-6">
    <form method="post" action="cart.php?action=add&id=<?php echo $row['F_ID']; ?>">
        <div class="item-container text-center">
            <a href="details.php?id=<?php echo $row['F_ID']; ?>" style="text-decoration: none; color: inherit;">
                <div class="image-container" style="position: relative; overflow: hidden; border-radius: 10px; margin-bottom: 10px;">
                    <img src="<?php echo $row['images_path']; ?>" class="img-responsive rounded" style="width: 100%; border: 2px solid transparent; transition: all 0.3s ease;">
                </div>
                <div class="item-info">
                <div class="item-details">
        <h4 class="text-uppercase"><?php echo ucfirst($row['name']); ?></h4>

        <h5 class="text-danger"><i class="fas fa-money-bill"></i> ETB <?php echo $row['price']; ?></h5>
    </div>
                </div>
            </a>
            <div class="quantity-container">
    <div class="input-group">
        <label for="quantity" class="input-group-addon" style="background-color: #2c3e50; color: #fff; border: none;">Quantity:</label>
        <input type="number" id="quantity" min="1" max="30" name="quantity" class="form-control" value="1" style="width: 60px;">
    </div>
</div>

            <input type="hidden" name="hidden_name" value="<?php echo $row['name']; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">
            <input type="hidden" name="hidden_RID" value="<?php echo $row['R_ID']; ?>">
            <button type="submit" name="add" class="btn btn-success btn-sm" style="margin-top: 10px; background-color: #2c3e50; color: #fff;">Add to Cart <i class="fa fa-shopping-cart"></i> </button>
        </div>
    </form>
</div>

            <?php
            $count++;
            if($count==5)
            {
                echo "</div>";
                $count=0;
            }
        }
    }
    else
    {
        ?>
        <div class="container">
            <div class="jumbotron">
                <center>
                    <label style="margin-left: 5px;color: red;"> <h1>Oops! No ITEM is available.</h1> </label>
                </center>
                <style>
                    .jumbotron{
                        background-color: rgba(255, 255, 255, 0.5);
                        position:absolute ;
                        top: 15%;
                        border-radius: 50px;
                    }
                </style>
            </div>
        </div>
        <?php
    }
    ?>
</div>

</body>
</html>
