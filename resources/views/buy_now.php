<?php
$_SESSION['basket'] = array($_GET['sku']);

include header('Location: checkout.php'); ?>
<!-- reset the session basket and direct to checkout -->
