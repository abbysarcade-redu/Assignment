<?php include ("../db.php"); ?>
<?php class p_s {
    public $product_name;
    public $product_image;
    public $product_sku;
} ?>

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
                foreach($row as $p_s): ?>
                    <li>
                        <a href="product_page.php?sku=<?=$p_s->product_sku;?>">
                            <div class="top-games-entry">
                                <img href="product_page.php?sku=<?=$p_s->product_sku;?>" src="<?php echo($p_s->product_image) ?>" class="top-games-img">
                                <p class="top-games-txt"><?php echo($p_s->product_name) ?></p>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <script src="../js/SearchFunction.js"></script>
    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>
