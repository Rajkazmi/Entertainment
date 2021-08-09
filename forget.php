<?php
require "header.php";
?>

<!-- VERIFY DETAIL -->

<div  class="main-content" id="home">
  <section class="banner-w3layouts">
    <div class="container">
      <div id="email" class="row banner-w3layouts-grids">
        <div class="col-lg-5 sign-info" data-aos="fade-right">
          <div class="card-body pb-2 ">
            <div class="form-group">
              <h3>Forget Password</h3>
            </div>
          </div>
          <div class="card-body pb-2 ">
            <div class="form-group">
              <h6>Verify!&nbsp;It's You </h6> We Will Send OTP To Your Register Email
            </div>
          </div>

          <form id="verifyemail" method="post">
            <div class="form-group">

              <label>User Email*</label>
              <div class="icon1">
                <input placeholder="Enter Your Email" name="email" type="email" required="">
              </div>
            </div>


            <div class="clearfix"></div>
            <input type="submit" name="send" value="Send OTP">
            <p class="para-sign mt-3">Don’t know an Account ? <a href="register.php" class="ml-2"> <strong>Create your Account</strong></a></p>
          </form>

          <div id="alert">
          </div>

          <script>
            $(document).ready(function() {
              $('#verifyemail').submit(function(e) {
                e.preventDefault();
                $.ajax({
                  type: "POST",
                  url: 'sendOtp.php',
                  data: $(this).serialize(),
                  success: function(response) {

                    var jsonData = JSON.parse(response);
                    // user is logged in successfully in the back-end
                    // let's redirect
                    if (jsonData.success == "1") {
                      $(document).ready(function() {
                        $('#email').hide();
                        $("#otp").css("display", "block");
                      });
                    } else {
                      $('#alert').html('<div class="alert alert-danger" role="alert"' + '>' +
                        'Wrong Email!' +
                        '<div>');
                    }
                  }
                });
              });
            });
          </script>

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

      <!-- VERIFY DETAIL -->

      <!-- OTP DETAIL -->


      <div id="otp" style="display: none;" class="row banner-w3layouts-grids">
        <div class="col-lg-5 sign-info" data-aos="fade-right">
          <div class="card-body pb-2 ">
            <div class="form-group">
              <h3>Enter Your OTP</h3>
            </div>
          </div>
          <div class="card-body pb-2 ">
            <div class="form-group">
              <h6>Verify!&nbsp;OTP </h6> Check Your Registered Email
            </div>
          </div>

          <form id="otpform" method="post">
            <div class="form-group">
              <input style="display: none;" type="email" name="email" class="form-control" value="<?php echo $email ?>" hidden readonly>
              <label>User Email*</label>
              <div class="icon1">
                <input placeholder="Enter Your OTP" name="otp" type="password" required="">
              </div>
            </div>

            <div class="clearfix"></div>
            <input type="submit" name="save" value="Confirm">

          </form>

          <div id="error">
          </div>

          <script>
            $(document).ready(function() {
              $('#otpform').submit(function(e) {
                e.preventDefault();
                $.ajax({
                  type: "POST",
                  url: 'verifyOtp.php',
                  data: $(this).serialize(),
                  success: function(response) {
                    var jsonData = JSON.parse(response);

                    if (jsonData.success == "1") {
                      $(document).ready(function() {
                        $("#otp").css("display", "none");
                        $("#pass").css("display", "block");
                      });
                    } else {
                      $('#error').html('<div class="alert alert-danger" role="alert"' + '>' +
                        'Wrong OTP!' +
                        '<div>');
                    }
                  }
                })
              });
            });
          </script>

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
</div>

<!-- OTP DETAIL -->

<!-- CHANGE PASSWORD -->

<div id="pass" style="display: none;" class="container hide light-style mx-auto container-p-y">
  <h4 class="font-weight-bold py-3 mb-4">Enter Your New Passwords</h4>
  <div class="card col-md-8">
    <div class="tab-content ">
      <div class="tab-pane active show" id="account-general">

        <div class="card-body pb-2 ">

          <div class="card-body pb-2">
            <div class="form-group">
              <label class="form-label font-weight-bold">
                <h5>Do Not Sahre Your Password With Anyone </h5>
              </label>
            </div>
          </div>

          <form id="passform" method="post">

            <div class="card-body pb-2 ">
              <input style="display: none;" type="email" name="email" class="form-control" value="<?php echo $email ?>" hidden readonly>

              <div class="form-group">
                <label class="form-label">New password</label>
                <input type="password" name="pass" class="form-control" required>
              </div>
            </div>

            <div class="card-body pb-2 ">
              <div class="form-group">
                <label class="form-label">Repeat new password</label>
                <input type="password" name="newpass" class="form-control" required>
              </div>
            </div>

            <div class="card-body pb-2 ">
              <div class="form-group">
                <div class="text-right mt-3">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input type="submit" name="done" class="btn btn-primary" value="Submit">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-default">Cancel</button>
                </div>
              </div>
            </div>
            <div id="change">
            </div>
          </form>

          <script>
            $(document).ready(function() {
              $('#passform').submit(function(e) {
                e.preventDefault();
                $.ajax({
                  type: "POST",
                  url: 'passChange.php',
                  data: $(this).serialize(),
                  success: function(response) {
                    var jsonData = JSON.parse(response);
                    if (jsonData.success == "1") {
                      swal("Password Change!", "Successfully!", "success");
                      //
                      $(function() {
                        setTimeout(function() {
                          location.href = 'manage.php';
                        }, 3000);
                      });

                    } else {
                      $('#change').html('<div class="alert alert-danger" role="alert"' + '>' +
                        'Fill both field same!' +
                        '<div>');
                    }
                  }
                })
              });
            });
          </script>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CHANGE PASSWORD -->




</div>



<?php
require "footer.php";
?>