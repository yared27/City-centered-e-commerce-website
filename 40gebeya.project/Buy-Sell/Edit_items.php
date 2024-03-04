<?php
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Welcome.css">
    <link rel="stylesheet" href="css/aboutus2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
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
    </nav><head>
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
    /* Styling for container */

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
    .form-area {
            padding: 0px 100px 100px 100px;
            background-color: #f8f9fa; /* Gray background color */
            border-radius: 10px; /* Rounded corners */
        }

        /* Custom styling for form inputs */
        .form-control {
            border-radius: 5px; /* Rounded corners for inputs */
        }
        
  </style>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

      <div class="list-group"><br><br><br><br><br><br><br><br>
    		<a href="myshop.php" class="list-group-item">My Shop</a>
    		<a href="View_items.php" class="list-group-item ">Shop Items</a>
    		<a href="Add_items.php" class="list-group-item ">Add Item</a>
    		<a href="Edit_items.php" class="list-group-item active">Edit Item</a>
    		<a href="Delete_items.php" class="list-group-item ">Delete Item</a>
        <a href="view_order_details.php" class="list-group-item ">Orders Detail</a>
    	</div>
    </div>
    


    
    
    <div class="col-xs-3"><br><br><br><br><br>
    <div class="dark-form" style="padding: 10px; background-color: #343a40;">
        <div style="text-align: center;">
            
            <p><h3 style="text-align: center; background-color:rgba(255, 255, 255, 0.5); border-radius:4dvb; color: #fff;" >Select Item to edit<hr></h3></p>
            <br>
        </div>
        <?php
        if (isset($_GET['submit'])) {
            $F_ID = $_GET['dfid'];
            $name = $_GET['dname'];
            $price = $_GET['dprice'];
            $description = $_GET['ddescription'];

            $query = mysqli_query($conn, "UPDATE item set
            name='$name', price='$price',
            description='$description' where F_ID='$F_ID'");
        }
        $query = mysqli_query($conn, "SELECT * FROM item f WHERE f.R_ID IN (SELECT r.R_ID FROM shops r WHERE r.M_ID='$user_check') ORDER BY F_ID");
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="list-group" style="text-align: center;">
                <?php
                echo "<b><a href='Edit_items.php?update={$row['F_ID']}' style='color: #fff;'>{$row['name']}</a></b>";
                ?>
            </div>
        <?php
        }
        ?>

        <?php
        if (isset($_GET['update'])) {
            $update = $_GET['update'];
            $query1 = mysqli_query($conn, "SELECT * FROM item WHERE F_ID=$update");
            while ($row1 = mysqli_fetch_array($query1)) {
        ?>
    </div>
</div>



    <style>
        /* Custom styling for form area */
        .dark-form {
            padding: 20px;
            background-color: #343a40; /* Dark background color */
            border-radius: 10px;
            color: #fff; /* Text color */
        }

        /* Custom styling for form inputs */
        .dark-form-input {
            background-color: #495057; /* Input background color */
            border: 1px solid #ced4da; /* Input border */
            color: #fff; /* Input text color */
            border-radius: 5px; /* Rounded corners for inputs */
        }

        /* Custom styling for form labels */
        .dark-form-label {
            color: #adb5bd; /* Label text color */
        }

        /* Custom styling for form button */
        .dark-form-button {
            background-color: grey; /* Button background color */
            border: none;
            border-radius: 5px; /* Rounded corners for button */
            color: #fff; /* Button text color */
            padding: 10px 20px; /* Padding for button */
            cursor: pointer;
        }

        /* Hover effect for button */
        .dark-form-button:hover {
            background-color: #343a40;
            color: white; /* Darker shade of button color on hover */
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-6"><br><br><br><br><br><br>
                <div class="dark-form">
                    <form action="Edit_items.php" method="GET">
                        <input class='input' type='hidden' name="dfid" value=<?php echo $row1['F_ID']; ?> />
                        <div class="form-group">
                            <label for="dname" class="dark-form-label"><span class="text-danger">*</span> Item Name: </label>
                            <input type="text" class="form-control dark-form-input" id="dname" name="dname" value=<?php echo $row1['name']; ?> placeholder="Your item name" required="">
                        </div>
                        <div class="form-group">
                            <label for="dprice" class="dark-form-label"><span class="text-danger">*</span> Item Price: </label>
                            <input type="text" class="form-control dark-form-input" id="dprice" name="dprice" value=<?php echo $row1['price']; ?> placeholder="Your item Price (INR)" required="">
                        </div>
                        <div class="form-group">
                            <label for="ddescription" class="dark-form-label"><span class="text-danger">*</span> Item Description: </label>
                            <input type="text" class="form-control dark-form-input" id="ddescription" name="ddescription" value=<?php echo $row1['description']; ?> placeholder="Your item Description" required="">
                        <br><div class="form-group">
                            <button type="submit" id="submit" name="submit" class="btn dark-form-button pull-right" onclick="display_alert()" value="Display alert box"> Save Changes </button>
                        </div><br></div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
}
}


  ?>
      
  </div>




</div>


<?php
mysqli_close($conn);
?>
</div>
</div>

  </body>
<br>
</html>