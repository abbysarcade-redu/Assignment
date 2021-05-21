<!-- include the database file so we can access the queries.-->

<?php include("../../tools/db.php");

//execute the query from db.php using the data entered on add_user
$email_check_preparedStatement->execute([$_POST['email']]);
// fetch the data returned by the query
$unique = $email_check_preparedStatement->fetch();

// check to see if this email is already in the database
if ($unique['count(*)'] != 0) {
    //if yes, then return back to the page and provide an alert
    include("add_user.php");
    echo '<script>alert("This email address has already been registered on this site. Please use a different email address.")</script>';
    } else {
    // if no, give a basic password
        $password = 'Password1!';

        //check if admin has been checked and if so then assign it as 2 otherwise 1
        if (isset($_POST['admin'])) {
            $admin = 2;
        } else {
            $admin = 1;
        }

        //execute the query from db.php using the data entered on add_user
        $user_preparedStatement->execute(array(
            $_POST['name'],
            $_POST['email'],
            $password,
            $admin
        ));
        // get the id number of the entry for the view page
        $_GET['id'] = $pdo->lastInsertId();

        // include the view users page, using the get set above it will display the new link

        include("view_users.php");

    }
?>
