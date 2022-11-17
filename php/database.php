<?php
$conn = oci_connect("YourDBName", "YourDBPassword", "TheHostName");

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);}

return $conn;



?>
