<!-- include the class controller used to return the data in a specified format. -->
<?php include ("../../tools/class_controller.php"); ?>
<!-- include the database file so we can access the queries.-->
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <!-- Add a name to the tab shown on the browser-->
    <title>Useful Links - Kiosk</title>
</header>
<body>
<!-- include the nav bar used for the kiosk -->
<?php include("layout/kiosk_nav.php") ?>

<!-- container for the content page -->
<div class="content-page">
    <a class="button-pink-b" href="add_product.php">Add product</a>
    <div class="table-wrapper">
        <!-- create the table -->
        <table class="table table-hover">
            <thead class="table_header">
            <!-- table headers -->
            <tr class="table_header">
                <th>Product Sku</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Consoles</th>
                <th></th>
            </tr>
            </thead>
            <!-- table entries -->
            <tbody id="link_table">
            <!-- fetch the return from the query from db.php query. Using fetchAll to access all of the items returned, using a class to call items. -->
            <?php $row = $kiosk_products_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'kiosk_products');
            //to iterate through the array returned from the query above.
            foreach ($row as $kiosk_products): ?>
                <!-- create a table row with a class that associates it to the language and the tag-->
                <tr class="table filterTr" >
                    <!-- Display the product SKU returned from the query on line 36 -->
                    <td><?php echo($kiosk_products->product_sku) ?></td>
                    <!-- Display the product name returned from the query on line 36 -->
                    <td><?php echo($kiosk_products->product_name) ?></td>
                    <!-- Display the product cost returned from the query on line 36 -->
                    <td><?php echo($kiosk_products->product_cost) ?></td>
                    <!-- Display the available stock returned from the query on line 36 -->
                    <td><?php echo($kiosk_products->available_stock) ?></td>
                    <!-- Using an if statement to check if the playstation value returned from the query on line 8 is equal to 1. If yes, display.-->
                    <td><?php if($kiosk_products->playstation == 1): ?>
                            <a>Playstation</a>
                        <?php endif; ?>
                        <!-- Using an if statement to check if the xbox value returned from the query on line 8 is equal to 1. If yes, display. -->
                        <?php if($kiosk_products->xbox == 1): ?>
                            <a>Xbox</a>
                        <?php endif; ?>
                        <!-- Using an if statement to check if the nintendo value returned from the query on line 8 is equal to 1. If yes, display. -->
                        <?php if($kiosk_products->nintendo == 1): ?>
                            <a>Nintendo</a>
                        <?php endif; ?>
                        <!-- Using an if statement to check if the pc value returned from the query on line 8 is equal to 1. If yes, display. -->
                        <?php if($kiosk_products->pc == 1): ?>
                            <a>PC</a>
                        <?php endif; ?>
                    <td>
                        <!-- using the sku returned from the query on line 36, pass the id to view_products -->
                        <a href="view_products.php?sku=<?php echo($kiosk_products->product_sku) ?>">
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <!-- using the sku returned from the query on line 36, pass the id to edit_products -->
                        <a href="edit_products.php?sku=<?php echo($kiosk_products->product_sku) ?>">
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <!-- using the sku returned from the query on line 36, pass the id to product_delete -->
                        <a href="product_delete.php?sku=<?php echo($kiosk_products->product_sku) ?>">
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!-- including the footer for the kiosk system -->
<?php include ("layout/kiosk_footer.php") ?>
