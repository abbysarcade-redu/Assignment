<!DOCTYPE html>
<!-- include headers for design elements -->

<?php include ("layout/header.php"); ?>
<header>
    <!-- Add a name to the tab shown on the browser-->

    <title>Account Created</title>
</header>
<body>
<!-- include the nav bar -->

<?php include ("layout/nav.php"); ?>

<!-- container for the content page -->

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/account_created.png" class="hero">
    </div>
    <div class="account_created_page">
        <div class="account_created_container">
            <!-- return the name from the session variable -->
            <h1 class="a-title">Congratulations <?php $_SESSION['user_name']?>!</h1>
            <p class="a-content">Your account has been set up.</p>
        </div>
        <div>
            <img class="accountcimg" src="Style/images/party.png">
        </div>
    </div>
</div>
<!-- including the footer -->

<?php include ("layout/footer.php"); ?>

</body>
</html>

