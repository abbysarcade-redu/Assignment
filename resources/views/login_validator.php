<?php
include("../tools/db.php");


if (!isset($_SESSION)) {
    session_start();
}

$email_check_preparedStatement->execute([$_POST['email']]);
$unique = $email_check_preparedStatement->fetch();

if ($unique['count(*)'] == 0) {
    include("create account.php");
    echo '<script>alert("Email address not registered, please create an account.")</script>';
}

$login_credentials_preparedStatement->execute([$_POST['email']]);
$auth_pass = $login_credentials_preparedStatement->fetch();

$log_pass = hash_hmac('sha256', $_POST["password"], 'GameOn');

if ($auth_pass['user_password'] == $log_pass) {
    $_SESSION['user_id'] = $auth_pass['user_id'];
    print_r($_SESSION['user_id']);
    header('Location: Homepage.php');
} else {
    include("login.php");
    echo '<script>alert("Password is incorrect.")</script>';
}?>
