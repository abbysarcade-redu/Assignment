
<!-- check if session is started -->
<?php if(!isset($_SESSION)) {
    session_start();
}

//include the class controller used to return the data in a specified format.

include("../tools/db.php");

//execute the query from the db.php file
$account_update_preparedStatement->execute(array(
    $_POST['customer_name'],
    $_POST['customer_email'],
    $_SESSION['user_id'])
);

// direct back to page with an alert
include('account.php'); ?>
<script>alert("Your account has been updated.")</script>
