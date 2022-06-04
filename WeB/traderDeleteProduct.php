<?php
 include './include/connection.php';
 $title = $_GET['title'];
 $sql = "Delete from product where product_title = '$title'";
 $result = oci_parse($connection, $sql);
 oci_execute($result);
 header("Location: {$_SERVER['HTTP_REFERER']}");
?>