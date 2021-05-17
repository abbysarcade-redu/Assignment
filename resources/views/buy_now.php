<?php
$_SESSION['basket'] = array($_GET['sku']);

include header('Location: checkout.php'); ?>
