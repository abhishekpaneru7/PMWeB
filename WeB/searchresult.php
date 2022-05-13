<?php include './include/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php 
   include "include/header.php"; 
   include "include/search.php";
   echo '<br><br><br><br><br><br>';
   if(isset($_GET['searchBtn'])){
   $search = $_GET['searchKey'];
   $sql = "Select * from product where LOWER(PRODUCT_TITLE) like LOWER('%$search%')";
   $result = oci_parse($connection, $sql);
   oci_execute($result);
   echo '<h1 class="text-center pb-4 mt-4">Result</h1>';
   echo '<div class="col-10 mx-auto">';
    echo '<div class="row text-center">';
      while($row = oci_fetch_assoc($result)){
        // echo $sql;
        $id = $row['PRODUCT_ID'];
        echo '<div class="card col-lg-4 py-2 m-2 mx-auto" style="width: 18rem;">';
        echo '<img src="./products/' .$row['IMAGE'] . '"alt="Card image cap" height="262px" class="card-img-top">';
        echo '<div class="card-body">';
          echo '<h5 class="cart-title">' . $row['PRODUCT_TITLE'] . '</h5>';
          echo '<h5 class="cart-title">£' . $row['PRICE'] . '</h5>';
          echo '<p class="card-text">' . $row['DESCRIPTION'] . '</p>';
          echo '</div>';
          echo '<a href="productdetail.php" class="btn btn-primary btn-card" style="margin: 0 24px;">View Product</a>';
        echo '</div>';
      }
    echo '</div>';
   echo '</div>';
 }
  ?>
</body>
</html>