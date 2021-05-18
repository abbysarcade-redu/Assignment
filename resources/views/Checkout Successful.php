
<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<!DOCTYPE html>

<?php if((count($_SESSION['basket'])) == 0):
    header('location: products.php');
else: ?>

    <?php

    ?>
    <?php include ("layout/header.php"); ?>
    <header>
        <title>Checkout Successful</title>
    </header>
    <body>
    <?php include ("layout/nav.php");

    $vals = array_count_values($_SESSION['basket']);
    $max = count($vals);
    if($max != 0) {
        foreach ($vals as $sku => $amount) {
            $products_preparedStatement->execute([$sku]);
            $game = $products_preparedStatement->fetchObject('game');
            $subtotal = ($game->product_cost) * $amount;
            $line_items_preparedStatement->execute(array(
                $_SESSION['order_number'],
                $sku,
                $amount
            ));
            $remaining_stock = ($game->available_stock - $amount);
            $stock_update_update_preparedStatement->execute(array(
                $remaining_stock,
                $sku
            ));
        }
    }

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

    $address_ids = ([$delivery_address, $billing_address]);
    $user = $_SESSION['user_id'];

    $user_address_preparedStatement->execute(array(json_encode($address_ids), $user));

    $payment_preparedStatement->execute(array(
        base64_encode($_POST['card_number']),
        base64_encode($_POST['name_on_card']),
        base64_encode($_POST['csv']),
        $billing_address
    ));

    $payment_ref = $pdo->lastInsertId();

    $delivery_preparedStatement->execute(array(
        $delivery_address,
        'waiting for dispatch'
    ));

    $delivery_ref = $pdo->lastInsertId();

    $sale_detail_update_preparedStatement->execute([$payment_ref, $delivery_ref, $_SESSION['order_number']]);  ?>





    <div class="nav-buffer"></div>
    <script>
        document.querySelector(".drop a").addEventListener("click", function (){this.classList.toggle("active");
        });
    </script>
    <div class="content-page">
        <div class="hero-image">
            <img src="Style/images/Checkout-successful-banner.png" class="hero">
        </div>
        <h1 class="is-white">Congratulations on your Checkout!</h1>
        <div class="checkout-container-left">
            <p class="is-white-left">Order Number: <?php echo($_SESSION['order_number'])?></p>
            <p class="is-white-left">Name: <?php echo($_POST['name'])?></p>
            <p class="is-white-left">Email Address: <?php echo($_POST['email'])?></p>
            <p class="is-white-left">Phone Number: <?php echo($_POST['number'])?></p>
            <p class="is-white-left">Card Number: **** **** **** <?php echo(substr($_POST['card_number'], -4)) ?></p>
        </div>
        <div class="checkout-container-right">
            <img src="Style/images/celebrate.png" class="accountimg">
        </div>
        <hr>
        <?php
        $vals = array_count_values($_SESSION['basket']);
        $max=count($vals);
        if ($max != 0):
            foreach ($vals as $sku => $amount):
                $game_preparedStatement->execute([$sku]);
                $game = $game_preparedStatement->fetchObject( 'game');
                $subtotal = ($game->product_cost)*$amount; ?>
                    <div class="basket-storage">
                        <div class="basket-item-i">
                            <img src="<?php echo($game->product_image) ?>" class="games-img">
                        </div>
                        <div class="basket-item-l">
                            <p class="games-txt"><?php echo($game->product_name) ?></p>
                        </div>
                        <div class="basket-item-l">
                            <p class="games-txt">x<?php print_r($amount); ?></p>
                        </div>
                        <div class="basket-item-l">
                            <p class="games-txt">£<?php echo($subtotal); ?></p>
                        </div>
                    </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <hr>

        <div class="basket-total">
            <div class="basket-sub-item">
                <p class="basket-txt">Basket Total:</p>
            </div>
            <div class="basket-sub-item-r">
                <p class="basket-txt-r">£<?php echo ($_SESSION['total']); ?></p>
            </div>
        </div>
        <hr>
        <div class="buffer-space"></div>
    </div>
    <?php include ("layout/footer.php"); ?>

    </body>
    </html>


    <?php include ("layout/header.php"); ?>
        <body>
        <?php
        $_SESSION['basket'] = array();
        unset($_SESSION['total']);
        unset($_SESSION['order_number']);
        ?>
<?php endif; ?>
