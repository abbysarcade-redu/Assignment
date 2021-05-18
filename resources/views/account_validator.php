<?php
include("../tools/db.php");


$email_check_preparedStatement->execute([$_POST['email']]);
$unique = $email_check_preparedStatement->fetch();

if ($unique['count(*)'] != 0)
    include("create account.php");
    echo '<script>alert("This email address has already been registered on this site. Please use a different email address.")</script>';
?>
