<?php include ("../db.php"); ?>
<?php $g_o_m = ($G_O_M_preparedStatement->fetchColumn()); ?>
<?php class game_of_month {
    public $product_name;
    public $product_image;
    public $product_sku;
} ?>

<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<body>
<?php include ("layout/nav.php"); ?>
<div class="home-page">
    <div class="hero-image">
        <img src="Style/images/Homepage-banner.png" class="hero">
    </div>
    <div class="pop-console">
        <h1>Popular Consoles</h1>
        <div class="pop-console-container">
            <a href="playstation.php"><img src="Style/images/ps-logo.png" class="pop-console-img" ></a>
            <a href="xbox.php"><img src="Style/images/Xbox-logo.png" class="pop-console-img"></a>
            <a href="nintendo.php"><img src="Style/images/nintendo-logo.png" class="pop-console-img"></a>
            <a href="PC.php"><img src="Style/images/computer.png" class="pop-console-img"></a>
        </div>
    </div>
    <div class="game-of-month">
        <h1> Game of the month</h1>
        <div>
            <img src="<?php echo ($g_o_m); ?>" class="game-of-month-img">
        </div>
    </div>
    <div class="top-games">
        <h1>Top Games</h1>
        <div>
        <?php $row = $featured_games_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "game_of_month");
        foreach ($row as $game_of_month): ?>
            <div class="top-games-entry">
                <a href="product_page.php?sku=<?=$game_of_month->product_sku;?>">
                    <img src="<?php echo($game_of_month->product_image) ?>" class="top-games-img">
                    <p class="top-games-txt"><?php echo($game_of_month->product_name) ?></p></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>


