<?php include ("../db.php"); ?>
<?php class games {
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
        <img src="Style/images/products-banner.png" class="hero">
    </div>
    <div class="products">
        <div class="fit-container">
            <div class="filter">
                <input type="text" id="search_input" onkeyup="search_function()" placeholder="Search games..">
            </div>
        </div>
        <div class="product-container">
            <ul class="prods" id="productUL">
                <?php $row = $games_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "games");
                foreach($row as $games):
                    if($games->available_stock != 0):?>
                        <li>
                            <div class="top-games-entry">
                                <a href="product_page.php?sku=<?=$games->product_sku;?>">
                                    <img src="<?php echo($games->product_image) ?>" class="top-games-img">
                                    <p class="top-games-txt"><?php echo($games->product_name) ?></p>
                                </a>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>
