<?php

// Establishing Connection to database
Require 'connection.php';

// Starting the session
session_start();

// Fetching the data from signup form
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$college=mysqli_real_escape_string($con,$_POST['college']);
$branch=mysqli_real_escape_string($con,$_POST['branch']);
$gyear=mysqli_real_escape_string($con,$_POST['gyear']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));

// query variable
$user_reg_query="INSERT INTO shreetechlabs.registration (first_name,last_name,gender,phone,college,branch,graduation_year,email,pass) VALUES ('$fname','$lname','$gender','$phone','$college','$branch','$gyear','$email','$password')";

// query execution
$user_reg_submit=mysqli_query($con,$user_reg_query)
or die(mysqli_error($con));

// Assigning Session variables
$_SESSION['id']=mysqli_insert_id($con);
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
$_SESSION['gender']=$gender;
$_SESSION['phone']=$phone;
$_SESSION['email']=$email;
$_SESSION['college']=$college;
$_SESSION['branch']=$branch;
$_SESSION['gyear']=$gyear;

// Redirecting to index page
header('location: user_profile.php');

?>