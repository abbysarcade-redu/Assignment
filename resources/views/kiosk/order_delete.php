<?php
//include the database file so we can access the queries.
include("../../tools/db.php");
//execute the query from db.php using the id passed by the URL
$delete_order_preparedStatement->execute([$_GET['id']]);

//display the orders page
include("order.php"); ?>
