
<form method="post" action="">
    <label for="search">Search</label>
    <input type="search" id="search" name="search">
    <button type="submit" name="submit">Search</button>
</form>

<div class="container" style="width:95%;">

<!-- Display all item from item table -->
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

        // Your item display code
        echo '<div class="col-md-3">';
        echo '<form method="post" action="cart.php?action=add&id=' . $row['F_ID'] . '">';
        echo '<div class="mypanel" align="center";>';
        echo '<a href="details.php?id=' . $row['F_ID'] . '">';
        echo '<img src="' . $row['images_path'] . '" class="img-responsive">';
        echo '<h4 class="text-dark">' . $row['name'] . '</h4>';
        echo '</a>';
        echo '<h5 class="text-danger">ETB  ' . $row['price'] . '</h5>';
        echo '<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>';
        echo '<input type="hidden" name="hidden_name" value="' . $row['name'] . '">';
        echo '<input type="hidden" name="hidden_price" value="' . $row['price'] . '">';
        echo '<input type="hidden" name="hidden_RID" value="' . $row['R_ID'] . '">';
        echo '<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">';
        echo '</div>';
        echo '</form>';
        echo '</div>';

        $count++;
        if($count==4)
        {
            echo "</div>";
            $count=0;
        }
    }

?>

</div>

<?php
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
