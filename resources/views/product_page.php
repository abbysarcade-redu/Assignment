<?php include ("../tools/class_controller.php"); ?>
<?php include ("../tools/db.php"); ?>
<?php $SKU = $_GET['sku'] ?>
<?php $passing_sku = str_split($SKU, 12); ?>
<?php $game_preparedStatement->execute($passing_sku); ?>
<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<?php $game_preparedStatement->setFetchMode(PDO::FETCH_CLASS, 'prod_ret'); ?>
<?php $product_ret= ($game_preparedStatement->fetch()); ?>
<?php if(empty($_SESSION['basket']))
    $_SESSION['basket'] = array(); ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title><?php echo($product_ret->product_name) ?></title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<section class="prod-container">
    <div class="prod-box">
        <div class="container-prod">
            <div class="prod-columns">
                <div class="prod-column">
                    <img class="prod-img" src="<?php echo $product_ret->product_image; ?>">
                </div>
                <div class="purchase-column">
                    <div id="purchase_form"></div>
                    <form class="purchase" method="post">
                        <input type="hidden" name="brand" required="" value="<?php echo($passing_sku) ?>">
                        <div style="display: block;">
                            <p class="prod-title"><?php echo($product_ret->product_name) ?></p>
                            <label class="prod-label">Choose your console</label>
                            <div class="console-control">
                                <?php if($product_ret->playstation == 1): ?>
                                <input class="con-rad-cont" id="console[playstation]" type="radio" name="console" onclick="document.getElementById('purchase_button').disabled=false;document.getElementById('bask_button').disabled=false">
                                <label class="console-button" for="console[playstation]">
                                    Playstation
                                </label>
                                <?php endif; ?>
                                <?php if($product_ret->xbox == 1): ?>
                                    <input class="con-rad-cont" id="console[xbox]" type="radio" name="console" onclick="document.getElementById('purchase_button').disabled=false;document.getElementById('bask_button').disabled=false">
                                    <label class="console-button" for="console[xbox]">
                                        Xbox
                                    </label>
                                <?php endif; ?>
                                <?php if($product_ret->nintendo == 1): ?>
                                    <input class="con-rad-cont" id="console[nintendo]" type="radio" name="console" onclick="document.getElementById('purchase_button').disabled=false;document.getElementById('bask_button').disabled=false">
                                    <label class="console-button" for="console[nintendo]">
                                        Nintendo
                                    </label>
                                <?php endif; ?>
                                <?php if($product_ret->pc == 1): ?>
                                    <input class="con-rad-cont" id="console[pc]" type="radio" name="console" onclick="document.getElementById('purchase_button').disabled=false;document.getElementById('bask_button').disabled=false">
                                    <label class="console-button" for="console[pc]">
                                        PC
                                    </label>
                                <?php endif; ?>
                            </div>
                            <div>
                                <p class="price">£<?php echo($product_ret->product_cost) ?></p>
                            </div>
                        </div>
                        <?php if(($product_ret->available_stock) == 0): ?>
                        <p class="out-of-stock">Product Out of Stock</p>
                        <?php endif; ?>
                        <div class="submit_button_control">
                            <form method="post" action="update_session">
                                <a href="create_basket.php?sku=<?php echo ($SKU) ?>">
                                    <input type="submit" id="bask_button" class="submit_button" type="submit" name="add_to_cart" value="Add to basket" disabled/>
                                </a>
                            </form>


                            <button onclick="local.href='basket.php?sku=<?php echo($SKU) ?>'" id="purchase_button" class="submit_button"  disabled>
                                Buy Now
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="prod-info-container">
    <div class="prod-in-container">
        <div class="prod-info-columns">
            <div class="prod-info-column">
                <h2><?php echo($product_ret->product_name) ?></h2>
                <div class="product-content">
                    <?php echo nl2br($product_ret->product_description) ?>
                </div>
            </div>
            <div class="prod-side-container">
                <div class="panel">
                    <p class="panel-heading">Delivery</p>

                    <div class="panel-block">
                        Orders will be dispatched to the delivery address within 24 hours. Delivery expected within 48 hours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ("layout/footer.php"); ?>

</body>
</html>
