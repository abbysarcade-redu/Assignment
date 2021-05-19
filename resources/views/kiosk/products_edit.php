<?php
include("../../tools/db.php");

if (isset($_POST['game_of_month'])) {
    $game_of_month = 1;
} else {
    $game_of_month = 0;
}

if (isset($_POST['playstation'])) {
    $playstation = 1;
} else {
    $playstation = 0;
}

if (isset($_POST['xbox'])) {
    $xbox = 1;
} else {
    $xbox = 0;
}

if (isset($_POST['nintendo'])) {
    $nintendo = 1;
} else {
    $nintendo = 0;
}

if (isset($_POST['pc'])) {
    $pc = 1;
} else {
    $pc = 0;
}

$kiosk_product_update_preparedStatement->execute(array(
    $_POST['name'],
    $_POST['description'],
    $_POST['cost'],
    $game_of_month,
    $_POST['available_stock'],
    $playstation,
    $xbox,
    $nintendo,
    $pc,
    $_GET['sku']
));

include("e_products.php"); ?>
