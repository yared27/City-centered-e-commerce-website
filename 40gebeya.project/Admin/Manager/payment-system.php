<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['Security_Key'] != 'System manager') {
  // The user is not logged in as a system manager
  header("Location: ../adminlogin.php");
  exit;
}

// The user is logged in as a system manager
echo "Welcome, " . $_SESSION['username'] . "! You are logged in as a " . $_SESSION['Security_Key'] . ".";
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

       </div>

      </div>
    </nav>
</header>

<body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;"
>
    
<link rel="stylesheet" href="css/adminsys.css">

<style>
  
   /* Style for the buttons */
   .button {
        display: inline-block;
        padding: 10px 20px;
        background-color:rgba(83, 76, 76, 0.5);
        color:white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        margin: 1dvb;
        cursor: pointer;
            
    }
    
    /* Hover effect */
    .button:hover {
        background-color: #08376c;
    }

    .all-cont{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        position: absolute;
        bottom: 5dvb;
        left: 25dvb;
        width: fit-content;
        
    }
.select-previewer{
        height: 65dvb;
        display: flex;
        flex-direction: row;      

    }
.search-cont{
        width: 24%;
        border: solid rgba(255, 255, 255, 0.5);
        border-radius: 5%;
        margin: 1%;
    }
.search-result-cont{
    width: 73%;
    border: solid rgba(255, 255, 255, 0.5);

        display: flex;
        flex-direction: column;
        margin: 1%;
}
    .selector-cont{
        display: flex;
        flex-direction: row;
        position: relative;

        font-size: 2.5dvb;

    }


.search-cont {
    display: table;
    width: 25%;
    border-collapse: collapse;
}

form {
    display: table-row;
}

form input, form button {
    display: table-cell;
    padding: 10px;

}



.fa-search {
    margin-right: 5px;
}

.search-results {
    display: table;
    
    border-collapse: collapse;
    
}

.search-results div {
    display: table-row;
}

.search-results div span {
    display: table-cell;
    padding: 10px;
    border: 1px solid #ddd;
}

.uacm {
        
  padding: 1dvb;
        border-radius: 5px;
    }
    .uacm form {
      
        display: block;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        
    }
    .uacm input[type="text"], .uacm input[type="password"] {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
    }
    .uacm input[type="submit"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        color: white;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
    }
    .uacm input[type="submit"]:hover {
        background-color: rgba(0, 0, 0, 0.5);b3;
    }

</style>
    <?php
        // Include the database connection file
        include 'connect.php';
    ?>

  <div id="english-content" class="all-cont">
 <div class="selector-cont">
    
      
      <!-- Button for USER -->
      <a href="system_manager.php" class="button"><span>USER</span></a>

<!-- Button for SELLER -->
<a href="system_manager-seller.php" class="button"><span>SELLER</span></a>

<!-- Button for SHIPPING -->
<a href="system_manager-shipping.php" class="button active"><span>SHIPPING</span></a>

<!-- Button for CATEGORIES -->
<a href="insert-catagoery.php" class="button"><span>CATEGORIES</span></a>

<!-- Button for CATEGORIES -->
<a href="insert-subcategory.php" class="button"><span>SUB-CATEGORIES</span></a>

<!-- Button for PAYMENT SYSTEMS -->
<a href="payment-system.php" class="button"><span>PAYMENT SYSTEMS</span></a>

