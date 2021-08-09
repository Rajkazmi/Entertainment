<?php
ob_start();
include "header.php";
include "conn.php";
include "config.php";

?>

<!-- banner- -->

<div class="main-content" id="home">
    <section class="banner-w3layouts">
        <div class="container">
            <div class="row banner-w3layouts-grids">
                <div class="col-lg-5 sign-info" data-aos="fade-right">
                    <h3>Create Account</h3>
                    <p class="para-sign mt-2 mb-4 text-center">Enter your email and password to get sign in.</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>First-Name*</label>
                            <div class="icon1">
                                <input placeholder="First-Name" name="fname" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Last-Name*</label>
                            <div class="icon1">
                                <input placeholder="Last-Name" name="lname" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Adhaar-Card-No.*</label>
                            <div class="icon1">
                                <input placeholder="Enter-Adhar-Card-No." name="aadhar" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email*</label>
                            <div class="icon1">
                                <input placeholder="Email" name="email" type="email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password*</label>
                            <div class="icon2">
                                <input placeholder="Enter-Password" name="password" type="password" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Choose-Type*</label>
                            <div class="icon2">
                                <label>Dealer*</label>
                                <input placeholder="" name="type" type="radio" required="" value="dealer">
                                <label>Actor*</label>
                                <input placeholder="" name="type" type="radio" required="" value="actor">
                            </div>
                        </div>
                        <div name="g-recaptcha-response" class="g-recaptcha" data-sitekey="6Lc_ulQbAAAAACkfnjyb2FYhygLCcABujvvLsbJT">
                        </div>
                        <input type="submit" value="Create Account" name="register">
                        <p class="para-sign mt-3">Already have an Account ? <a href="signin.php" class="ml-2"> <strong>Sign in to your Account</strong></a></p>
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


<?php include "footer.php"; ?>

<?php
if (isset($_POST['register'])) {

    extract($_POST);

    if ($fname == "" && $lname == "" && $aadhar == "" && $email == "" && $password == "" && $type == "") {
        echo '<script>swal("Fill all the fields!", "error");</script>';
    } else {
        $recaptcha_secret = "6Lc_ulQbAAAAAKufEAbLoho61YHfw3ykJqG6fiAj";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
        $response = json_decode($response, true);

        //if ($response["success"] === true) {

            $f = preg_match("/^[A-Za-z]{3,50}$/", $fname);
            $l = preg_match("/^[A-Za-z]{3,50}$/", $lname);
            $a = preg_match("/^[0-9]{12}$/", $aadhar);
            $e = filter_var($email, FILTER_VALIDATE_EMAIL);
            $p = md5($password);
            $photo = "photo/avatar.png";


            if ($f && $l && $a && $e) {

                $con = new Appcon($signin);
                $result = $con->IfUserExists($email, $aadhar);

                if ($result === true) {
                    echo '<script>swal("Email, Adhaar!", "Already Register", "error");</script>';
                } else {
                    $con->register($type, $fname, $lname, $aadhar, $email, $p, $photo);
                }
            }
       // } else {
         //   echo '<script>swal("Captcha!", "Accept Captcha First!", "error");</script>';
       // }
    }
}
?>