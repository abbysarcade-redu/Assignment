<?php
include("../../tools/db.php");

$email_check_preparedStatement->execute([$_POST['email']]);
$unique = $email_check_preparedStatement->fetch();

if ($unique['count(*)'] != 0) {
    include("add_user.php");
    echo '<script>alert("This email address has already been registered on this site. Please use a different email address.")</script>';
    } else {
        $password = 'Password1!';

        if (isset($_POST['admin'])) {
            $admin = 2;
        } else {
            $admin = 1;
        }


        $user_preparedStatement->execute(array(
            $_POST['name'],
            $_POST['email'],
            $password,
            $admin
        ));

        $_GET['id'] = $pdo->lastInsertId();

        include("view_users.php");

    }
?>
