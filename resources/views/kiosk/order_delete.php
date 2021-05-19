<?php
include("../../tools/db.php");
$delete_order_preparedStatement->execute([$_GET['id']]);

include("order.php"); ?>
