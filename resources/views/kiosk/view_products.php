<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!-- execute the query from db.php using the sku passed to the the page from the URL -->
<?php $kiosk_product_preparedStatement->execute([$_GET['sku']]);
// fetch the data returned by the query
$product = $kiosk_product_preparedStatement->fetch(); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>View Products - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <div class="kiosk_container">
        <div class="buffer-space"></div>
        <div>
            <!-- using the SKU passed to the the page from the URL, pass the SKU to view_products -->
            <a href="edit_products.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_edit.png">
            </a>
            <!-- using the SKU passed to the the page from the URL, pass the SKU to product_delete -->
            <a href="product_delete.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <hr>
        <div class="kiosk_image_container">
            <!-- Display the product image returned from the query on line 8 -->
            <img class="img_kiosk" src="../<?php echo ($product['product_image']) ?>">
        </div>
        <hr>
        <h1 class="kiosk_title">Product SKU</h1>
        <!-- Display the product SKU which was passed from the URL -->        <p class="kiosk_content"><?php echo($_GET['sku']) ?></p>
        <hr>
        <h1 class="kiosk_title">Game Name</h1>
        <!-- Display the product name returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($product['product_name']) ?></p>
        <hr>
        <h1 class="kiosk_title">Description</h1>
        <!-- Display the description returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($product['product_description']) ?></p>
        <hr>
        <h1 class="kiosk_title">Cost</h1>
        <!-- Display the product cost returned from the query on line 8 -->
        <p class="kiosk_content">£<?php echo($product['product_cost']) ?></p>
        <!-- Using an if statement to check if the game of the month value returned from the query on line 8 is equal to 1, if yes show-->
        <?php if($product['game_of_month'] == 1): ?>
            <hr>
            <h1 class="kiosk_title">Game of the Month</h1>
        <?php endif; ?>
        <hr>
        <h1 class="kiosk_title">Stock</h1>
        <!-- Display the available stock returned from the query on line 8 -->
        <p class="kiosk_content"><?php echo($product['available_stock']) ?></p>
        <hr>
        <h1 class="kiosk_title">Consoles</h1>
        <!-- Using an if statement to check if the playstation value returned from the query on line 8 is equal to 1, if yes, show-->
        <?php if($product['playstation'] == 1): ?>
            <p class="kiosk_content">Playstation</p>
        <?php endif; ?>
        <!-- Using an if statement to check if the xbox value returned from the query on line 8 is equal to 1, if yes, show-->
        <?php if($product['xbox'] == 1): ?>
            <p class="kiosk_content">Xbox</p>
        <?php endif; ?>
        <!-- Using an if statement to check if the nintendo value returned from the query on line 8 is equal to 1, if yes, show-->
        <?php if($product['nintendo'] == 1): ?>
            <p class="kiosk_content">Nintendo</p>
        <?php endif; ?>
        <!-- Using an if statement to check if the pc value returned from the query on line 8 is equal to 1, if yes, show-->
        <?php if($product['pc'] == 1): ?>
            <p class="kiosk_content">PC</p>
        <?php endif; ?>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
