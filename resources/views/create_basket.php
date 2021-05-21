<?php
if(!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['basket'])) {
    array_push($_SESSION['basket'], $_GET['sku']);
} else {
    $_SESSION['basket']=array($_GET['sku']);
} ?>

<?php include("product_page.php"); ?>

<!-- set basket details -->
