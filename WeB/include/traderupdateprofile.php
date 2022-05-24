<?php
 include 'connection.php';
 $id = $_POST['hideTraderID'];
 $sql = "Select * from TRADER where TRADER_ID = $id";
 $result = oci_parse($connection, $sql);
 oci_execute($result);
 while($row = oci_fetch_assoc($result)){
  $firstname = $row['FIRST_NAME'];
  $lastname = $row['LAST_NAME'];
  $shopname = $row['SHOP_NAME'];
  $email = $row['EMAIL'];
  $temp['FIRST_NAME'] = $row['FIRST_NAME'];
  $temp['LAST_NAME'] = $row['LAST_NAME'];
  $temp['SHOP_NAME'] = $row['SHOP_NAME'];
  $temp['EMAIL'] = $row['EMAIL'];
 }
 if(isset($_POST['tradeUpdtBtn'])){
  if(!empty($_POST['txtFirstName'])){
   $firstname = $_POST['txtFirstName'];
  }
  if(!empty($_POST['txtLastName'])){
   $lastname = $_POST['txtLastName'];
  }
  if(!empty($_POST['txtShopName'])){
   $shopname = $_POST['txtShopName'];
  }
  if(!empty($_POST['txtEmail'])){
   $email = $_POST['txtEmail'];
  }
  if($firstname == $temp['FIRST_NAME'] && $lastname == $temp['LAST_NAME'] && $shopname == $temp['SHOP_NAME'] && $email == $temp['EMAIL']){
   echo '<script>alert("No data changed!\nPlease change data to update");';
   echo "window.location.href=\"../profiletraderform.php?id=$id\"";
   echo '</script>';
  }else{
   $update = "update trader set first_name = '$firstname', last_name = '$lastname', shop_name = '$shopname', email = '$email' where trader_id = $id";
   $query = oci_parse($connection, $update);
   oci_execute($query);
   echo '<script>alert("Profile updated successfully!");';
   echo 'window.location.href = "../index.php";';
   echo "</script>";
  }
 }
?>