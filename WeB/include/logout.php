
<?php
include 'connection.php';

session_start();
session_destroy();
// header('location:./index.php');
echo("<script>location.href='./index.php'</script>");
?>