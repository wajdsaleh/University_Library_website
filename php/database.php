<?php
$conn = oci_connect("wajd", "wajd1200", "LAPTOP-FBNS74CI/XE");

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);}





//         $val = "SELECT UNI_E_MAIL FROM REGISTER WHERE UPPER(UNI_E_MAIL) = UPPER (:email)";
//         $R = oci_parse($conn,$val);
//         oci_bind_by_name($R,"email",$email);    
//         oci_execute($R);
//         while($row = oci_fetch_array($R));
//         if(oci_num_rows($R) != 0)
//         die("Email is already used..");

return $conn;



?>