<!-- Button for WEBSITE PERFORMANCE -->
<a href="Database_status.php" class="button"><span>DBMS viewport</span></a>

    
  </div>
  <div class="select-previewer">
  <div class="search-cont">
  <style>
   /* Style for the buttons */
   .button {
        display: inline-block;
        padding: 10px 20px;
        background-color:rgba(83, 76, 76, 0.5);
        color:white;
        text-decoration: none;
        border: none;
        border-radius: 5px;
        margin: 1dvb;
        cursor: pointer;
    }
    
    /* Hover effect */
    .button:hover {
        background-color: #08376c;
    }

    .all-cont{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        position: absolute;
        bottom: 5dvb;
        left: 25dvb;
        width: fit-content;
    }

    .select-previewer{
        height: 65dvb;
        display: flex;
        flex-direction: row;      
    }

    .search-cont{
        width: 100%;
        border: solid rgba(255, 255, 255, 0.5);
        border-radius: 5%;
        margin: 1%;
    }

   

    .selector-cont{
        display: flex;
        flex-direction: row;
        position: relative;
        font-size: 2.5dvb;
    }

    

    form {
        display: table-row;
    }

    form input, form button {
        display: table-cell;
        padding: 10px;
    }

    .fa-search {
        margin-right: 5px;
    }

    .search-results {
        display: table;
        border-collapse: collapse;
    }

    .search-results div {
        display: table-row;
    }

    .search-results div span {
        display: table-cell;
        padding: 10px;
        border: 1px solid #ddd;
    }

    .uacm {
        padding: 1dvb;
        border-radius: 5px;
    }

    .uacm form {
        display: block;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .uacm input[type="text"], .uacm input[type="password"] {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .uacm input[type="submit"] {
        padding: 10px;
        border-radius: 5px;
        border: none;
        color: white;
        background-color: rgba(255, 255, 255, 0.5);
        cursor: pointer;
    }

    .uacm input[type="submit"]:hover {
        background-color: rgba(0, 0, 0, 0.5);b3;
    }
    .cont-editors{
      display: flex;
    }

</style>

<?php
    function fetchPaymentSystems($conn) {
        $sql = "SELECT payment_id, payment_name FROM payment_systems";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["payment_id"] . "'>" . $row["payment_name"] . "</option>";
            }
        } else {
            echo "0 results";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
    
        if ($action == "add") {
          $payment_name = $_POST['payment_name'];
          $company_name = $_POST['company_name'];
          $description = $_POST['description'];
    
          // Handle image upload
          if(isset($_FILES['commerce_id_image']) && $_FILES['commerce_id_image']['error'] === UPLOAD_ERR_OK) {
              $image_tmp_name = $_FILES['commerce_id_image']['tmp_name'];
              $commerce_id_image = file_get_contents($image_tmp_name);
              $commerce_id_image = base64_encode($commerce_id_image); // Convert binary data to base64 for database storage
          } else {
              $commerce_id_image = null; // No image uploaded or error occurred
          }
    
          $sql = "INSERT INTO payment_systems (payment_name, company_name, description, commerce_id_image) VALUES (?, ?, ?, ?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ssss", $payment_name, $company_name, $description, $commerce_id_image);
          $stmt->execute();
      } 
         elseif ($action == "delete") {
            $sql = "DELETE FROM payment_systems WHERE payment_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $payment_system);
            $stmt->execute();
        } elseif ($action == "edit") {
            $newName = $_POST['newName'];
    
            $sql = "UPDATE payment_systems SET payment_name = ? WHERE payment_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $newName, $payment_system);
            $stmt->execute();
        }
    }
    ?>
    
    
    
    <div style="float: right; width: 95%;">
    <div class="cont-editors">
    <div class="addp">  <h2 id="add">Add Payment System</h2>
    
    <form method="post" action="" enctype="multipart/form-data">
      <input type="hidden" name="action" value="add">
      <label for="payment_name">Payment Name:</label><br>
      <input type="text" id="payment_name" name="payment_name"><br>
      <label for="company_name">Company Name:</label><br>
      <input type="text" id="company_name" name="company_name"><br>
      <label for="description">Description:</label><br>
      <textarea id="description" name="description"></textarea><br>
      <label for="commerce_id_image">Commerce ID Image:</label><br>
      <input type="file" id="commerce_id_image" name="commerce_id_image"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
  <div style="float: right; width: 30%;">
  <div class="delp"> 
      <h2 id="delete">Delete Payment System</h2>
    
      <form method="post" action="">
        <input type="hidden" name="action" value="delete">
        <label for="payment_system">Payment System:</label><br>
        <select id="payment_system" name="payment_system">
          <?php fetchPaymentSystems($conn); ?>
        </select><br>
        <input type="submit" value="Submit">
      </form>
  </div>
  </div>
      <div class="editp"> 
       
      <h2 id="edit">Edit Payment System</h2>
    
      <form method="post" action="">
        <input type="hidden" name="action" value="edit">
        <label for="payment_system">Payment System:</label><br>
        <select id="payment_system" name="payment_system">
          <?php fetchPaymentSystems($conn); ?>
        </select><br>
        <label for="newName">New Name:</label><br>
        <input type="text" id="newName" name="newName"><br>
        <input type="submit" value="Submit">
      </form>
      </div>
    </div>
    </div>
  </div>
</div>




</body>
<script type="text/JavaScript" src="lang-about.js"></script>
</html>