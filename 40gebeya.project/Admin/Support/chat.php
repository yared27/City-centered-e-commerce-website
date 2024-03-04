<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location: ../adminlogin.php"); 
    exit; // Ensure script execution stops after redirection
}
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
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  
  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body style="margin: 0; background-color: #000; color: #eee; font-family: Poppins; font-size: 12px; background-image: url(image/background.jpg); background-repeat: no-repeat; background-size: cover;"
>


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
   <a class="navbar-brand" href="customer_support.php">40Gebeya </a>
          
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          
          <li><a href="chat.php"><i class="fa fa-message"></i>Chat</a></li>   
          
   
   
                <li><a href="logout_a.php"><span class="fa fa-log-out"></span> Log Out </a></li>
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
<style>
    .chat-box-t{
        position: absolute;
        top: 20dvb;
        left: 10dvb;
        border: groove black;
        border-radius: 5dvb;
        background-color: #1a1a1a;
        padding: 2dvb;
        box-shadow: 3px 3px 10px 0px rgba(255, 255, 255, 0.5);
    }
</style>
<div class="chat-box-t" >
    <?php
    // Assuming you have authenticated the user and retrieved their username
    $username = $_SESSION['username']; // Set the username in the session variable
    ?>
        <style>
            /* Style for chat messages */
            .chat-message {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .chat-message img {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .chat-message .message {
                background-color: #f0f0f0;
                padding: 10px;
                border-radius: 20px;
                max-width: 70%;
            }

            /* Style for chat box */
            #chat-box {
            height: 350px; /* Set height as needed */
            border-radius: 5dvb;
            overflow-y: auto; /* Enable vertical scrollbar */
            border: 1px solid #ccc; /* Border color */
            padding-top: 4dvb; /* Padding around content */
            padding-left:2dvb;
            background-color: white;
            color: aliceblue;
            
            
    }

        /* Custom styling for scrollbar */
        #chat-box::-webkit-scrollbar {
            width: 10px;
             /* Width of the scrollbar */
        }

        #chat-box::-webkit-scrollbar-thumb {
            background-color: #888; /* Color of the scrollbar thumb */
            border-radius: 5px; /* Rounded corners of the thumb */
            display:none;

        }

        #chat-box::-webkit-scrollbar-track {
            background-color: #f2f2f2; /* Background color of the scrollbar track */
            display: none;
        }

            /* Style for chat form */
            #chat-form {
                margin-top: 10px;
            }

            #chat-form textarea {
                width: calc(100% - 70px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 20px;
                resize: none;
            }

            #chat-form button {
                width: 60px;
                padding: 10px;
                border: none;
                background-color: #007bff;
                color: #fff;
                border-radius: 20px;
                cursor: pointer;
            }
            .chat-welcome{
                border-radius: 5dvb;
                background-color: #f2f2f2;
                width: fit-content;
                padding-left: 2dvb;
                color: #1a1a1a;
                padding-right: 2dvb;
            }
                .custom-dropdown {
                    border-radius: 5dvb;
                background-color: #f2f2f2;
                width: fit-content;
                padding-left: 2dvb;
                color: #1a1a1a;
                padding-right: 2dvb;/
        }

        /* Custom styling for dropdown options */
        .custom-dropdown option {
            background-color: #ddd; /* Light gray background color for options */
        }

        /* Icon styles */
        .dropdown-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none; /* Ensure icon doesn't interfere with dropdown functionality */
            color: #666; /* Icon color */
            }

        .cff{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .cf2{
            height: fit-content;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
    <center>
    <select id="receiver" name="receiver" required class="custom-dropdown">
    <option value="" disabled selected>Select Receiver</option>
 
</select></center>
<br>
    <div id="chat-box"></div>
    <form id="chat-form">
        <div class="cff">
        <textarea id="message" placeholder="Type your message" ></textarea>&nbsp;
        <button type="submit" style="background-color:#ccc;" class="cf2" >Send</button>
        </div>
    </form>
    <script>
    $(document).ready(function(){
        // Fetch all users for receiver dropdown
        $.ajax({
            url: 'fetch_users.php',
            type: 'GET',
            success: function(data) {
                $('#receiver').html(data);
            }
        });

        // Fetch and display chat messages
        function fetchMessages() {
            // Get selected receiver
            var receiver = $('#receiver').val();
            if (receiver !== '' && !$('#receiver option:selected').is(':disabled')) {
                $.ajax({
                    url: 'fetch_messages.php',
                    type: 'GET',
                    data: { receiver: receiver }, // Pass receiver value to fetch_messages.php
                    success: function(data) {
                        $('#chat-box').html(data);
                        // Scroll chat box to bottom
                        $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
                    }
                });
            }
        }

        fetchMessages(); // Fetch initial messages

        // Send message
        $('#chat-form').submit(function(e){
            e.preventDefault();
            var message = $('#message').val().trim();
            var receiver = $('#receiver').val(); // Get selected receiver
            if (message != '') {
                $.ajax({
                    url: 'send_message.php',
                    type: 'POST',
                    data: { message: message, receiver: receiver }, // Pass receiver value to send_message.php
                    success: function() {
                        $('#message').val('');
                        fetchMessages(); // Refresh messages
                    }
                });
            }
        });

        // Update chat every 2 seconds
        setInterval(fetchMessages, 2000);
    });
</script>

    </body>
    </html>
</div>

</body>
</html>
