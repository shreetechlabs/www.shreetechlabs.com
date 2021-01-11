<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | ShreeTechLabs</title>

    <!-- Linking Link.php -->
    <?php
    Require 'link.php';
    ?>

</head>

<body>
    <!-- navigation bar -->
    <?php
   Require 'nav.php';
   ?>

    <!-- alert -->
    <?php
   Require 'alert.php';
   ?>

    <div class="container"><br><br>

        <div class="row">

            <!-- Login banner -->
            <div class="col-md-8">
                <img src="images/banner/login.jpg" alt="">
            </div>

            <!-- Login form -->
            <div class="col-md-4">

                <!-- Login-Signup Indicator -->
                <div class="row">
                    <div class="col-4">
                        <div class="active_b">
                            <a href="login.php">
                                <h4 class="login_h active_h">Login</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div>
                            <a href="signup.php">
                                <h4 class="signup_h">SignUp</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Login Form -->
                <h5 style="font-family: 'Bree Serif', serif">Login to your Account</h5>
                <form method="POST" action="login_control.php">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="input_email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" id="input_password" placeholder="Password"
                                name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn_clr btn-block">Login Now</button><br>

                </form>

            </div>

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>