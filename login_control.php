<?php

//Connection to database
Require 'connection.php';

//Starting the session
session_start();

//Fetching data from login form
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));

//Query variable
$login_query="SELECT id,first_name,last_name,college,branch,graduation_year,phone,gender,email FROM shreetechlabs.registration WHERE email='$email' AND pass='$password'";

//Query Execution
$login_query_execution=mysqli_query($con,$login_query) or die(mysqli_error($con));

//Fetching array of query result
$row=mysqli_fetch_array($login_query_execution);

//Login validation logic
if($email==$row['email']){  
$_SESSION['id']=$row['id'];
$_SESSION['fname']=$row['first_name'];
$_SESSION['lname']=$row['last_name'];
$_SESSION['gender']=$row['gender'];
$_SESSION['phone']=$row['phone'];
$_SESSION['email']=$row['email'];
$_SESSION['college']=$row['college'];
$_SESSION['branch']=$row['branch'];
$_SESSION['gyear']=$row['graduation_year'];
header('location: user_profile.php');
}else{
header('location: login.php?error=1');
}

?>