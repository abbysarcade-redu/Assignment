<?php include ("../db.php"); ?>
<?php class p_c {
    public $product_name;
    public $product_image;
    public $product_sku;
    public $available_stock;
} ?>
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="content-page">
    <div class="hero-image">
        <img src="Style/images/pc-banner.png" class="hero">
    </div>
    <div class="products">
        <div class="fit-container">
            <div class="filter">
                <input type="text" id="search_input" onkeyup="search_function()" placeholder="Search games..">
            </div>
        </div>
        <div class="product-container">
            <ul class="prods" id="productUL">
                <?php $row = $pc_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "p_c");
                foreach($row as $p_c):
                    if($p_c->available_stock != 0):?>
                        <li>
                            <div class="top-games-entry">
                                <a href="product_page.php?sku=<?=$p_c->product_sku;?>">
                                    <img src="<?php echo($p_c->product_image) ?>" class="top-games-img">
                                    <p class="top-games-txt"><?php echo($p_c->product_name) ?></p>
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
