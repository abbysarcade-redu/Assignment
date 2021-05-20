<?php
include("../../tools/db.php");

if (isset($_POST['admin'])) {
    $admin = 2;
} else {
    $admin = 1;
}

$kiosk_user_update_preparedStatement->execute(array(
    $_POST['name'],
    $_POST['email'],
    $admin,
    $_GET['id']
));

include("e_users.php"); ?>

