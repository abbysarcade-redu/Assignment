<?php
include("../../tools/db.php");
$delete_product_preparedStatement->execute([$_GET['sku']]);

include("products.php"); ?>
