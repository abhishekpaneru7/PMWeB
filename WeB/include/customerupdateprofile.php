<?php
 include 'connection.php';
 $id = $_POST['hideCustID'];
 $sql = "Select * from CUSTOMER where CUSTOMER_ID = $id";
 $result = oci_parse($connection, $sql);
 oci_execute($result);
 while($row = oci_fetch_assoc($result)){
  $firstname = $row['FIRST_NAME'];
  $lastname = $row['LAST_NAME'];
  $email = $row['EMAIL'];
  $age = $row['AGE'];
  $gender = $row['GENDER'];
  $temp['FIRST_NAME'] = $row['FIRST_NAME'];
  $temp['LAST_NAME'] = $row['LAST_NAME'];
  $temp['EMAIL'] = $row['EMAIL'];
  $temp['AGE'] = $row['AGE'];
  $temp['GENDER'] = $row['GENDER'];
 }
 if(isset($_POST['custUpdtBtn'])){
  if(!empty($_POST['txtFirstName'])){
   $firstname = $_POST['txtFirstName'];
  }
  if(!empty($_POST['txtLastName'])){
   $lastname = $_POST['txtLastName'];
  }
  if(!empty($_POST['txtEmail'])){
   $email = $_POST['txtEmail'];
  }
  if(!empty($_POST['txtAge'])){
   $age = $_POST['txtAge'];
  }
  if(!empty($_POST['rdoGender'])){
   $gender = $_POST['rdoGender'];
  }
  if($firstname == $temp['FIRST_NAME'] && $lastname == $temp['LAST_NAME'] && $email == $temp['EMAIL'] && $age == $temp['AGE'] && $gender == $temp['GENDER']){
   echo '<script>alert("No data changed!\nPlease change data to update");';
   echo "window.location.href=\"../profilecustomerform.php?id=$id\"";
   echo '</script>';
  }else{
   $update = "update customer set first_name = '$firstname', last_name = '$lastname', email = '$email', age = '$age', gender = '$gender' where customer_id = $id";
   $query = oci_parse($connection, $update);
   oci_execute($query);
   echo '<script>alert("Profile updated successfully!");';
   echo 'window.location.href = "../index.php";';
   echo "</script>";
  }
 }
?>