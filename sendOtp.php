<?php

  require "../conn.php";
  require "../config.php";
  
  
  if ($_POST) {
    extract($_POST);
    
    $con = new Appcon($signin);
    $result = $con->Forget("users", "email", $email);
    if ($result == true) {
      $otp = rand(100000, 999999);
      $to = $email;
      $subject = "Your OTP Do not share with anyone";
      $message = "your one time password is:" . $otp . "thankyou";
      $header = "From: entertainment.co.in";
      //mail($to, $subject, $message, $header);
      //if (mail($to, $subject, $message, $header)) {
      $msql = $signin->prepare("UPDATE users SET otp = :onetimepass WHERE email = :id");
      $msql->bindParam(':onetimepass', $otp);
      $msql->bindParam(':id', $email);
      $msql->execute();
      echo json_encode(array('success' => 1));
      //} else {
      //echo '<div class="alert alert-danger">
      //<strong>Wrong!</strong> Somthing went Wrong!.
      //</div>';
      //}
    } else {
      echo json_encode(array('success' => 0));
    }
  }

?>
