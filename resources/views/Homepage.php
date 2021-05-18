
<!DOCTYPE html>
<?php include ("layout/header.php"); ?>
<header>
    <title>Game On</title>
</header>
<body>
<?php include ("layout/nav.php"); ?>
<?php $g_o_m = ($G_O_M_preparedStatement->fetchObject('game_of_month')); ?>

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
    <?php if($g_o_m->available_stock != 0): ?>
        <div class="game-of-month">
            <h1> Game of the month</h1>
            <?php print_r($_SESSION['user_id']); ?>
            <div>
                <a href="product_page.php?sku=<?=$g_o_m->product_sku;?>">
                    <img src="<?php echo ($g_o_m->product_image); ?>" class="game-of-month-img">
                </a>
            </div>
        </div>
    <?php endif; ?>
    <div class="top-games">
        <h1>Top Games</h1>
        <div>
        <?php $row = $featured_games_preparedStatement-> fetchAll(PDO::FETCH_CLASS, "featured_game");
        foreach ($row as $featured_game):
            if($featured_game->available_stock != 0):?>
                <div class="top-games-entry">
                    <a class="game-containter" href="product_page.php?sku=<?=$featured_game->product_sku;?>">
                        <img src="<?php echo($featured_game->product_image) ?>" class="top-games-img">
                        <p class="top-games-txt"><?php echo($featured_game->product_name) ?></p></a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include ("layout/footer.php"); ?>

</body>
</html>


