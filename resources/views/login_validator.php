<?php
include("../tools/db.php");


if (!isset($_SESSION)) {
    session_start();
}
// check if the email is in the database and if not direct the user to create an account -->
$email_check_preparedStatement->execute([$_POST['email']]);
$unique = $email_check_preparedStatement->fetch();

if ($unique['count(*)'] == 0) {
    include("create account.php");
    echo '<script>alert("Email address not registered, please create an account.")</script>';
}

// check password is correct
$login_credentials_preparedStatement->execute([$_POST['email']]);
$auth_pass = $login_credentials_preparedStatement->fetch();

$log_pass = hash_hmac('sha256', $_POST["password"], 'GameOn');
//if the password is correct then update session data and direct to the home page, else send back to login with alert
if ($auth_pass['user_password'] == $log_pass) {
    $_SESSION['user_id'] = $auth_pass['user_id'];
    $_SESSION['access_type'] = $auth_pass['access_type'];
    header('Location: homepage.php');
} else {
    include("login.php");
    echo '<script>alert("Password is incorrect.")</script>';
}?>
