<?php
//include the database file so we can access the queries.
include("../../tools/db.php");

//execute the query from db.php using the SKU passed by the URL
$delete_product_preparedStatement->execute([$_GET['sku']]);

//display the products page
include("products.php"); ?>
