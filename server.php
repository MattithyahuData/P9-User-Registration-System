<?php 

session_start();

// Initialising variables
$username = "";
$email = "";

$errors = array();

// Connect to database
$db = mysqli_connect('localhost','root','','practice') or  die("could not connect to database");

// Register users
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


// Form validation 
if (empty($username)) {array_push($errors, "Username is required")};
if (empty($email)) {array_push($errors, "Email is required")};
if (empty($password_1)) {array_push($errors, "Password is required")};
if ($password_1 != $password_2) {array_push($errors, "Passwords do not match")};


// Check db fpr existing user with same username
$user_check_query = 



























?>