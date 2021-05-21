<?php
//include the database file so we can access the queries.
include("../../tools/db.php");

//remove the £ from the entry
$val = substr($_POST['value'], 2);

//execute the query from db.php using the id passed by the URL
$kiosk_order_update_preparedStatement->execute(array(
    $_POST['date'],
    $val,
    $_POST['status'],
    $_GET['id']
));

//display the links edit page
include("edit_order.php"); ?>

