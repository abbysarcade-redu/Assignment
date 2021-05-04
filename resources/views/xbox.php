<?php include ("../db.php"); ?>
<?php class x_b {
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
        <img src="Style/images/xbox-banner.png" class="hero">
    </div>
    <div class="products">
        <div class="fit-container">
            <div class="filter">
                <input type="text" id="search_input" onkeyup="search_function()" placeholder="Search games..">
            </div>
        </div>
        <div class="product-container">
            <ul class="prods" id="productUL">
                <?php $row = $xbox_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "x_b");
                foreach($row as $x_b): ?>
                    <li>
                        <div class="top-games-entry">
                            <a href="product_page.php?sku=<?=$x_b->product_sku;?>">
                                <img src="<?php echo($x_b->product_image) ?>" class="top-games-img">
                                <p class="top-games-txt"><?php echo($x_b->product_name) ?></p>
                            </a>
                        </div>
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
