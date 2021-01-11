<!-- Starting the session -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking link.php -->
    <?php
    Require 'link.php';
    ?>

    <link rel="stylesheet" href="style.css">

    <!-- Internal CSS -->
    <style>
        #user_frame {
            width: 140px;
            height: 140px;
            border: 1.5px solid #FF5733;
            border-radius: 50% 50% 50% 50%;
            background: white;
            margin: auto;
            padding: 6px;
            overflow: hidden;
        }

        #user_image {
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }

        .active-p {
            color: #FF5733;
        }

        .hover-p:hover {
            color: black;
            font-weight: bolder;
        }

        .hover-p {
            color: black;
        }

        .ver-line {
            border-right: 1px solid grey;
        }

        @media screen and (max-width: 576px) {
            .hide-sm {
                display: none;
            }
        }

         @media screen and (min-width: 577px) {
            .hide-md {
                display: none;
            }
        }

        .dis-none {
            display: none;
        }

        .hide {
            display: inline-block;
        }

        #extraNav a {
            color: #ffffff80;
        }

        .active{
            color: white;
        }
    </style>

    <title>My Courses | ShreeTechLabs</title>
</head>

<body>

    
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">

<a class="navbar-brand" href="index.php">
    <img src="images/logo/st.png" width="40" height="40" class="d-inline-block align-top" alt="..."
        loading="lazy">
    | ShreeTechLabs
</a>

<span class="navbar-toggler-icon hide-md" onclick="toggleMenu()"></span>

<div id="extraNav" class="dis-none">
    <div class="row no-gutters hide-md ">


        <div class="col-12">
            <a href="index.php">
                <br><span>Home</span><br><br>
            </a>
        </div>

        <div class="col-12">
            <a href="user_profile.php">
                <span>My Profile</span><br><br>
            </a>
        </div>

        <div class="col-12">
            <a href="user_courses.php">
                <span class="active">My Courses</span><br><br>
            </a>
        </div>

        <div class="col-12">
            <a>
               <span>Welcome <?php echo $_SESSION['fname']; ?></span><br><br>
            </a>
        </div>

        <div class="col-12">
            <a href="logout.php">
                <button type="button" class="btn btn_clr">Logout</button>
            </a>
        </div>

    </div>
</div>

</nav>


    <!-- alert -->
    <?php
     Require 'alert.php';
    ?>

    <div class="container-fluid">

        <div class="row no-gutters">

            <div class="col-md-3 ver-line hide-sm"><br><br>
                <div class="row no-gutters">
                    <div id="user_frame">
                        <img src="images/user/images/user_dummy.png" id="user_image" alt="">
                    </div>
                </div><br>
                <div class="row no-gutters">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-9">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <h4>&nbsp; Hi, <?php if(isset($_SESSION['id'])){
                                   echo strtoupper($_SESSION['fname']);
                                   }else{
                                       echo "USER";
                                   } ?>
                                </h4>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <a href="user_profile.php">
                                    <h5 class="hover-p"> &nbsp; My Profile</h5>
                                </a>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <a href="user_courses.php">
                                    <h5 class="active-p"> &nbsp; My Courses</h5>
                                </a>
                            </div>
                            <br><br>
                            <div class="col-md-12">
                                <a href="logout.php">
                                    <h5 class="hover-p"> &nbsp; Logout</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9"><br>

                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-1 hide-sm">
                        </div>
                        <div class="col-md-3 col-6">
                            <h4 class="active-p active_b"
                                style="padding: 1rem 0px; display: inline-block; font-weight: bolder;">My
                                Courses</h4>
                        </div>
                        <div class="col-md-5 hide-sm">
                        </div>
                        <div class="col-md-3 col-6">
                            <a href="#">
                                <button type="button" class="btn btn_clr">Add New</button>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>

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
        <script>
        function toggleMenu() {
            document.getElementById("extraNav").classList.toggle("hide");
        }
    </script>
</body>

</html>