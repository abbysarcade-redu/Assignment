<?php
if(!isset($_SESSION)) {
    session_start();
}
//clear session data and direct to login page
unset($_SESSION['user_id']);
$_SESSION['basket'] = array();
unset($_SESSION['total']);
unset($_SESSION['order_number']);
unset($_SESSION['access_type']);

print_r($_SESSION);

header('Location: login.php');?>
