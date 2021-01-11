<!-- Starting the session -->
<?php
session_start();
?>

<!-- HTML Boiler Plate -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Section -->
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking link.php -->
    <?php
    Require 'link.php';
    ?>

    <!-- Internal CSS -->
    <style>

        /* Hide for Small Devices */
        @media screen and (max-width: 576px) {
            .hide-sm {
                display: none;
            }
        }

        /* Hide for Medium Devices */
        @media screen and (min-width: 577px) {
            .hide-md {
                display: none;
            }
        }

        /* User Rounded Frame */
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

        /* Users Image */
        #user_image {
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }

        /* To Define Active state Of Side Menu */
        .active-p {
            color: #FF5733;
        }

        /* To Define Hover Effect on Side Menu */
        .hover-p:hover {
            color: black;
            font-weight: bolder;
        }

        /* To Define Pre-Defined Color Of Side Menu */
        .hover-p {
            color: black;
        }

        /* Boundary b/w Side Menu & Content Area */
        .ver-line {
            border-right: 1px solid grey;
        }

        /* To Defaultly Hide Something */
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

    <!-- Title For This Page -->
    <title>My profile | ShreeTechLabs</title>

</head>

<!-- Body Section -->
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">

        <!-- ShreeTechlabs Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="images/logo/st.png" width="40" height="40" class="d-inline-block align-top" alt="..."
                loading="lazy">
            | ShreeTechLabs
        </a>

        <!-- Humberger Button For Small Devices -->
        <span class="navbar-toggler-icon hide-md" onclick="toggleMenu()"></span>

        <!-- Humberger Menu For Small Devices -->
        <div id="extraNav" class="dis-none">
            <div class="row no-gutters hide-md ">

                <!-- Home -->
                <div class="col-12">
                    <a href="index.php">
                        <br><span>Home</span><br><br>
                    </a>
                </div>

                <!-- My Profile -->
                <div class="col-12">
                    <a href="user_profile.php">
                        <span class="active">My Profile</span><br><br>
                    </a>
                </div>

                <!-- My Courses -->
                <div class="col-12">
                    <a href="user_courses.php">
                        <span>My Courses</span><br><br>
                    </a>
                </div>

                <!-- Dynamic Greeting  -->
                <div class="col-12">
                    <a>
                       <span>Welcome <?php echo $_SESSION['fname']; ?></span><br><br>
                    </a>
                </div>

                <!-- Logout -->
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
 
    <!-- Layout After Alert Section -->
    <div class="container-fluid">

        <!-- Defining Grid System -->
        <div class="row no-gutters">

            <!-- Side Bar Navigation Layout -->
            <div class="col-md-3 ver-line hide-sm"><br><br>

                <!-- Users Photo layout -->
                <div class="row no-gutters">
                    <div id="user_frame">
                        <img src="images/user/images/user_dummy.png" id="user_image" alt="">
                    </div>
                </div><br>

                <!-- Side Navigation Bar Menu -->
                <div class="row no-gutters">

                    <!-- Just For Spacing -->
                    <div class="col-md-3">
                    </div>

                    <!--Redirect Options -->
                    <div class="col-md-9">

                        <div class="row no-gutters">

                            <!-- Displaying Users Name -->
                            <div class="col-md-12">
                                <h4>&nbsp; Hi, <?php if(isset($_SESSION['id'])){
                                   echo strtoupper($_SESSION['fname']);
                                   }else{
                                       echo "User";
                                   } ?>
                                </h4>
                            </div><br><br>

                            <!-- My Profile Button -->
                            <div class="col-md-12">
                                <a href="user_profile.php">
                                    <h5 class="active-p"> &nbsp; My Profile</h5>
                                </a>
                            </div><br><br>

                            <!-- My Course Button -->
                            <div class="col-md-12">
                                <a href="user_courses.php">
                                    <h5 class="hover-p"> &nbsp; My Courses</h5>
                                </a>
                            </div><br><br>

                            <!-- Logout Button -->
                            <div class="col-md-12">
                                <a href="logout.php">
                                    <h5 class="hover-p"> &nbsp; Logout</h5>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Right Side Content Layout -->
            <div class="col-md-9"><br>

                <div class="container">
                    <div class="row no-gutters align-items-center">

                        <!-- Some Spacing Before My Profile Section -->
                        <div class="col-md-1 hide-sm">
                        </div>

                        <!-- My Profile Text -->
                        <div class="col-md-3 col-6">
                            <h4 class="active-p active_b"
                                style="padding: 1rem 0px; display: inline-block; font-weight: bolder;">My
                                Profile</h4>
                        </div>

                        <!-- Spacing B/W My Profile & Edit Profile Button -->
                        <div class="col-md-5 hide-sm">
                        </div>

                        <!-- Edit Profile Button -->
                        <div class="col-md-3 col-6">
                            <a href="#">
                                <button type="button" class="btn btn_clr">Edit Profile</button>
                            </a>
                        </div>

                    </div>
                </div><hr>

               <!-- For User Details Text Area -->
                <div class="container">
                    <div class="row no-gutters align-items-centre">

                        <div class="col-md-1">
                        </div>

                        <div class="col-md-3">
                            <span style="font-weight: bolder;">USER DETAILS</span>
                        </div>

                    </div>
                </div><br>

                <!-- For First Name & Last Name -->
                <div class="container">
                    <div class="row no-gutters align-items-center">

                        <!-- For Some Spacing -->
                        <div class="col-md-1">
                        </div>

                        <!-- For First Name & Last Name -->
                        <div class="col-md-11">
                            <din class="row no-gutters align-items-center">
                                <div class="col-md-2 col-4">
                                    <span>First Name :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['fname'];?></span>
                                </div>
                                <div class="col-md-2 col-4">
                                    <span>Last Name :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['lname'];?></span>
                                </div>
                            </din>
                        </div>

                    </div>
                </div><span class="hide-sm"><br></span>

                <!-- For User ID & Gender -->
                <div class="container">
                    <div class="row no-gutters align-items-center">

                        <!-- For Some Spacing -->
                        <div class="col-md-1">
                        </div>

                        <!-- For User ID & Gender -->
                        <div class="col-md-11">
                            <din class="row no-gutters align-items-center">
                                <div class="col-md-2 col-4">
                                    <span>User ID :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold">STL<?php echo $_SESSION['id'];?></span>
                                </div>
                                <div class="col-md-2 col-4">
                                    <span>Gender :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['gender'];?></span>
                                </div>
                            </din>
                        </div>

                    </div>
                </div><span class="hide-sm"><br></span>

                <!-- For Email & Phone -->
                <div class="container">

                    <div class="row no-gutters align-items-center">

                        <div class="col-md-1">
                        </div>

                        <div class="col-md-11">
                            <din class="row no-gutters align-items-center">
                                <div class="col-md-2 col-4">
                                    <span>Email :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['email'];?></span>
                                </div>
                                <div class="col-md-2 col-4">
                                    <span>Phone :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['phone'];?></span>
                                </div>
                            </din>
                        </div>

                    </div><hr>

                </div><span class="hide-sm"><br></span>

                <!-- For College Detail Text -->
                <div class="container">
                    <div class="row no-gutters align-items-centre">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-3">
                            <span style="font-weight: bolder;">COLLEGE DETAILS</span>
                        </div>
                    </div>
                </div><br>

                <!-- For College Details Section -->
                <div class="container">
                    <div class="row no-gutters align-items-center">

                        <div class="col-md-1">
                        </div>

                        <div class="col-md-11">
                            <din class="row no-gutters align-items-center">
                                <div class="col-md-2 col-4">
                                    <span>College :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['college'];?></span>
                                </div>
                                <div class="col-md-2 col-4">
                                    <span>Branch :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['branch'];?></span>
                                </div>
                            </din>
                        </div>

                    </div>
                </div><span class="hide-sm"><br></span>

                <!-- For Graduation Year -->
                <div class="container">
                    <div class="row no-gutters align-items-center">

                        <div class="col-md-1">
                        </div>

                        <div class="col-md-11">
                            <din class="row no-gutters align-items-center">
                                <div class="col-md-2 col-4">
                                    <span>Graduation Year :</span>
                                </div>
                                <div class="col-md-4 col-8">
                                    <span
                                        style="font-family: 'Teko', sans-serif; font-weight:Bold"><?php echo $_SESSION['gyear'];?></span>
                                </div>
                            </din>
                        </div>

                    </div><hr>
                </div><span class="hide-sm"><br></span>

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

    <script src="script.js"></script>

    <script>
        function toggleMenu() {
            document.getElementById("extraNav").classList.toggle("hide");
        }
    </script>
    
</body>

</html>