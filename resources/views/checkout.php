
<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Checkout</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<?php $order_number = $_GET['order_number'] ?>

<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/checkout-banner.png" class="hero">
    </div>
    <hr>
    <div class="basket-total">
        <div class="basket-sub-item">
            <p class="basket-txt">Basket Subtotal:</p>
        </div>
        <div class="basket-sub-item-r">
            <p class="basket-txt-r"><?php echo ($_SESSION['total']); ?></p>
        </div>
    </div>
    <hr>
    <form name="checkout" action="Checkout%20Successful.php" method="post">
        <div class="checkout-row">
            <div class="checkout-container-left">
                <label class="left-white">Your Details</label>
                <div class="form-row">
                    <div class="form-group">
                        <?php if(isset($_SESSION['user_id'])):
                        $user_details_preparedStatement->execute([$_SESSION['user_id']]);
                        $user = $user_details_preparedStatement->fetchObject('users'); ?>
                        <input class="form-style" placeholder="Full Name*" name="name" value="<?php echo $user->user_name ?>" required>
                    </div>
                    <div class="form-group">
                        <input class="form-style" placeholder="Email Address*" type="email" name="email" value="<?php echo $user->user_email ?>" required>
                    </div>
                    <?php else: ?>
                        <input class="form-style" placeholder="Full Name*" name="name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-style" placeholder="Email Address*" type="email" required>
                    </div>
                <?php endif; ?>
                    <div class="form-group">
                        <input class="form-style" placeholder="Contact Number" type="tel" name="number">
                    </div>

            </div>
            </div>
            <div class="checkout-container-right">
                <label class="left-white">Card Details</label>
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-style" placeholder="Card Number*" name="card_number" minlength="16" maxlength="16" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Name on Card*" name="name_on_card" required>
                    </div>
                    <div class="form-group">
                    <input class="form-style" placeholder="CSV*" name="csv" maxlength="3" minlength="3" required>
                </div>
                </div>


            </div>
        </div>

        <div class="checkout-container-left">
            <label class="left-white">Delivery Address</label>
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="House Number*" name="d-house-number" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Street*" name="d-street" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Town*" name="d-town" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="County*" name="d-county" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Country*" name="d-country" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Post Code*" name="d-post-code" minlength="6" maxlength="8" required>
                </div>
            </div>
        </div>
        <div class="checkout-container-right">
            <label class="left-white">Billing Address</label>
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="House Number*" name="b-house-number" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Street*" name="b-street" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Town*" name="b-town" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="County*" name="b-county" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Country*" name="b-country" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Post Code*" name="b-post-code" minlength="6" maxlength="8" required>
                </div>
            </div>
        </div>
        <button class="yellow-btn" >Checkout Securely</button>
    </form>

</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>
