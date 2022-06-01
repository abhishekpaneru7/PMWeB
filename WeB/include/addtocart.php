<?php
 include 'connection.php';
 if (empty($_SESSION['users'])){
  echo"<script>alert(\"Please Login to your account to add item to cart.\");";
      echo "window.location.href=\"../login.php\";";
  echo "</script>";
  }
  else{
    $id = $_SESSION['id'];
  }
 $sql0 = "Select SUM(QUANTITY) from CART";
 $result0 = oci_parse($connection,$sql0);
 oci_execute($result0);
 while($row = oci_fetch_assoc($result0)){
   $count = $row['SUM(QUANTITY)'];
   if($count < 20){
    $prodid = $_GET['id'];
    $custid = $_SESSION['id'];
    $quantity = 1;
    $sql = "Select * from product where product_id = $prodid";
    $result = oci_parse($connection, $sql);
    oci_execute($result);
    while($row = oci_fetch_assoc($result)){
      $price = $row['PRICE'];
      $sql1 = "insert into cart(CUSTOMER_ID, PRODUCT_ID, QUANTITY, TOTAL) values($custid, $prodid, $quantity, ($price * $quantity))";
      $insert = oci_parse($connection, $sql1);
      if(oci_execute($insert)){
        echo "<script>alert(\"Item added to cart.\");";
        echo "history.go(-1);";
        echo "</script>";
      }else{
        echo "<script>alert(\"Item already added to cart.\");";
        echo "history.go(-1);";
        echo "</script>";
      }
    }
   }else{
      echo "<script>alert(\"Maximum cart limit is reached (20 items).\");";
      echo "history.go(-1);";
      echo "</script>";
   }
 }
?>