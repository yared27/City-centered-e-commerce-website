<?php
session_start();

if(!isset($_SESSION['login_user2'])){
    header("location: customerlogin.php"); 
    exit;
}

// Include database connection
include ('connect.php');

// Fetch managers from the database
$sql_managers = "SELECT username, fullname FROM manager";
$result_managers = $conn->query($sql_managers);

// Fetch admins from the database
$sql_admins = "SELECT username, fullname FROM admin";
$result_admins = $conn->query($sql_admins);
?>

<html>
<head>
    <title>Chat | 40Gebeya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/Itemlist.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;">
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
                <a class="navbar-brand" href="index.php">40Gebeya</a>
            </div>

            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="chat/chat.php">Chat</a></li>
                </ul>
                <?php
                if(isset($_SESSION['login_user1'])){
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
                    <li><a href="myshop.php">MANAGER CONTROL PANEL</a></li>
                    <li><a href="logout_m.php"><span class="fa fa-log-out"></span> Log Out </a></li>
                </ul>
                <?php
                } elseif (isset($_SESSION['login_user2'])) {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="fa fa-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
                    <li class="active"><a href="Itemlist.php"><span class="fas fa-store"></span> Shop </a></li>
                    <li><a href="cart.php"><span class="fa fa-shopping-cart"></span> Cart  (<?php
                        if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]); 
                            echo "$count"; 
                        } else {
                            echo "0";
                        }
                        ?>) </a></li>
                    <li><a href="logout_u.php"><span class="fa fa-sign-out"></span> Log Out </a></li>
                </ul>
                <?php
                } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-pencil"></span> Sign Up <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li><a href="customersignup.php"> User Sign-up</a></li>
                            <li><a href="managersignup.php"> Manager Sign-up</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-sign-in"></span> Login <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="customerlogin.php"> User Login</a></li>
                            <li><a href="managerlogin.php"> Manager Login</a></li>
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

include('connect.php');

// Handle sending messages
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'], $_POST['receiver'])) {
    if (!isset($_SESSION['login_user2'])) {
        echo "You are not logged in.";
        exit;
    }

    $message = htmlspecialchars($_POST['message']);
    $sender = $_SESSION['login_user2'];
    $receiver = $_POST['receiver'];

    // Check if receiver_username exists in manager table
    $check_sql = "SELECT username FROM manager WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $receiver);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        // receiver_username exists, proceed with inserting message
        $stmt = $conn->prepare("INSERT INTO chat_message (sender_username, receiver_username, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $sender, $receiver, $message);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Error: receiver_username does not exist in manager table.";
    }

    // Redirect to prevent form resubmission on page refresh
    header("Location: chat.php");
    exit;
}

// Handle fetching messages
if (isset($_SESSION['login_user2'])) {
    $sql = "SELECT sender_username, message FROM chat_message WHERE receiver_username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_SESSION['login_user2']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
}

// Fetch managers
$sql_managers = "SELECT username, fullname FROM manager";
$result_managers = $conn->query($sql_managers);

// Fetch admins
$sql_admins = "SELECT username, fullname FROM admin";
$result_admins = $conn->query($sql_admins);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div>
    <script>
        $(document).ready(function() {
            $("#search").on("input", function() {
                var input = $(this).val().toLowerCase();
                $("#manager_list option, #admin_list option").each(function() {
                    var text = $(this).text().toLowerCase();
                    $(this).toggle(text.includes(input));
                });
            });

            $(".receiver-option").click(function() {
                var receiver = $(this).data("username");
                $("#receiver").val(receiver);
            });

            $("#send").click(function() {
                var message = $("#message").val();
                var receiver = $("#receiver").val();
                $.post("send_message.php", {message: message, receiver: receiver}, function(data) {
                    $("#message").val('');
                    $("#chat").append(data);
                });
            });

            setInterval(function() {
                $.get("fetch_messages.php", function(data) {
                    $("#chat").html(data);
                });
            }, 1000);
        });
    </script>
    <style>
        #chat {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            height: 200px;
            overflow-y: auto;
        }
    </style>
    <h2>Chat</h2>
    <div id="chat">
        <!-- Chat messages will be displayed here -->
    </div>
    <input type="text" id="message" placeholder="Type your message...">
    <select id="receiver">
        <optgroup label="Managers" id="manager_list">
            <?php
            if ($result_managers->num_rows > 0) {
                while($row_manager = $result_managers->fetch_assoc()) {
                    echo '<option class="receiver-option" data-username="' . $row_manager['fullname'] . '">' . $row_manager['username'] . '</option>';
                }
            }
            ?>
        </optgroup>
        <optgroup label="Admins" id="admin_list">
            <?php
            if ($result_admins->num_rows > 0) {
                while($row_admin = $result_admins->fetch_assoc()) {
                    echo '<option class="receiver-option" data-username="' . $row_admin['fullname'] . '">' . $row_admin['username'] . '</option>';
                }
            }
            ?>
        </optgroup>
    </select>
    <input type="text" id="search" placeholder="Search...">
    <button id="send">Send</button>
</div>

</body>
</html>

<?php
// Close database connection
$conn->close();
?>


</body>
</html>
