

<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Nintendo</title>
    <script src="../js/SearchFunction.js"></script>
</header>
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
                <a href="playstation.php" class="filter-button">PlayStation</a>
                <hr>
                <a href="xbox.php" class="filter-button">Xbox</a>
                <hr>
                <a href="nintendo.php" class="filter-button">Nintendo</a>
                <hr>
                <a class="filter-button" href="PC.php">PC</a>
            </div>
        </div>
        <div class="product-container">
            <ul class="prods" id="productUL">
                <?php $row = $products_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "game");
                foreach($row as $game):
                    if($game->nintendo == 1):?>
                        <li>
                            <div class="top-games-entry">
                                <a href="product_page.php?sku=<?=$game->product_sku;?>">
                                    <img src="<?php echo($game->product_image) ?>" class="top-games-img">
                                    <p class="top-games-txt"><?php echo($game->product_name) ?></p>
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
