<?php

require "../conn.php";
require "../config.php";

if ($_POST) {
  extract($_POST);
  $con = new Appcon($signin);
  if ($pass == $newpass) {
    $newpass = md5($newpass);
    $sql = $signin->prepare("UPDATE users SET password = :newpass WHERE email = :pager ");
    $sql->bindParam(':newpass', $newpass);
    $sql->bindParam(':pager', $email);
    $sql->execute();
    echo json_encode(array('success' => 1));
  } else {
    echo json_encode(array('success' => 0));
  }
}
?>