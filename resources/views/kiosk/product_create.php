<!-- include the database file so we can access the queries.-->
<?php include("../../tools/db.php");

// check if the check box is checked and it it is then set the variable to 1, otherwise 0
if (isset($_POST['game_of_month'])) {
    $game_of_month = 1;
} else {
    $game_of_month = 0;
}

// check if the check box is checked and it it is then set the variable to 1, otherwise 0
if (isset($_POST['playstation'])) {
    $playstation = 1;
} else {
    $playstation = 0;
}

// check if the check box is checked and it it is then set the variable to 1, otherwise 0
if (isset($_POST['xbox'])) {
    $xbox = 1;
} else {
    $xbox = 0;
}

// check if the check box is checked and it it is then set the variable to 1, otherwise 0
if (isset($_POST['nintendo'])) {
    $nintendo = 1;
} else {
    $nintendo = 0;
}

// check if the check box is checked and it it is then set the variable to 1, otherwise 0
if (isset($_POST['pc'])) {
    $pc = 1;
} else {
    $pc = 0;
}

//execute the query from db.php using the data entered on add_links
$kiosk_product_add_preparedStatement->execute(array(
    $_POST['name'],
    $_POST['description'],
    $_POST['cost'],
    $game_of_month,
    $_POST['available_stock'],
    $playstation,
    $xbox,
    $nintendo,
    $pc
));

// get the id number of the entry for the view page
$_GET['sku'] = $pdo->lastInsertId();

// include the view products page, using the get set above it will display the new product
include("view_products.php"); ?>
