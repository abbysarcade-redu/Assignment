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
            <a href="edit_products.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <a href="product_delete.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <div class="kiosk_image_container">
            <img class="img_kiosk" src="../<?php echo ($product['product_image']) ?>">
        </div>
        <hr>
        <h1 class="kiosk_title">Product SKU</h1>
        <p class="kiosk_content"><?php echo($_GET['sku']) ?></p>
        <hr>
        <h1 class="kiosk_title">Game Name</h1>
        <p class="kiosk_content"><?php echo($product['product_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">Description</h1>
        <p class="kiosk_content"><?php echo($product['product_description']) ?></p>
        <hr>
        <h1 class="kiosk_title">Cost</h1>
        <p class="kiosk_content">£<?php echo($product['product_cost']) ?></p>
        <?php if($product['game_of_month'] == 1): ?>
            <hr>
            <h1 class="kiosk_title">Game of the Month</h1>
        <?php endif; ?>
        <hr>
        <h1 class="kiosk_title">Stock</h1>
        <p class="kiosk_content"><?php echo($product['available_stock']) ?></p>
        <hr>
        <h1 class="kiosk_title">Consoles</h1>
        <?php if($product['playstation'] == 1): ?>
            <p class="kiosk_content">Playstation</p>
        <?php endif; ?>
        <?php if($product['xbox'] == 1): ?>
            <p class="kiosk_content">Xbox</p>
        <?php endif; ?>
        <?php if($product['nintendo'] == 1): ?>
            <p class="kiosk_content">Nintendo</p>
        <?php endif; ?>
        <?php if($product['pc'] == 1): ?>
            <p class="kiosk_content">PC</p>
        <?php endif; ?>
    </div>
    <div class="buffer-space"></div>
</div>
<?php include ("layout/kiosk_footer.php") ?>
