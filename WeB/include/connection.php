<?php
// $conn = oci_connect('schema name', 'schema passowrd', 'localhost/XE');
$connection = oci_connect('CHF', 'localpocal', 'localhost/XE');
if (!$connection) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
?>