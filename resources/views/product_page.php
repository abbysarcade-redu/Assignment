<?php include ("../db.php"); ?>
<?php $SKU = $_GET['sku'] ?>
<?php $passing_sku = str_split($SKU, 12) ?>
<?php $game_preparedStatement->execute($passing_sku); ?>
<?php session_start(); ?>
<?php class prod_ret {
    public $product_name;
    public $product_image;
    public $product_description;
    public $slug;
} ?>
<?php $game_preparedStatement->setFetchMode(PDO::FETCH_CLASS, 'prod_ret'); ?>
<?php $product_ret= ($game_preparedStatement->fetch()); ?>
<?php if(empty($_SESSION['basket']))
    $_SESSION['basket'] = array(); ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
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
                                <input class="con-rad-cont" id="console[playstation]" type="radio" name="console">
                                <label class="console-button" for="console[playstation]">
                                    Playstation
                                </label>
                                <?php endif; ?>
                                <?php if($product_ret->xbox == 1): ?>
                                    <input class="con-rad-cont" id="console[xbox]" type="radio" name="console">
                                    <label class="console-button" for="console[xbox]">
                                        Xbox
                                    </label>
                                <?php endif; ?>
                                <?php if($product_ret->nintendo == 1): ?>
                                    <input class="con-rad-cont" id="console[nintendo]" type="radio" name="console">
                                    <label class="console-button" for="console[nintendo]">
                                        Nintendo
                                    </label>
                                <?php endif; ?>
                                <?php if($product_ret->pc == 1): ?>
                                    <input class="con-rad-cont" id="console[pc]" type="radio" name="console">
                                    <label class="console-button" for="console[pc]">
                                        PC
                                    </label>
                                <?php endif; ?>
                            </div>
                            <div>
                                <p class="price">£<?php echo($product_ret->product_cost) ?></p>
                            </div>
                        </div>
                        <div class="submit_button_control">
                            <button class="submit_button" type="submit" name="add_to_cart" onclick="basket_fuction(<?= $SKU?>)">
                                Add to basket
                            </button>
                            <input type="hidden" name="product_id" value="<?php echo($product_ret->product_sku) ?>">
                            <button class="submit_button">
                                Buy Now
                            </button>
                        </div>
                        <script src="../js/add_basket_function.js">windown.onload = basket_fuction()
                        </script>

                        </script>
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
