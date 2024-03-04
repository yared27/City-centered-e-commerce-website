<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];

    $sql = "INSERT INTO customer (fullname, username, email, password, contact, address)
    VALUES ('$name', '$username', '$email', '$password', '$contact', '$address')";

    if ($conn->query($sql) === TRUE) {
        header('Location: registrationconfirmation.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
