<?php
include("../../tools/db.php");


$kiosk_user_update_preparedStatement->execute(array(
    $_POST['name'],
    $_POST['email'],
    $_GET['id']
));

include("e_users.php"); ?>

