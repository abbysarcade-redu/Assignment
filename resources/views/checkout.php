<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="nav-buffer">
<div class="contact-page">
    <div class="hero-image">
        <img src="Style/images/checkout-banner.png" class="hero">
    </div>
    <hr>
    <div class="basket-item">
        <p class="basket-txt">Basket Subtotal:</p>
    </div>
    <div class="basket-item">
        <p class="basket-txt">£80.00</p>
    </div>
    <hr>
    <form>
        <div class="checkout-row">
            <div class="checkout-container-left">
                <label class="left-white">Your Details</label>
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-style" placeholder="Full Name*">
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Email Address*">
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
                        <input class="form-style" placeholder="Card Number*">
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-style" placeholder="Name on Card*">
                    </div>
                </div>
                <div class="form-group">
                    <input class="form-style" placeholder="CSV*">
                </div>
            </div>
        </div>

        <div class="checkout-container-left">
            <label class="left-white">Delivery Address</label>
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="House Number*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Street*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Town*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="County*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Post Code*">
                </div>
            </div>
        </div>
        <div class="checkout-container-right">
            <label class="left-white">Billing Address</label>
            <div class="form-row">
                <div class="form-group">
                    <input class="form-style" placeholder="House Number*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Street*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Town*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="County*">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-style" placeholder="Post Code*">
                </div>
            </div>
        </div>
        <button class="yellow-btn" onclick="href='Checkout%Successful.php'">Checkout Securely</button>
    </form>

</div>
    <?php include ("layout/footer.php"); ?>

</body>
</html>
