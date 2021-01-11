<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | ShreeTechLabs</title>

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

            <!-- login banner -->
            <div class="col-md-8">
                <img src="images/banner/login.jpg" alt="">
            </div>

            <!-- Form area -->
            <div class="col-md-4">

                <!-- Login-Signup-navigation -->
                <div class="row">

                    <div class="col-4">
                        <div>
                            <a href="login.php">
                                <h4 class="login_h">Login</h4>
                            </a>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="active_b">
                            <a href="signup.php">
                                <h4 class="signup_h active_h">SignUp</h4>
                            </a>
                        </div>
                    </div>

                </div>
                <hr>

                <h5 style="font-family: 'Bree Serif', serif">New to ShreeTechLabs?</h5>

                <p> &nbsp; Get access to all courses now</p>

                <form method="POST" action="signup_control.php">

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="input_fname" placeholder="First Name"
                                name="fname">
                        </div>

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="input_lname" placeholder="Last Name"
                                name="lname">
                        </div>

                        <div class="form-group col-md-4">
                            <select id="input_gender" class="form-control" name="gender">
                                <option selected disabled>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="form-group col-md-8">
                            <input type="tel" class="form-control" id="input_mob" placeholder="Phone Number"
                                name="phone">
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="input_college" placeholder="College Name"
                                name="college">
                        </div>

                        <div class="form-group col-md-6">
                            <select id="input_branch" class="form-control" name="branch">
                                <option selected disabled>Choose Branch</option>
                                <option>Electrical Engineering-EE</option>
                                <option>Electrical & Electronics Engineering-EEE</option>
                                <option>Computer Science & Engineering-CSE</option>
                                <option>Information Technology-IT</option>
                                <option>Mechanical Engineering-ME</option>
                                <option>Civil Engineering-CE</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <select id="input_grad_yr" class="form-control" name="gyear">
                                <option selected disabled>Graduation Year</option>
                                <option>2024</option>
                                <option>2023</option>
                                <option>2022</option>
                                <option>2021</option>
                                <option>2020</option>
                                <option>2019</option>
                                <option>2018</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2012</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12">
                            <input type="email" class="form-control" id="input_email" placeholder="Email" name="email">
                        </div>

                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" id="input_password" placeholder="Password"
                                name="password">
                        </div>

                    </div>

                    <button type="submit" class="btn btn_clr btn-block">Sign Up Now</button>

                </form>

            </div>

        </div><br><br>

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