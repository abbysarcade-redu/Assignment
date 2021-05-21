<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Basket</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<!-- set total as an array -->
<?php $total = array(); ?>

<!-- check if the order number is set -->
<?php if(!isset($_SESSION['order_number'])) {
    // if not get the time stamp and create a random number then merge these for the order number
    $date = strtotime("now");
    $id = rand(00000000, 99999999);
    $order_number = ($date . $id);
} else {
    // if it is then get the order number
    $order_number = $_SESSION['order_number'];
}?>
<div class="basket-page">
    <div class="hero-image">
        <img src="Style/images/basket-banner.png" class="hero">
    </div>
    <div class="bas-cont">
        <div class="content-column-left">
            <h1 class="is-white">Your Shopping Basket</h1>
        </div>
        <!-- get the basket items as a count of arrays -->
        <?php $vals = array_count_values($_SESSION['basket']);
        $max=count($vals);
        // if there are items in the database then show checkout button
        if ($max != 0): ?>
            <div class="content-column-right">
                <a class="right-align" href="checkout.php">Checkout Securely</a>
            </div>
        <?php endif; ?>
    </div>
    <hr>
    <?php
    if ($max != 0):
        //run through the items in the basket and run queries from db.php to get the sku and the value to populate the basket page
        foreach ($vals as $sku => $amount):
            $basket_product_preparedStatement->execute([$sku]);
            $game = $basket_product_preparedStatement->fetchObject( 'game');
            $subtotal = ($game->product_cost)*$amount;
            $stock_check_preparedStatement->execute([$sku]);
            $stock = $stock_check_preparedStatement->fetch();
            array_push($total, $subtotal); ?>
                <div class="basket-storage">
                    <div class="basket-item-i">
                        <img src="<?php echo($game->product_image) ?>" class="games-img">
                    </div>
                    <div class="basket-item-l">
                        <p class="games-txt"><?php echo($game->product_name) ?></p>
                    </div>
                    <a class="button-trans" href="basket%20reduce.php?sku=<?php echo($sku); ?>">-</a>
                    <?php if($stock['available_stock'] < $amount):
                        echo '<script>alert("There is insufficient stock for this order. We have updated the order to reflect this.")</script>';
                        $amount = $stock['available_stock']?>
                    <input class="input-trans" type="text" value="<?php print_r($amount); ?>">
                    <?php else: ?>
                    <input class="input-trans" type="text" value="<?php print_r($amount); ?>">
                    <?php endif; ?>
                    <a class="button-trans" href="basket_increase.php?sku=<?php echo($sku); ?>">+</a>
                    <div class="basket-item-l">
                        <p class="games-txt"><?php echo($subtotal); ?></p>
                    </div>
                    <a class="button-trans" href="basket_remove_item.php?sku=<?php echo($sku); ?>">x</a>
                </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="basket-storage">
            <p class="games-txt">Your Basket is Empty.</p>
        </div>
    <?php endif; ?>
    <hr>
    <div class="basket-total">
        <div class="basket-sub-item">
            <p class="basket-txt">Basket Total:</p>
        </div>
        <div class="basket-sub-item-r">
            <!-- show the total and update the session variable -->
            <?php $_SESSION['total'] = array_sum($total); ?>
            <p class="basket-txt-r">£<?php echo ($_SESSION['total']); ?></p>
        </div>
    </div>
    <hr>
    <div class="basket-total">
        <div class="b-but">
            <a class="button-pink-b" href="products.php">Continue Shopping</a>
        </div>
        <?php $vals = array_count_values($_SESSION['basket']);
        $max=count($vals);
        // if there are items in the database then show checkout button

        if ($max != 0): ?>
            <div class="content-column-right">
                <a class="right-align" href="checkout.php">Checkout Securely</a>
            </div>
        <?php endif; ?>
    </div>
</div>
    <?php include ("layout/footer.php"); ?>
</body>
</html>
<?php
// check if the session order number is set
if (!isset($_SESSION['order_number'])) {
    // if not then get from the variable
    $_SESSION['order_number'] = $order_number;

    $user_id = rand(000000000, 9999999999);
    $order_status = 'basket';
//execute the transaction query from db.php
    $transaction_preparedStatement->execute(array(
        $date,
        $order_number,
        $_SESSION['user_id'],
        gmdate("Y-m-d H:i:s", $date),
        $_SESSION['total'],
        $order_status,
    ));

}

?>
