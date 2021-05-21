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
    <title>Edit Products - Kiosk</title>
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
            <a href="view_products.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_view.png">
            </a>
            <!-- using the SKU passed to the the page from the URL, pass the SKU to product_delete -->
            <a href="product_delete.php?sku=<?php echo($_GET['sku']) ?>">
                <img class="cont_icon" src="../Style/images/cont_delete.png">
            </a>
        </div>
        <!-- To create a form. The inputs are used in sections where we would like the user to type in a response, all of these are required fields.
        The action on here is to send to the products_edit file which takes the inputs and adds to the database using the post method.
        The SKU is also passed to the new page.-->
        <form action="products_edit.php?sku=<?php echo($_GET['sku']) ?>" method="post">
            <h1 class="kiosk_title">Product SKU</h1>
            <!-- Display the product SKU which was passed from the URL -->
            <p class="kiosk_content"><?php echo($_GET['sku']) ?></p>
            <hr>
            <h1 class="kiosk_title">Game Name</h1>
            <!-- Display the product name returned from the query on line 8 -->
            <input name="name" class="kiosk_input" value="<?php echo($product['product_name']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Description</h1>
            <!-- Display the description returned from the query on line 8 -->
            <textarea name="description" class="kiosk_textarea"><?php echo($product['product_description']) ?></textarea>
            <hr>
            <h1 class="kiosk_title">Cost</h1>
            <!-- Display the product cost returned from the query on line 8 -->
            <input name="cost" class="kiosk_input" value="<?php echo($product['product_cost']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Game of the Month</h1>
            <!-- Using an if statement to check if the game of the month value returned from the query on line 8 is equal to 1 -->
            <?php if($product['game_of_month'] == 1): ?>
                <!-- If yes, display the game of the month check box as checked-->
                <input name="game_of_month" class="kiosk_input" value="<?php echo($product['game_of_month']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <!-- If no, display the game of the month check box as unchecked-->
                <input name="game_of_month" class="kiosk_input" value="<?php echo($product['game_of_month']) ?>" type="checkbox"/>
            <?php endif; ?>
            <hr>
            <h1 class="kiosk_title">Stock</h1>
            <!-- Display the available stock returned from the query on line 8 -->
            <input name="available_stock" class="kiosk_input" value="<?php echo($product['available_stock']) ?>"/>
            <hr>
            <h1 class="kiosk_title">Consoles</h1>
            <label class="kiosk_content">Playstation</label>
            <!-- Using an if statement to check if the playstation value returned from the query on line 8 is equal to 1 -->
            <?php if($product['playstation'] == 1): ?>
                <!-- If yes, display the playstation check box as checked-->
                <input name="playstation" class="kiosk_input" value="<?php echo($product['playstation']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <!-- If no, display the playstation check box as unchecked-->
                <input name="playstation" class="kiosk_input" value="<?php echo($product['playstation']) ?>" type="checkbox"/>
            <?php endif; ?>
            <label class="kiosk_content">Xbox</label>
            <!-- Using an if statement to check if the xbox value returned from the query on line 8 is equal to 1 -->
            <?php if($product['xbox'] == 1): ?>
                <!-- If yes, display the xbox check box as checked-->
                <input name="xbox" class="kiosk_input" value="<?php echo($product['xbox']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <!-- If no, display the xbox check box as unchecked-->
                <input name="xbox" class="kiosk_input" value="<?php echo($product['xbox']) ?>" type="checkbox"/>
            <?php endif; ?>
            <label class="kiosk_content">Nintendo</label>
            <!-- Using an if statement to check if the nintendo value returned from the query on line 8 is equal to 1 -->
            <?php if($product['nintendo'] == 1): ?>
                <!-- If yes, display the nintendo check box as checked-->
                <input name="nintendo" class="kiosk_input" value="<?php echo($product['nintendo']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <!-- If no, display the nintendo check box as unchecked-->
                <input name="nintendo" class="kiosk_input" value="<?php echo($product['nintendo']) ?>" type="checkbox"/>
            <?php endif; ?>
            <label class="kiosk_content">PC</label>
            <!-- Using an if statement to check if the pc value returned from the query on line 8 is equal to 1 -->
            <?php if($product['pc'] == 1): ?>
                <!-- If yes, display the pc check box as checked-->
                <input name="pc" class="kiosk_input" value="<?php echo($product['pc']) ?>" type="checkbox" checked/>
            <?php else: ?>
                <!-- If no, display the pc check box as unchecked-->
                <input name="pc" class="kiosk_input" value="<?php echo($product['pc']) ?>" type="checkbox"/>
            <?php endif; ?>
            <!-- this button is set to be a submit which means it will direct to the page in the action of the form. -->
            <button type="submit">Save</button>
        </form>
    </div>
</div>

<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
