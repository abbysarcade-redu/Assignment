<?php include ("../db.php"); ?>
<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<?php $order_number = $_GET['order_number'] ?>
<?php class user {
    public $name;
    public $email;
} ?>
<div class="nav-buffer"></div>

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
                        $user = $user_details_preparedStatement->fetchObject('user'); ?>
                        <input class="form-style" placeholder="Full Name*" name="name" value="<?php echo $user->user_name ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Email Address*" name="email" value="<?php echo $user->user_email ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <?php else: ?>
                    <input class="form-style" placeholder="Full Name*" name="name" value="John Doe" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Email Address*" value="order@game-on.co.uk" required>
                </div>
            </div>
            <div class="form-group">
                <?php endif; ?>
                    <input class="form-style" placeholder="Contact Number" name="number">
                </div>
            </div>
            <div class="checkout-container-right">
                <label class="left-white">Card Details</label>
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-style" placeholder="Card Number*" name="card_number" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Name on Card*" name="name_on_card" required>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-style" placeholder="CSV*" name="csv" required>
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
                    <input class="form-style" placeholder="Post Code*" name="d-post-code" required>
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
                    <input class="form-style" placeholder="Post Code*" name="b-post-code" required>
                </div>
            </div>
        </div>
        <button class="yellow-btn" >Checkout Securely</button>
    </form>

</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>
