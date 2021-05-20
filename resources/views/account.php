<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<?php if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
}; ?>

<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Account</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/account-banner.png" class="hero">
    </div>
    <div>
        <form name="account_update" action="account_change.php" method="post">
            <div class="form-row">
                <?php $user_details_preparedStatement->execute([$_SESSION['user_id']]);
                $user = $user_details_preparedStatement->fetchObject('users');?>
                <div>
                    <label class="left-white">Name</label>
                    <input class="form-style" placeholder="Full Name*" name="customer_name" value="<?php echo $user->user_name ?>">
                </div>
                <div>
                    <label class="left-white">Email</label>
                    <input class="form-style" placeholder="Email Address*" name="customer_email" value="<?php echo $user->user_email ?>">
                </div>
                <button class="button-pink" type="submit">Save</button>
            </div>
        </form>
        <div class="form-row">
            <a href="past_orders.php?id=<?php echo($_SESSION['user_id']); ?>" class="button-yellow">Orders</a>
            <a href="logout.php" class="button-pink">Logout</a>
        </div>
    </div>
</div>
<?php include ("layout/footer.php"); ?>
