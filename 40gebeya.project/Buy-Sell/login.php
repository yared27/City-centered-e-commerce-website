<?php
session_start();
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare a select statement
    $sql = "SELECT password FROM customer WHERE username = ?";
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("s", $username);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Store result
            $stmt->store_result();

            // Check if username exists, if yes then verify password
            if ($stmt->num_rows == 1) {                    
                // Bind result variables
                $stmt->bind_result($db_password);
                if ($stmt->fetch()) {
                    if ($password == $db_password) { 
                        // Password is correct, so start a new session
                        $_SESSION["loggedin"] = true;
                        $_SESSION["username"] = $username;                            
                        
                        // Redirect user to welcome page
                        header("location: Itemlist.php");
                    } else {
                        // Display an error message if password is not valid
                        $_SESSION["error"] = "The password you entered was not valid.";
                        header('Location: customerlogin.php');
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                $_SESSION["error"] = "No account found with that username.";
                header('Location: customerlogin.php');
            }
        } else {
            $_SESSION["error"] = "Oops! Something went wrong. Please try again later.";
            header('Location: customerlogin.php');
        }

        // Close statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
