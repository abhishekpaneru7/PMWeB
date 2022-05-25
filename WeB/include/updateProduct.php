<?php
 include 'connection.php';
 $id = $_POST['hideProdId'];
 $sql = "Select * from product where PRODUCT_ID = $id";
 $result = oci_parse($connection, $sql);
 oci_execute($result);
 while($row = oci_fetch_assoc($result)){
  $title = $row['PRODUCT_TITLE'];
  $description = $row['DESCRIPTION'];
  $price = $row['PRICE'];
  $stock = $row['STOCK_QUANTITY'];
  $image = $row['IMAGE'];
  $temp['title'] = $row['PRODUCT_TITLE'];
  $temp['description'] = $row['DESCRIPTION'];
  $temp['price'] = $row['PRICE'];
  $temp['stock'] = $row['STOCK_QUANTITY'];
  $temp['image'] = $row['IMAGE'];
 }
 if(isset($_POST['updateProductBtn'])){
  if(!empty($_POST['title'])){
   $title = $_POST['title'];
  }
  if(!empty($_POST['description'])){
   $description = $_POST['description'];
  }
  if(!empty($_POST['price'])){
   $price = $_POST['price'];
  }
  if(!empty($_POST['stock'])){
   $stock = $_POST['stock'];
  }
  if(!empty($_POST['image'])){
   $image = $_POST['image'];
  }
  if($title == $temp['title'] && $description == $temp['description'] && $price == $temp['price'] && $stock == $temp['stock'] && $image == $temp['image']){
   echo '<script>alert("No data changed!\nPlease change data to update");';
   echo "window.location.href=\"../traderCrudproduct.php?id=$id\";";
   echo '</script>';
  }else{
   $update = "update product set product_title = '$title', description = '$description', price = '$price', stock_quantity = '$stock', image = '$image' where product_id = $id";
   $query = oci_parse($connection, $update);
   oci_execute($query);
   echo '<script>alert("Product updated successfully!");';
   echo "window.location.href = \"../traderCrudproduct.php?id=$id\";";
   echo "</script>";
  }
 }
?>