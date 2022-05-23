<?php
 include 'connection.php';
 $id = $_GET['id'];
 $sql = "Delete from cart where product_id = $id";

 $result = oci_parse($connection, $sql);
 oci_execute($result);
 header("Location: {$_SERVER['HTTP_REFERER']}");
?>