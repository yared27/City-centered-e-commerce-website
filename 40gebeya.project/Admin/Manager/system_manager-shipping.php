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
<!DOCTYPE html>
<<html>
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
    <form action="" method="post">
        <input type="text" name="username">
        <button type="submit" name="search" class="fa fa-search">Search</button>
    </form>

    <div class="search-results">
    <?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['search'])) {
        $username = $_POST['username']; // Get the username from the form

        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch all the rows into an array
        $users = $result->fetch_all(MYSQLI_ASSOC);

        if (!empty($users)) {
            // Loop through the array and display the users
            foreach ($users as $user) {
                echo '<div><span>Username: ' . $user['username'] . '</span><span>Full Name: ' . $user['fullname'] . '</span><span><form action="" method="post"><input type="hidden" name="username" value="' . $user['username'] . '"><button type="submit" name="view">View</button></form></span></div>';
            }
        } else {
            echo "User not found. Please search for a valid user.";
        }
    } elseif (isset($_POST['view'])) {
        $username = $_POST['username'];

        // Prepare the SQL statement
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch the row into an array
        $user = $result->fetch_assoc();

        if ($user) {
            // Fetch associated website from courier_company table
            $stmt = $conn->prepare("SELECT website FROM courier_company WHERE id = (SELECT courier_company_id FROM admin WHERE username = ?)");
$stmt->bind_param("s", $username);
$stmt->execute();
            $websiteResult = $stmt->get_result();
            $websiteRow = $websiteResult->fetch_assoc();
            $website = $websiteRow['website'] ?? "Website not found.";

            // Display the user's full information in a table
            echo '<table style="width: 100%; border-collapse: collapse;"><tr><th style="border: 1px solid black; padding: 10px;">Username</th><th style="border: 1px solid black; padding: 10px;">Full Name</th><th style="border: 1px solid black; padding: 10px;">Email</th><th style="border: 1px solid black; padding: 10px;">Contact</th><th style="border: 1px solid black; padding: 10px;">Address</th><th style="border: 1px solid black; padding: 10px;">Website</th><th style="border: 1px solid black; padding: 10px;">User Profile</th></tr>';
            echo '<tr><td style="border: 1px solid black; padding: 10px;">' . $user['username'] . '</td><td style="border: 1px solid black; padding: 10px;">' . $user['fullname'] . '</td><td style="border: 1px solid black; padding: 10px;">' . $user['email'] . '</td><td style="border: 1px solid black; padding: 10px;">' . $user['contact'] . '</td><td style="border: 1px solid black; padding: 10px;">' . $user['address'] . '</td><td style="border: 1px solid black; padding: 10px;">' . $website . '</td><td style="border: 1px solid black; padding: 10px;">';
            echo '<img src="image.php?fullname=' . urlencode($user['fullname']) . '" style="width: 100%;">';
            echo '</td></tr></table>';

            // Display the "Edit" and "Delete" buttons
            echo '<div class="uacm">';
            echo '<center><form method="post">';
            echo '<input type="hidden" name="username" value="' . $user['username'] . '">';
            echo '<input type="hidden" name="old_website" value="' . $website . '">'; // Add this line
            echo 'Website: <input type="text" name="website" value="' . $website . '"><br>'; // Add this line
            echo '<input type="submit" name="modify_website" value="Modify Website">'; // Add this line
            echo '</form>';
            echo '<form method="post">';
            echo '<input type="hidden" name="username" value="' . $user['username'] . '">'; // Add this line
            echo '<input type="submit" name="edit" value="Edit">'; // Add this line
            echo '</form>';
            echo '<form method="post">';
            echo '<input type="hidden" name="username" value="' . $user['username'] . '">'; // Add this line
            echo '<input type="submit" name="delete" value="Delete"></center>'; // Add this line
            echo '</form>';
            echo '</div>';
        }
    } elseif (isset($_POST['modify_website'])) {
        $username = $_POST['username'];
        $website = $_POST['website']; // Get the new website

        // Prepare the SQL statement to update the website
        $stmt = $conn->prepare("UPDATE courier_company SET website = ? WHERE courier_company_id = (SELECT courier_company_id FROM admin WHERE username = ?)");
        $stmt->bind_param("ss", $website, $username);
        if ($stmt->execute()) {
            echo "Website modified successfully.";
        } else {
            echo "Error modifying website: " . $stmt->error;
        }
    } elseif (isset($_POST['edit'])) {
        $username = $_POST['username'];

        // Fetch user details from the database
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Edit User</title>
                </head>
                <body>
                    <h1>Edit User</h1>
                    <form action="" method="post">
                        <label for="fullname">Full Name:</label><br>
                        <input type="text" id="fullname" name="fullname" value="' . $user['fullname'] . '"><br>
                        <label for="email">Email:</label><br>
                        <input type="text" id="email" name="email" value="' . $user['email'] . '"><br>
                        <label for="contact">Contact Number:</label><br>
                        <input type="text" id="contact" name="contact" value="' . $user['contact'] . '"><br>
                        <label for="address">Address:</label><br>
                        <input type="text" id="address" name="address" value="' . $user['address'] . '"><br>
                        <input type="hidden" name="username" value="' . $user['username'] . '">
                        <button type="submit">Update</button>
                    </form>
                </body>
                </html>';
        } else {
            echo "User not found.";
        }
    } elseif (isset($_POST['delete'])) {
    $username = $_POST['username'];

    // Find the courier_company_id associated with the user
    $stmt = $conn->prepare("SELECT courier_company_id FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Fetch the courier_company_id
        $stmt->bind_result($courier_company_id);
        $stmt->fetch();

        // Now delete the row from the courier_company table
        $delete_stmt = $conn->prepare("DELETE FROM courier_company WHERE id = ?");
        $delete_stmt->bind_param("i", $courier_company_id);
        if ($delete_stmt->execute()) {
            // Row deleted successfully, now delete the user from the admin table
            $delete_user_stmt = $conn->prepare("DELETE FROM admin WHERE username = ?");
            $delete_user_stmt->bind_param("s", $username);
            if ($delete_user_stmt->execute()) {
                echo "User and associated data deleted successfully.";
            } else {
                echo "Error deleting user: " . $delete_user_stmt->error;
            }
        } else {
            echo "Error deleting associated data from courier_company: " . $delete_stmt->error;
        }
    } else {
        echo "User not found.";
    }

    // Close statements
    $stmt->close();
    $delete_stmt->close();
}

}
?>

    </div>

</div>
</div>




</body>
<script type="text/JavaScript" src="lang-about.js"></script>
</html>