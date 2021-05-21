
<!-- check if session is started -->
<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<!-- check if the user is logged in and if not then redirect them to login  -->
<?php if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}; ?>

<!DOCTYPE html>
<!-- include headers for design elements -->

<?php include ("layout/header.php"); ?>
<header>
    <!-- Add a name to the tab shown on the browser-->

    <title>Account</title>
</header>
<body>
<!-- include the nav bar -->

<?php include ("layout/nav.php"); ?>
<!-- container for the content page -->

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/account-banner.png" class="hero">
    </div>
    <div>
        <!--  form to send the user to account_change using post-->
        <form name="account_update" action="account_change.php" method="post">
            <div class="form-row">
                <!-- run the query from db.php using the user id from the session-->
                <?php $user_details_preparedStatement->execute([$_SESSION['user_id']]);
                //run the query from db.php
                $user = $user_details_preparedStatement->fetchObject('users');?>
                <div>
                    <label class="left-white">Name</label>
                    <!-- return the user name from the query on line 37 -->
                    <input class="form-style" placeholder="Full Name*" name="customer_name" value="<?php echo $user->user_name ?>">
                </div>
                <div>
                    <label class="left-white">Email</label>
                    <!-- return the user email from the query on line 37 -->
                    <input class="form-style" placeholder="Email Address*" name="customer_email" value="<?php echo $user->user_email ?>">
                </div>
                <!-- submit button to run acction -->
                <button class="button-pink" type="submit">Save</button>
            </div>
        </form>
        <div class="form-row">
            <!-- allow the user to review their past orders using the user id from the session -->

            <a href="past_orders.php?id=<?php echo($_SESSION['user_id']); ?>" class="button-yellow">Orders</a>
            <a href="logout.php" class="button-pink">Logout</a>
        </div>
    </div>
</div>

<!-- including the footer -->

<?php include ("layout/footer.php"); ?>
