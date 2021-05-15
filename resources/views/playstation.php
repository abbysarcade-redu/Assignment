<?php include ("../tools/class_controller.php"); ?>
<?php include ("../tools/db.php"); ?>

<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/playstation-banner.png" class="hero">
    </div>
    <div class="products">
        <div class="fit-container">
            <div class="filter">
                <input type="text" id="search_input" onkeyup="search_function()" placeholder="Search games..">
            </div>
        </div>
        <div class="product-container">
            <ul class="prods" id="productUL">
                <?php $row = $playstation_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "p_s");
                foreach($row as $p_s):
                    if($p_s->available_stock != 0):?>
                        <li>
                            <div class="top-games-entry">
                                <a href="product_page.php?sku=<?=$p_s->product_sku;?>">
                                    <img href="product_page.php?sku=<?=$p_s->product_sku;?>" src="<?php echo($p_s->product_image) ?>" class="top-games-img">
                                    <p class="top-games-txt"><?php echo($p_s->product_name) ?></p>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <script src="../js/SearchFunction.js"></script>
    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>
