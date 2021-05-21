<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<?php $sku = $_GET['sku'];
array_push($_SESSION['basket'], $sku); ?>
<?php header("Location: basket.php"); ?>
<!-- add the sku to the array again and redirect to the basket. ->
