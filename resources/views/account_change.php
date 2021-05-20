<?php if(!isset($_SESSION)) {
    session_start();
}
include("../tools/db.php");

$account_update_preparedStatement->execute(array(
    $_POST['customer_name'],
    $_POST['customer_email'],
    $_SESSION['user_id'])
);

include('account.php'); ?>
<script>alert("Your account has been updated.")</script>
