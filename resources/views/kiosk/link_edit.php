<?php
include("../../tools/db.php");
$kiosk_link_update_preparedStatement->execute(array(
    $_POST['website'],
    $_POST['webpage'],
    $_POST['author'],
    $_POST['url'],
    $_GET['id']
    ));

include("e-links.php"); ?>
