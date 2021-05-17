<?php

try {
    $pdo = new PDO('mysql:Assignment;host=127.0.0.1', 'root', "");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

// Game of month image
$game_of_month = "SELECT product_image, available_stock, product_sku FROM ASSIGNMENT.product WHERE game_of_month = ?";

// pass query

$G_O_M_preparedStatement = $pdo->prepare($game_of_month);

//execute

$G_O_M_preparedStatement->execute([1]);

// basket game image
$basket_product = "SELECT product_name, product_image, product_cost, available_stock FROM ASSIGNMENT.product WHERE product_sku = ?";

// pass query

$basket_product_preparedStatement = $pdo->prepare($basket_product);

// Get featured games
$featured_games = "SELECT product_name, product_image, product_sku, available_stock FROM assignment.product WHERE featured = ?";

//pass query
$featured_games_preparedStatement = $pdo->prepare($featured_games);

//execute
$featured_games_preparedStatement->execute([1]);


// Get games
$games = "SELECT product_name, product_image, product_cost, product_description, slug, product_sku FROM ASSIGNMENT.product where available_stock != ?";

//pass query
$games_preparedStatement = $pdo->prepare($games);

//execute
$games_preparedStatement->execute([0]);

$products = "SELECT product_name, product_image, product_cost, product_description, slug, product_sku, playstation, nintendo, pc, xbox FROM ASSIGNMENT.product where available_stock != ?";

//pass query
$products_preparedStatement = $pdo->prepare($products);

//execute
$products_preparedStatement->execute([0]);

// playstation image
$playstation = "SELECT product_name, product_image, product_sku, available_stock FROM ASSIGNMENT.product WHERE playstation = ?";

// pass query

$playstation_preparedStatement = $pdo->prepare($playstation);

//execute

$playstation_preparedStatement->execute([1]);

// Xbox image
$xbox = "SELECT product_name, product_image, product_sku, available_stock FROM ASSIGNMENT.product WHERE xbox = ?";

// pass query

$xbox_preparedStatement = $pdo->prepare($xbox);

//execute

$xbox_preparedStatement->execute([1]);


// Get game details
$game = "SELECT product_name, product_image, product_description, slug, product_cost, playstation, xbox, nintendo, pc, available_stock FROM assignment.product WHERE product_sku = ?";

//pass query
$game_preparedStatement = $pdo->prepare($game);

//transaction
$transaction = "INSERT INTO ASSIGNMENT.sale (sale_id, sale_number, user_id, order_date, order_value, order_status)
VALUES(?,?,?,?,?,?)";

//pass query
$transaction_preparedStatement = $pdo->prepare($transaction);

//user
$user = "INSERT INTO ASSIGNMENT.users (user_name, user_email, user_password, access_type)
VALUES(?,?,?,?)";

//pass query
$user_preparedStatement = $pdo->prepare($user);

//address
$address = "INSERT INTO ASSIGNMENT.address (house_number, street_name, town, county, country, post_code, a_type)
VALUES(?,?,?,?,?,?,?)";

//pass query
$address_preparedStatement = $pdo->prepare($address);

$user_details = "SELECT user_name, user_email FROM ASSIGNMENT.users WHERE user_id = ?";

// pass query

$user_details_preparedStatement = $pdo->prepare($user_details);

//line_item
$line_items = "INSERT INTO ASSIGNMENT.line_item (sale_id, product_sku, quantity)
VALUES(?,?,?)";

//pass query
$line_items_preparedStatement = $pdo->prepare($line_items);

//payment
$payment = "INSERT INTO ASSIGNMENT.payment (card_number, name_on_card, csv, address_id)
VALUES(?,?,?,?)";

//pass query
$payment_preparedStatement = $pdo->prepare($payment);

//transaction
$user_address = "UPDATE ASSIGNMENT.users SET address_id = ? WHERE user_id = ?";

//pass query
$user_address_preparedStatement = $pdo->prepare($user_address);

//Delivery
$delivery = "INSERT INTO ASSIGNMENT.delivery (addess_id, delivery_staus)
VALUES(?,?)";

//pass query
$delivery_preparedStatement = $pdo->prepare($delivery);

//transaction
$sale_detail_update = "UPDATE ASSIGNMENT.sale SET payment_ref = ?, delivery_ref = ? WHERE sale_id = ?";

//pass query
$sale_detail_update_preparedStatement = $pdo->prepare($sale_detail_update);

$stock_check = "SELECT available_stock FROM ASSIGNMENT.product WHERE product_sku = ?";

// pass query

$stock_check_preparedStatement = $pdo->prepare($stock_check);


//transaction
$stock_update = "UPDATE ASSIGNMENT.product SET available_stock = ? WHERE product_sku = ?";

//pass query
$stock_update_update_preparedStatement = $pdo->prepare($stock_update);

//account update
$account_update = "UPDATE ASSIGNMENT.users SET user_name = ?, user_email = ? WHERE user_id = ?";

//pass query
$account_update_preparedStatement = $pdo->prepare($account_update);

$useful_links = "SELECT website, webpage, author, lang, tags, url FROM ASSIGNMENT.useful_links";

// pass query

$useful_links_preparedStatement = $pdo->prepare($useful_links);

$useful_links_preparedStatement->execute();

$lang = "SELECT language_name FROM ASSIGNMENT.lang WHERE language_id = ?";

// pass query

$lang_preparedStatement = $pdo->prepare($lang);

$tag = "SELECT tag_name FROM ASSIGNMENT.tags WHERE tag_id = ?";

// pass query

$tag_preparedStatement = $pdo->prepare($tag);

$all_lang = "SELECT language_name FROM ASSIGNMENT.lang";

// pass query

$all_lang_preparedStatement = $pdo->prepare($all_lang);

$all_lang_preparedStatement->execute();


$all_tags = "SELECT tag_name FROM ASSIGNMENT.tags";

// pass query

$all_tags_preparedStatement = $pdo->prepare($all_tags);

$all_tags_preparedStatement->execute();
