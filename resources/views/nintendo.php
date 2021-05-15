<?php include ("../db.php"); ?>
<?php class n_t_d {
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
        <img src="Style/images/nintendo-banner.png" class="hero">
    </div>
    <div class="products">
        <div class="fit-container">
            <div class="filter">
                <input type="text" id="search_input" onkeyup="search_function()" placeholder="Search games..">
            </div>
        </div>
        <div class="product-container">
            <ul class="prods" id="productUL">
                <?php $row = $nintendo_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "n_t_d");
                foreach($row as $n_t_d):
                    if($n_t_d->available_stock != 0):?>
                        <li>
                            <div class="top-games-entry">
                                <a href="product_page.php?sku=<?=$n_t_d->product_sku;?>">
                                    <img src="<?php echo($n_t_d->product_image) ?>" class="top-games-img">
                                    <p class="top-games-txt"><?php echo($n_t_d->product_name) ?></p>
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
