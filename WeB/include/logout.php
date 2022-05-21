<?php
session_start();
unset($_SESSION['txtEmail']);
unset($_SESSION['txtPassword']);
unset($_SESSION['users']);

// header('location: ./index.php');
echo("<script>location.href='index.php'</script>");

?>