<?php

include "config.php";
include "conn.php";
if ($_POST) {
    extract($_POST);

    $con = new Appcon($signin);
    $p = md5($password);
    $login = $con->login($email, $p);
    if ($login == true) {
        echo json_encode(array('success' => 1));
    } else {
        echo json_encode(array('success' => 0));
    }
}
?>
