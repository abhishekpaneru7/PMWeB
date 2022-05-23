<?php
// $conn = oci_connect('schema name', 'schema passowrd', 'localhost/XE');
if(!isset($_SESSION)) { 
    session_start(); 
  }
  $connection = oci_connect('chf_chf', 'localpocal', 'localhost/XE');
if (!$connection) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?> 