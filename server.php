<?php 

session_start();
error_reporting(E_ERROR | E_PARSE);

// Initialising variables
$username = "";
$email = "";
$password_1 = "";
$password_2 = "";

$errors = array();

// Connect to database
$db = mysqli_connect('localhost','root','','practice') or  die("could not connect to database");

// Register users
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


// Form validation 
if (empty($username)) {array_push($errors, "Username is required");}
if (empty($email)) {array_push($errors, "Email is required");}
if (empty($password_1)) {array_push($errors, "Password is required");}
if ($password_1 != $password_2) {array_push($errors, "Passwords do not match");}


// Check db fpr existing user with same username
$user_check_query = "SELECT * FROM user WHERE username= '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {

    if($user['username'] === $username){array_push($errors, "Username already exists");}
    if($user['email'] === $email){array_push($errors, "Email already exists");}
}

// Register user if no error

if(count($errors) == 0){

    $password = password_hash($password_1, PASSWORD_DEFAULT);  // This encrypts the password
    $query = "INSERT INTO user  (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: index.php');

}

// Login User

if(isset($_POST['login_user'])){

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    if(empty($username)){

        array_push($errors, "Username is required");
    }
    if(empty($password)){

        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {

        $password = password_hash($password_1, PASSWORD_DEFAULT); 
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results)) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header("location : index.php");
        }else {
            array_push($errors, "Wrong username/password combination. Please try again. ");
        }
    }

}








?>