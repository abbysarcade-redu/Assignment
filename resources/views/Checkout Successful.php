<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
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


