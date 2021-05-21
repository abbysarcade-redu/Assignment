<?php
include("../tools/db.php");
include("../tools/class_controller.php");


$email_check_preparedStatement->execute([$_POST['email']]);
$unique = $email_check_preparedStatement->fetch();

if ($unique['count(*)'] != 0) {
    include("create account.php");
    echo '<script>alert("This email address has already been registered on this site. Please use a different email address.")</script>';
} else {

    $password = hash_hmac('sha256', $_POST["password"], 'GameOn');
    $user_preparedStatement->execute(array(
        $_POST['name'],
        $_POST['email'],
        $password,
        1));
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['user_id'] = $pdo->lastInsertId();
    $_SESSION['user_name'] = $_POST['name'];
    $_SESSION['access_type'] = 1;
    header('Location: account_created.php');
}
?>
