<?php include ("../db.php"); ?>
<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<?php
$address_preparedStatement->execute(array(
    $_POST['d-house-number'],
    $_POST['d-street'],
    $_POST['d-town'],
    $_POST['d-county'],
    $_POST['d-country'],
    $_POST['d-post-code'],
    1
));
$delivery_address = $pdo->lastInsertId();

print_r($delivery_address);
$address_preparedStatement->execute(array(
    $_POST['b-house-number'],
    $_POST['b-street'],
    $_POST['b-town'],
    $_POST['b-county'],
    $_POST['b-country'],
    $_POST['b-post-code'],
    2
));

$billing_address = $pdo->lastInsertId();
print_r($billing_address);

$address_ids = ([$delivery_address],[$billing_address]);

$user_address_preparedStatement->execute($_SESSION['user_id'], $address_ids);

$payment_preparedStatement->execute(array(
    base64_encode($_POST['card_number']),
    base64_encode($_POST['name_on_code']),
    base64_encode($_POST['csv']),
    $billing_address
));

$payment_ref = $pdo->lastInsertId();
print_r($payment_ref);

$delivery_preparedStatement->execute(array(
    $delivery_address,
    'waiting for dispatch'
));

$delivery_ref = $pdo->lastInsertId();
print_r($delivery_ref);

$sale_detail_update_preparedStatement->execute(array($payment_ref, $delivery_ref, $_SESSION['sale']));


?>
<div class="nav-buffer">
<script>
    document.querySelector(".drop a").addEventListener("click", function (){this.classList.toggle("active");
    });
</script>
<div class="contact-page">
    <div class="hero-image">
        <img src="Style/images/Checkout-successful-banner.png" class="hero">
    </div>
    <h1 class="is-white">Congratulations on your Checkout!</h1>
    <div class="checkout-container-left">
        <p class="is-white-left">Order Number: *******</p>
        <p class="is-white-left">Name: *******</p>
        <p class="is-white-left">Email Address: *******</p>
        <p class="is-white-left">Phone Number: *******</p>
        <p class="is-white-left">Card Number: *******</p>
    </div>
    <div class="checkout-container-right">
        <img src="Style/images/celebrate.png" class="hero">
    </div>
    <hr>
    <div class="basket-storage">
        <div class="basket-item">
            <img src="Style/images/miles-morales.png" class="top-games-img">
        </div>
        <div class="basket-item">
            <p class="top-games-txt">Miles Morales</p>
        </div>
        <div class="basket-item">
            <p class="top-games-txt">x1</p>
        </div>
        <div class="basket-item">
            <p class="top-games-txt">£80.00</p>
        </div>
    </div>
    <hr>
    <div class="basket-total">
        <div class="basket-item">
            <p class="basket-txt">Basket Subtotal:</p>
        </div>
        <div class="basket-item">
            <p class="basket-txt">£80.00</p>
        </div>
    </div>
    <hr>
    <div class="buffer-space"></div>
</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>


