<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<?php $kiosk_product_preparedStatement->execute([$_GET['sku']]);
$product = $kiosk_product_preparedStatement->fetch(); ?>
<!DOCTYPE html>
<header>
    <title> - Kiosk</title>
    <script src="../js/useful_links.js"></script>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <a href="v_products.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <a href="product_delete.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <form action="products_edit.php?sku=<?php echo($_GET['sku']) ?>" method="post">
            <h1 class="kiosk_title">Product SKU</h1>
            <p class="kiosk_content"><?php echo($_GET['sku']) ?></p>
            <hr>
            <h1 class="kiosk_title">Game Name</h1>
            <input name="name" class="kiosk_input" value="<?php echo($product['product_name']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Description</h1>
            <textarea name="description" class="kiosk_textarea"><?php echo($product['product_description']) ?></textarea>
            <hr>
            <h1 class="kiosk_title">Cost</h1>
            <input name="cost" class="kiosk_input" value="<?php echo($product['product_cost']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Game of the Month</h1>
            <?php if($product['game_of_month'] == 1): ?>
                <input name="game_of_month" class="kiosk_input" value="<?php echo($product['game_of_month']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <input name="game_of_month" class="kiosk_input" value="<?php echo($product['game_of_month']) ?>" type="checkbox"/>
            <?php endif; ?>
            <hr>
            <h1 class="kiosk_title">Stock</h1>
            <input name="available_stock" class="kiosk_input" value="<?php echo($product['available_stock']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Consoles</h1>
            <label class="kiosk_content">Playstation</label>
            <?php if($product['playstation'] == 1): ?>
                <input name="playstation" class="kiosk_input" value="<?php echo($product['playstation']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <input name="playstation" class="kiosk_input" value="<?php echo($product['playstation']) ?>" type="checkbox"/>
            <?php endif; ?>
            <label class="kiosk_content">Xbox</label>
            <?php if($product['xbox'] == 1): ?>
                <input name="xbox" class="kiosk_input" value="<?php echo($product['xbox']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <input name="xbox" class="kiosk_input" value="<?php echo($product['xbox']) ?>" type="checkbox"/>
            <?php endif; ?>
            <label class="kiosk_content">Nintendo</label>
            <?php if($product['nintendo'] == 1): ?>
                <input name="nintendo" class="kiosk_input" value="<?php echo($product['nintendo']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <input name="nintendo" class="kiosk_input" value="<?php echo($product['nintendo']) ?>" type="checkbox"/>
            <?php endif; ?>
            <label class="kiosk_content">PC</label>
            <?php if($product['pc'] == 1): ?>
                <input name="pc" class="kiosk_input" value="<?php echo($product['pc']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <input name="pc" class="kiosk_input" value="<?php echo($product['pc']) ?>" type="checkbox"/>
            <?php endif; ?>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
