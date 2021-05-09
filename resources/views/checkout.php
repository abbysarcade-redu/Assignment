<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<?php $total = $_GET['total'] ?>

<div class="nav-buffer">
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
            <p class="basket-txt-r"><?php echo ($total); ?></p>
        </div>
    </div>
    <hr>
    <form>
        <div class="checkout-row">
            <div class="checkout-container-left">
                <label class="left-white">Your Details</label>
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-style" placeholder="Full Name*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Email Address*" required>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-style" placeholder="Contact Number">
                </div>
            </div>
            <div class="checkout-container-right">
                <label class="left-white">Card Details</label>
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-style" placeholder="Card Number*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Name on Card*" required>
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-style" placeholder="CSV*" required>
                </div>
            </div>
        </div>

        <div class="checkout-container-left">
            <label class="left-white">Delivery Address</label>
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="House Number*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Street*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Town*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="County*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Post Code*" required>
                </div>
            </div>
        </div>
        <div class="checkout-container-right">
            <label class="left-white">Billing Address</label>
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="House Number*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Street*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Town*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="County*" required>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Post Code*" required>
                </div>
            </div>
        </div>
        <button class="yellow-btn" onclick="href='Checkout%Successful.php'">Checkout Securely</button>
    </form>

</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>
