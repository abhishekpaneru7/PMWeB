<?php 
include 'include/connection.php';
$firstname = $_GET['txtFirstName'];
echo "$firstname";
echo "Trader Activated";
$stid = "UPDATE TRADER SET STATUS='Active' where FIRST_NAME ='$firstname'";
$query=oci_parse($connection, $stid);
oci_execute($query);
?>