<?php 
include './include/connection.php';
$firstname = $GET['txtFirstName'];
echo "$firstname";
echo "Trader Activated";
$stid = "UPDATE TRADER SET STATUS='Active' where first_name='$firstname'";
$query=oci_parse($connection, $stid);
oci_execute($query);
?>