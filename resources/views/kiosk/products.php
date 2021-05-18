



<?php include ("../../tools/class_controller.php"); ?>
<?php include ("../../tools/db.php"); ?>
<!DOCTYPE html>
<header>
    <title>Useful Links - Kiosk</title>
    <script src="../js/useful_links.js"></script>
</header>
<body>
<?php include("layout/kiosk_nav.php") ?>

<div class="content-page">
    <a class="button-pink-b">Add product</a>
    <div class="table-wrapper">
        <table class="table table-hover">
            <thead class="table_header">
            <tr class="table_header">
                <th>Product Sku</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Consoles</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="link_table">
            <?php $row = $kiosk_products_preparedStatement->fetchAll(PDO::FETCH_CLASS, 'kiosk_products');
            foreach ($row as $kiosk_products): ?>
                <tr class="table filterTr" >
                    <td><?php echo($kiosk_products->product_sku) ?></td>
                    <td><?php echo($kiosk_products->product_name) ?></td>
                    <td><?php echo($kiosk_products->product_cost) ?></td>
                    <td><?php echo($kiosk_products->available_stock) ?></td>
                    <td><?php if($kiosk_products->playstation == 1): ?>
                            <a>Playstation</a>
                        <?php endif; ?>
                        <?php if($kiosk_products->xbox == 1): ?>
                            <a>Xbox</a>
                        <?php endif; ?>
                        <?php if($kiosk_products->nintendo == 1): ?>
                            <a>Nintendo</a>
                        <?php endif; ?>
                        <?php if($kiosk_products->pc == 1): ?>
                            <a>PC</a>
                        <?php endif; ?>
                    <td>
                        <a>
                            <img class="link_img" src="../Style/images/view.png">
                        </a>
                        <a>
                            <img class="link_img" src="../Style/images/edit.png">
                        </a>
                        <a>
                            <img class="link_img" src="../Style/images/delete.png">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="buffer-space"></div>

