<?php
ob_start();
require "header.php";

?>

<!-- banner- -->
<div class="main-content" id="home">
    <section class="banner-w3layouts">
        <div class="container">
            <div class="row banner-w3layouts-grids">
                <div class="col-lg-5 sign-info" data-aos="fade-right">
                    <h3>Sign in to your Account</h3>
                    <p class="para-sign mt-2 mb-4 text-center">Enter your details to Login.</p>

                    <form action="" method="post">
                        <div class="form-group">

                            <label>User Email*</label>
                            <div class="icon1">
                                <input placeholder="" name="email" type="email" required="">
                            </div>
                        </div>
                        <div class="form-group">

                            <label>Password*</label>
                            <div class="icon2">
                                <input placeholder="" name="password" type="password" required="">
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Lc_ulQbAAAAACkfnjyb2FYhygLCcABujvvLsbJT">
                        </div>

                        <label class="anim">
                            <input type="checkbox" class="checkbox">
                            <span>Remember Me</span>
                            <a href="forget.php">Forgot Password</a>
                        </label>
                        <div class="clearfix"></div>
                        <input type="submit" name="sign" value="Sign in">
                        <p class="para-sign mt-3">Don’t know an Account ? <a href="register.php" class="ml-2"> <strong>Create your Account</strong></a></p>
                    </form>
                </div>
                <div class="col-lg-7 banner-w3layouts-image pl-md-5">
                    <div class="effect-w3">
                        <img src="images/img4.jpg" alt="" class="img-fluid image1">
                        <img src="images/img4.jpg" alt="" class="img-fluid image2">
                        <img src="images/img4.jpg" alt="" class="img-fluid image3">
                        <img src="images/img4.jpg" alt="" class="img-fluid image4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner- -->
</div>
<?php
include "footer.php";
?>

<?php


require "conn.php";
require "config.php";

if (isset($_POST['sign'])) {
    extract($_POST);
    if ($email == "" && $password == "") {
        echo '<script>swal("Fill all the fields!", "error");</script>';
    } else {
        $recaptcha_secret = "6Lc_ulQbAAAAAKufEAbLoho61YHfw3ykJqG6fiAj";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
        $response = json_decode($response, true);

        //if ($response["success"] === true) {
        $e = filter_var($email, FILTER_VALIDATE_EMAIL);
        $p = md5($password);

        if ($e) {
            $con = new Appcon($signin);
            $login = $con->login($email, $p);
            if ($login == true) {
                 
                session_start();

                $_SESSION['MYSESSION'] = $email;
                header("location:dashboard");
            } else {
                echo '<script>swal("Login Failed!", "Invalid Email and Password!", "Error");</script>';
            }
        }
        // } else {
        //     echo '<script>swal("Captcha!", "Accept Captcha First!", "error");</script>';
        // }
    }
}
?>