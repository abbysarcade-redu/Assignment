<?php if(!isset($_SESSION)) {
    session_start();
} ?>
<?php print_r($_SESSION['basket']); ?>
<?php $basket_sku = $_GET['sku'];
print_r($basket_sku);
$vals = array_count_values($_SESSION['basket']);
foreach ($vals as $sku => $amount) {
    print_r($vals);
    print_r($sku);
    if ($basket_sku == $sku) {
        print_r($basket_sku);
        for ($i=1; $i<=$amount; $i++) {
            $sku_possition = array_search($basket_sku, $_SESSION['basket']);
            print_r($sku_possition);
            unset(($_SESSION['basket'])[$sku_possition]);
        }
    }
}
header("Location: basket.php"); ?>
