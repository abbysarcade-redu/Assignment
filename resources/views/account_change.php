<?php
include("../tools/db.php");

$account_update_preparedStatement->execute([$_POST['customer_name'], $_POST['customer_email'], $_SESSION['user_id']]);

header('Location: account.php'); ?>
