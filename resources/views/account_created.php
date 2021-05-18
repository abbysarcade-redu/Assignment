<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Account Created</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/account_created.png" class="hero">
    </div>
    <div class="account_created_page">
        <div class="account_created_container">
            <h1 class="a-title">Congratulations <?php $_SESSION['user_name']?>!</h1>
            <p class="a-content">Your account has been set up.</p>
        </div>
        <div>
            <img class="accountcimg" src="Style/images/party.png">
        </div>
    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>

