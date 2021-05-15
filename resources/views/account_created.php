<!DOCTYPE html>
<?php include ("../tools/db.php"); ?>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<?php
$password = base64_encode($_POST['password']);
$user_preparedStatement->execute(array(
$_POST['name'],
$_POST['email'],
$password,
1));
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['user_id'] = $pdo->lastInsertId(); ?>
<div class="nav-buffer"></div>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/account_created.png" class="hero">
    </div>
    <div class="account_created_page">
        <div class="account_created_container">
            <h1 class="a-title">Congratulations <?php $_POST['name'] ?>!</h1>
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

