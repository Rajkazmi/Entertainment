<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <div id="myform">
        <form id="loginform" method="post">
            <div>
                Username:
                <input type="email" name="email" id="username" />
                Password:
                <input type="password" name="password" id="password" />
                <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#loginform').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'login.php',
                    data: $(this).serialize(),
                    success: function(response) {

                        var jsonData = JSON.parse(response);

                        // user is logged in successfully in the back-end
                        // let's redirect
                        if (jsonData.success == "1") {
                            $(document).ready(function() {
                                $.ajax({
                                    type: "POST",
                                    url: 'signin.php',
                                    success: function(next) {
                                        $('#myform').html(next);
                                    }
                                });
                            });
                        } else {
                            alert('Invalid Credentials!');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>