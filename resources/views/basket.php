<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="nav-buffer">
<div class="basket-page">
    <div class="hero-image">
        <img src="Style/images/basket-banner.png" class="hero">
    </div>
    <div class="content-column">
        <h1 class="is-white">Your Shopping Basket</h1>
    </div>
    <div class="content-column">
        <a class="right-align yellow-btn" href="checkout.php">Checkout Securely</a>
    </div>
    <hr>
    <a id="bsk-empty">Empty Cart</a>
    <?php
    if(isset($_SESSION["basket_item"])) {
        $total_quantity = 0;
        $total_price = 0;
    }
    ?>
    <div class="basket-storage">
        <div class="basket-item">
            <img src="Style/images/miles-morales.png" class="top-games-img">
        </div>
        <div class="basket-item">
            <p class="top-games-txt">Miles Morales</p>
        </div>
        <button class="button-trans">-</button>
        <input class="input-trans" type="text" value="1">
        <button class="button-trans">+</button>
        <div class="basket-item">
            <p class="top-games-txt">£80.00</p>
        </div>
        <button class="button-trans">x</button>
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
    <div class="basket-total>">
        <div>
            <a class="button-pink" href="products.php">Continue Shopping</a>
        </div>
        <div>
            <a class="yellow-btn" href="checkout.php">Checkout Securely</a>
        </div>
    </div>
</div>
    <?php include ("layout/footer.php"); ?>
</body>
</html>
