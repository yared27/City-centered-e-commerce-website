<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Contact Messages</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f9f9f9; 
        } 
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px; 
            background-color: #ffffff; 
            border-radius: 5px; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        } 
        .message { 
            border-bottom: 1px solid #ddd; 
            padding: 10px 0; 
        } 
        .email { 
            font-weight: bold; 
        } 
        .subject { 
            color: #555; 
        } 
        .msg { 
            margin-top: 10px; 
        } 
        .btn-container { 
            text-align: right; /* Aligns the button to the right */ 
        } 
        .btn { 
            /* Your button styles here */ 
            padding: 10px 20px; 
            background-color:  rgb(248, 71, 71); 
            color:#ffffff ; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
        } 
    </style> 
</head> 
<body> 
<div class="container"> 
        <h1>Contact Messages <hr></h1> 
        <?php 
        include "connect.php"; 
        $dbname = "final"; 
        mysqli_select_db($conn, $dbName); 
        $data = "SELECT DISTINCT Email, Mobile, Message FROM contact_us"; // Fetch distinct records 
        $result = mysqli_query($conn, $data); 
        if (!$result) { 
            die("Database access failed: " . mysqli_error($conn)); 
        } 
        $rows = mysqli_num_rows($result); 
 
        if ($rows) { 
            while ($row = mysqli_fetch_array($result)) { 
                echo '<div class="message">'; 
                echo '<span class="email">Email: ' . $row["Email"] . '</span><br>'; 
                echo '<span class="subject">Tel No: ' . $row["Mobile"] . '</span><br>'; 
                echo '<div class="msg">' . $row["Message"] . '</div>'; 
                echo '<div class="btn-container"><button type="button" class="btn">Respond</button></div>';
                echo '</div>'; 
            } 
        } else { 
            echo '<p>No messages found.</p>'; 
        } 
        mysqli_close($conn); 
       
        ?> 
        
    </div> 
 
</body> 
</html>