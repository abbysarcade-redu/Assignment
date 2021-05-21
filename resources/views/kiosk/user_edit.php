<?php
//include the database file so we can access the queries.

include("../../tools/db.php");


//check if admin has been checked and if so then assign it as 2 otherwise 1
if (isset($_POST['admin'])) {
    $admin = 2;
} else {
    $admin = 1;
}

//execute the query from db.php using the id passed by the URL


$kiosk_user_update_preparedStatement->execute(array(
    $_POST['name'],
    $_POST['email'],
    $admin,
    $_GET['id']
));

//display the users edit page

include("edit_users.php"); ?>

