<?php if(!isset($_SESSION)) {
    session_start();
} ?>

<?php $sku = $_GET['sku'];
$sku_possition = array_search($sku, $_SESSION['basket']);
unset(($_SESSION['basket'])[$sku_possition]);
?>
<?php header("Location: basket.php"); ?>
<!-- remove the sku from the array again and redirect to the basket. ->
