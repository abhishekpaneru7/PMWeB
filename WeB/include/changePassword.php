<?php 
include 'include/connection.php';
$changeemail=$_GET['email'];
echo $email;
echo "Verify Email Address";
$stid = "UPDATE TRADER SET status='Active' where FIRST_NAME ='$fname'";
$query=oci_parse($connection, $stid);
oci_execute($query);
?>