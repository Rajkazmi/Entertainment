<?php

require "../conn.php";
require "../config.php";

if ($_POST) {
    extract($_POST);
    $con = new Appcon($signin);
    $return = $con->CommonSelect("users", "email", $email, "otp", $otp,);
    if ($return == true) {
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
}
?>