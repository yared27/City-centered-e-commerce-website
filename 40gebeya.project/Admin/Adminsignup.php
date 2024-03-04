<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables to store form data
    $fullname = $username = $email = $password = $contact = $address = $security_key = $website = $userprofile = '';

    // Check if form fields are set and not empty
    if (isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }
    if (isset($_POST['contact'])) {
        $contact = $_POST['contact'];
    }
    if (isset($_POST['address'])) {
        $address = $_POST['address'];
    }
    if (isset($_POST['Security_Key'])) {
        $security_key = $_POST['Security_Key'];
    }
    if (isset($_POST['website'])) {
        $website = $_POST['website'];
    }

    // Handle the uploaded file
    if (isset($_FILES['userprofile']) && $_FILES['userprofile']['error'] == 0) {
        // Sanitize and move the uploaded file to a permanent location
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . basename($_FILES['userprofile']['name']);
        if (move_uploaded_file($_FILES['userprofile']['tmp_name'], $upload_file)) {
            // File was moved successfully
            $userprofile = $upload_file;
        } else {
            // Handle file upload error
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    } else {
        // Handle file upload errors
        echo "Error: " . $_FILES['userprofile']['error'];
        exit;
    }

    // Prepare an SQL statement for execution to insert into the admin table
    $stmt = $conn->prepare("INSERT INTO admin (fullname, username, email, password, contact, address, Security_Key, userprofile) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    // Bind parameters to the SQL statement
    $stmt->bind_param("ssssssss", $fullname, $username, $email, $password, $contact, $address, $security_key, $userprofile);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Fetch the last inserted ID to associate with the courier company
        $admin_id = $stmt->insert_id;

        // Prepare an SQL statement for execution to insert into the courier_company table
        $stmt2 = $conn->prepare("INSERT INTO courier_company (name, website) VALUES (?, ?)");
        // Bind parameters to the SQL statement
        $stmt2->bind_param("ss", $fullname, $website);
        if ($stmt2->execute()) {
            // Fetch the last inserted ID of the courier company
            $courier_company_id = $stmt2->insert_id;

            // Update the admin table with the courier company ID
            $stmt3 = $conn->prepare("UPDATE admin SET courier_company_id = ? WHERE id = ?");
            // Bind parameters to the SQL statement
            $stmt3->bind_param("ii", $courier_company_id, $admin_id);
            $stmt3->execute();
            $stmt3->close();
            
            // Redirect user to login page after successful registration
            echo "<script>alert('Successfully registered!');window.location.href='adminlogin.php';</script>";
        } else {
            // Handle error in inserting into courier_company table
            echo "Error: " . $stmt2->error;
        }

        // Close the statement
        $stmt2->close();
    } else {
        // Handle error in executing the first statement
        echo "Error: " . $stmt->error;
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>40Gebeya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/Welcome.css">
    <link rel="stylesheet" href="css/customersignup.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;">
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <span class="fa fa-chevron-up"></span>
    </button>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="image/logo.jpg" alt="logo" width="50dvb"></a>
                <a class="navbar-brand" href="index.php">40Gebeya</a>
            </div>

            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <div class="switch">
                        <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox"/>
                        <label for="language-toggle"></label>
                        <span class="on">EN</span>
                        <span class="off">አማ</span>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div id="english-content">
        <div class="wrapper">
            <form action="" method="post" enctype="multipart/form-data">
                <h1>Sign up</h1>
                <div class="input-box">
                    <input name="fullname" type="text" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input name="username" type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input name="email" type="text" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input name="password" type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input name="contact" type="text" placeholder="Contact Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-box">
                    <input name="address" type="text" placeholder="Address" required>
                    <i class='bx bxs-home'></i>
                </div>
                <div class="input-box">
                    <select name="Security_Key" onchange="showWebsiteInput(this);" required>
                        <option value="">Select User Type</option>
                        <option value="System manager">System manager</option>
                        <option value="Customer Support">Customer Support</option>
                        <option value="Courier Company">Courier Company</option>
                        <option value="Site Moderator">Site Moderator</option>
                    </select>
                    <i class='bx bxs-user-check'></i>
                </div>
                <!-- Website input field hidden by default -->
                <div class="input-box" id="websiteInput" style="display: none;">
                    <input name="website" type="text" placeholder="Website">
                    <i class='bx bxs-globe'></i>
                </div>
                <div class="input-box">
                    <input type="file" name="userprofile" accept="image/*">
                    <i class='bx bxs-file-image'></i>
                </div>
                <button type="submit" class="btn">Sign up</button>
                <div class="register-link">
                    <p>Already have an account? <a href="adminlogin.php">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showWebsiteInput(select) {
            var websiteInput = document.getElementById("websiteInput");
            websiteInput.style.display = select.value === "Courier Company" ? "block" : "none";
        }
    </script>
</body>
</html>
