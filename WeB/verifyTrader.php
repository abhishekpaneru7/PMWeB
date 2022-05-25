<?php 
include 'include/connection.php';
$fname=$_GET['fname'];
echo $fname;
echo "Trader Activated";
$stid = "UPDATE TRADER SET status='Active' where FIRST_NAME ='$fname'";
$query=oci_parse($connection, $stid);
oci_execute($query);
?>