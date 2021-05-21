<?php
include("../../tools/db.php");
$val = substr($_POST['value'], 2);
print_r($val);
$kiosk_order_update_preparedStatement->execute(array(
    $_POST['date'],
    $val,
    $_POST['status'],
    $_GET['id']
));

include("edit_order.php"); ?>

