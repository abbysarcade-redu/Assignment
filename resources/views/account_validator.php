<?php
//include the database file so we can access the queries.
//include the class controller used to return the data in a specified format.
include("../tools/db.php");
include("../tools/class_controller.php");

// run the query from db.php
$email_check_preparedStatement->execute([$_POST['email']]);
// return the data from the above query
$unique = $email_check_preparedStatement->fetch();


// check if the email has already been used
if ($unique['count(*)'] != 0) {
    // if it has, direct back to the page and ask them to use a different email address
    include("create account.php");
    echo '<script>alert("This email address has already been registered on this site. Please use a different email address.")</script>';
} else {
// if not then hash the password
    $password = hash_hmac('sha256', $_POST["password"], 'GameOn');
    // run the query in db.php to add the data to the database
    $user_preparedStatement->execute(array(
        $_POST['name'],
        $_POST['email'],
        $password,
        1));

    // check if session has started
    if (!isset($_SESSION)) {
        session_start();
    }
    //get the most recent entry id and set as session user id
    $_SESSION['user_id'] = $pdo->lastInsertId();
    // get the users name and session user name
    $_SESSION['user_name'] = $_POST['name'];
    // get the access type and set as session access type
    $_SESSION['access_type'] = 1;

    // direct to account created
    header('Location: account_created.php');
}
?>
