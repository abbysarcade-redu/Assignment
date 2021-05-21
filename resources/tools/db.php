<?php

//connect to the database
try {
    $pdo = new PDO('mysql:Assignment;host=127.0.0.1', 'root', "");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

// Game of month data.
$game_of_month = "SELECT product_image, available_stock, product_sku FROM ASSIGNMENT.product WHERE game_of_month = ?";

// prepare the above query.
$G_O_M_preparedStatement = $pdo->prepare($game_of_month);

//execute the query for when the game of the month attribute is set to 1.
$G_O_M_preparedStatement->execute([1]);

// product data for the basket.
$basket_product = "SELECT product_name, product_image, product_cost, available_stock FROM ASSIGNMENT.product WHERE product_sku = ?";

// prepare the above query.
$basket_product_preparedStatement = $pdo->prepare($basket_product);

// Get featured games data.
$featured_games = "SELECT product_name, product_image, product_sku, available_stock FROM assignment.product WHERE featured = ?";

// prepare the above query.
$featured_games_preparedStatement = $pdo->prepare($featured_games);

//execute the query for when the featured games attribute is set to 1.
$featured_games_preparedStatement->execute([1]);

// Get games data.
$games = "SELECT product_name, product_image, product_cost, product_description, product_sku FROM ASSIGNMENT.product where available_stock <= ?";

// prepare the above query.
$games_preparedStatement = $pdo->prepare($games);

//execute the query for when the available stock attribute is not less than or equal to 0.
$games_preparedStatement->execute([0]);

// Get games data.
$products = "SELECT product_name, product_image, product_cost, product_description, product_sku, playstation, nintendo, pc, xbox FROM ASSIGNMENT.product where available_stock > ?";

// prepare the above query.
$products_preparedStatement = $pdo->prepare($products);

//execute the query for when the available stock attribute is not less than or equal to 0.
$products_preparedStatement->execute([0]);

// Get playstation details.
$playstation = "SELECT product_name, product_image, product_sku, available_stock FROM ASSIGNMENT.product WHERE playstation = ?";

// prepare the above query.
$playstation_preparedStatement = $pdo->prepare($playstation);

//execute the query for when the playstation attribute is set to 1.
$playstation_preparedStatement->execute([1]);

// Get xbox details.
$xbox = "SELECT product_name, product_image, product_sku, available_stock FROM ASSIGNMENT.product WHERE xbox = ?";

// prepare the above query.
$xbox_preparedStatement = $pdo->prepare($xbox);

//execute the query for when the playstation attribute is set to 1.
$xbox_preparedStatement->execute([1]);


// Get game details
$game = "SELECT product_name, product_image, product_description, product_cost, playstation, xbox, nintendo, pc, available_stock FROM assignment.product WHERE product_sku = ?";

// prepare the above query.
$game_preparedStatement = $pdo->prepare($game);

// insert transaction data into the database
$transaction = "INSERT INTO ASSIGNMENT.sale (sale_id, sale_number, user_id, order_date, order_value, order_status)
VALUES(?,?,?,?,?,?)";

// prepare the above query.
$transaction_preparedStatement = $pdo->prepare($transaction);

// insert user data into the database
$user = "INSERT INTO ASSIGNMENT.users (user_name, user_email, user_password, access_type)
VALUES(?,?,?,?)";

// prepare the above query.
$user_preparedStatement = $pdo->prepare($user);

// insert address data into the database
$address = "INSERT INTO ASSIGNMENT.address (house_number, street_name, town, county, country, post_code, a_type)
VALUES(?,?,?,?,?,?,?)";

// prepare the above query.
$address_preparedStatement = $pdo->prepare($address);

// get user data from the database
$user_details = "SELECT user_name, user_email FROM ASSIGNMENT.users WHERE user_id = ?";

// prepare the above query.
$user_details_preparedStatement = $pdo->prepare($user_details);

// insert line_item data into the database
$line_items = "INSERT INTO ASSIGNMENT.line_item (sale_id, product_sku, quantity)
VALUES(?,?,?)";

// prepare the above query.
$line_items_preparedStatement = $pdo->prepare($line_items);

// insert payment data into the database
$payment = "INSERT INTO ASSIGNMENT.payment (card_number, name_on_card, csv, address_id)
VALUES(?,?,?,?)";

// prepare the above query.
$payment_preparedStatement = $pdo->prepare($payment);

// update user data into the database
$user_address = "UPDATE ASSIGNMENT.users SET address_id = ? WHERE user_id = ?";

// prepare the above query.
$user_address_preparedStatement = $pdo->prepare($user_address);

// insert delivery data into the database
$delivery = "INSERT INTO ASSIGNMENT.delivery (addess_id, delivery_staus)
VALUES(?,?)";

// prepare the above query.
$delivery_preparedStatement = $pdo->prepare($delivery);

// update sale data into the database
$sale_detail_update = "UPDATE ASSIGNMENT.sale SET payment_ref = ?, delivery_ref = ? WHERE sale_number = ?";

// prepare the above query.
$sale_detail_update_preparedStatement = $pdo->prepare($sale_detail_update);

//get stock data for a specific product
$stock_check = "SELECT available_stock FROM ASSIGNMENT.product WHERE product_sku = ?";

// prepare the above query.
$stock_check_preparedStatement = $pdo->prepare($stock_check);

// update stock data into the database
$stock_update = "UPDATE ASSIGNMENT.product SET available_stock = ? WHERE product_sku = ?";

// prepare the above query.
$stock_update_update_preparedStatement = $pdo->prepare($stock_update);

// update account data into the database
$account_update = "UPDATE ASSIGNMENT.users SET user_name = ?, user_email = ? WHERE user_id = ?";

// prepare the above query.
$account_update_preparedStatement = $pdo->prepare($account_update);

// get links data.
$useful_links = "SELECT link_id, website, webpage, author, lang, tags, url FROM ASSIGNMENT.useful_links";

// prepare the above query.
$useful_links_preparedStatement = $pdo->prepare($useful_links);

//execute the above query.
$useful_links_preparedStatement->execute();

// get language data.
$lang = "SELECT language_name FROM ASSIGNMENT.lang WHERE language_id = ?";

// prepare the above query.
$lang_preparedStatement = $pdo->prepare($lang);

// get tag data.
$tag = "SELECT tag_name, tag_slug FROM ASSIGNMENT.tags WHERE tag_id = ?";

// prepare the above query.
$tag_preparedStatement = $pdo->prepare($tag);

// get all language data.
$all_lang = "SELECT language_name FROM ASSIGNMENT.lang";

// prepare the above query.
$all_lang_preparedStatement = $pdo->prepare($all_lang);

// execute the above query.
$all_lang_preparedStatement->execute();

// get all tag data.
$all_tags = "SELECT tag_name, tag_slug FROM ASSIGNMENT.tags";

// prepare the above query.
$all_tags_preparedStatement = $pdo->prepare($all_tags);

// execute the above query.
$all_tags_preparedStatement->execute();

// get order data for a specific user
$past_orders = "SELECT sale_id, sale_number, order_date, order_value FROM ASSIGNMENT.sale WHERE user_id = ?";

// prepare the above query.
$past_orders_preparedStatement = $pdo->prepare($past_orders);

// check how many users are set up with an email
$email_check = "SELECT count(*) FROM ASSIGNMENT.users WHERE user_email = ?";

// prepare the above query.
$email_check_preparedStatement = $pdo->prepare($email_check);

// get the details of a user with a specific email.
$login_credentials = "SELECT user_password, user_id, access_type FROM ASSIGNMENT.users WHERE user_email = ?";

// prepare the above query.
$login_credentials_preparedStatement = $pdo->prepare($login_credentials);

// get the details of a order with a specific order id.
$past_order_breakdown = "SELECT product_sku, quantity FROM ASSIGNMENT.line_item WHERE sale_id = ?";

// prepare the above query.
$past_order_breakdown_preparedStatement = $pdo->prepare($past_order_breakdown);

// get all users from the database
$users = "SELECT user_id, user_name, user_email, access_type FROM ASSIGNMENT.users";

// prepare the above query.
$users_preparedStatement = $pdo->prepare($users);

// execute the above query.
$users_preparedStatement->execute();

// get all orders from the database
$orders = "SELECT sale_id, sale_number, user_id, order_date, order_value FROM ASSIGNMENT.sale";

// prepare the above query.
$orders_preparedStatement = $pdo->prepare($orders);

// execute the above query.
$orders_preparedStatement->execute();

// get all user from the database
$sale_user = "SELECT user_name, user_email, access_type FROM ASSIGNMENT.users WHERE user_id = ?";

// prepare the above query.
$sale_user_preparedStatement = $pdo->prepare($sale_user);

// get all products from the database
$kiosk_products = "SELECT product_sku, product_name, product_description, product_cost, featured, game_of_month,  available_stock, playstation, xbox, nintendo, pc FROM ASSIGNMENT.product";

// prepare the above query.
$kiosk_products_preparedStatement = $pdo->prepare($kiosk_products);

// execute the above query.
$kiosk_products_preparedStatement->execute();

// count the number of products in the database
$products_count = "SELECT count(*) FROM ASSIGNMENT.product";

// prepare the above query.
$products_count_preparedStatement = $pdo->prepare($products_count);

// execute the above query.
$products_count_preparedStatement->execute();

// count the number of orders in the database
$orders_count = "SELECT count(*) FROM ASSIGNMENT.sale";

// prepare the above query.
$orders_count_preparedStatement = $pdo->prepare($orders_count);

// execute the above query.
$orders_count_preparedStatement->execute();

// count the number of users in the database
$users_count = "SELECT count(*) FROM ASSIGNMENT.users";

// prepare the above query.
$users_count_preparedStatement = $pdo->prepare($users_count);

// execute the above query.
$users_count_preparedStatement->execute();

// count the number of links in the database
$links_count = "SELECT count(*) FROM ASSIGNMENT.useful_links";

// prepare the above query.
$links_count_preparedStatement = $pdo->prepare($links_count);

// execute the above query.
$links_count_preparedStatement->execute();

// get the details of a specific product
$kiosk_product = "SELECT product_name, product_description, product_cost, featured, game_of_month,  available_stock, product_image, playstation, xbox, nintendo, pc FROM ASSIGNMENT.product WHERE product_sku = ?";

// prepare the above query.
$kiosk_product_preparedStatement = $pdo->prepare($kiosk_product);

// get the details of a specific order
$kiosk_order = "SELECT sale_number, user_id, order_date, payment_ref, order_value, order_status, delivery_ref FROM ASSIGNMENT.sale WHERE sale_id = ?";

// prepare the above query.
$kiosk_order_preparedStatement = $pdo->prepare($kiosk_order);

// get the details of a specific link
$kiosk_link = "SELECT website, webpage, author, lang, tags, url FROM ASSIGNMENT.useful_links WHERE link_id = ?";

// prepare the above query.
$kiosk_link_preparedStatement = $pdo->prepare($kiosk_link);

//link update
$kiosk_link_update = "UPDATE ASSIGNMENT.useful_links SET website = ?, webpage = ?, author = ?, url = ? WHERE link_id = ?";

// prepare the above query.
$kiosk_link_update_preparedStatement = $pdo->prepare($kiosk_link_update);

//order update
$kiosk_order_update = "UPDATE ASSIGNMENT.sale SET order_date = ?, order_value = ?, order_status = ? WHERE sale_id = ?";

// prepare the above query.
$kiosk_order_update_preparedStatement = $pdo->prepare($kiosk_order_update);

//product update
$kiosk_product_update = "UPDATE ASSIGNMENT.product SET product_name = ?, product_description = ?, product_cost = ?, game_of_month = ?, available_stock = ?, playstation = ?, xbox  = ?, nintendo = ?, pc = ? WHERE product_sku = ?";

// prepare the above query.
$kiosk_product_update_preparedStatement = $pdo->prepare($kiosk_product_update);

//user update
$kiosk_user_update = "UPDATE ASSIGNMENT.users SET user_name = ?, user_email = ?, access_type = ? WHERE user_id = ?";

// prepare the above query.
$kiosk_user_update_preparedStatement = $pdo->prepare($kiosk_user_update);

// get language details from the database
$get_lang = "SELECT language_id, language_name FROM ASSIGNMENT.lang";

// prepare the above query.
$get_lang_preparedStatement = $pdo->prepare($get_lang);

// get tag details from the database
$get_tag = "SELECT tag_id, tag_name FROM ASSIGNMENT.tags";

// prepare the above query.
$get_tag_preparedStatement = $pdo->prepare($get_tag);

//link update
$kiosk_link_add = "INSERT INTO ASSIGNMENT.useful_links (website, webpage, author, lang, tags, url)
VALUES(?,?,?,?,?,?)";

// prepare the above query.
$kiosk_link_add_preparedStatement = $pdo->prepare($kiosk_link_add);

//product update
$kiosk_product_add = "INSERT INTO ASSIGNMENT.product (product_name, product_description, product_cost, game_of_month, available_stock, playstation, xbox, nintendo, pc)
VALUES(?,?,?,?,?,?,?,?,?)";

// prepare the above query.
$kiosk_product_add_preparedStatement = $pdo->prepare($kiosk_product_add);

// delete order
$delete_order = "DELETE FROM ASSIGNMENT.sale WHERE sale_id = ?";

// prepare the above query.
$delete_order_preparedStatement = $pdo->prepare($delete_order);

// delete link
$delete_link = "DELETE FROM ASSIGNMENT.useful_links WHERE link_id = ?";

// prepare the above query.
$delete_link_preparedStatement = $pdo->prepare($delete_link);

//delete user
$delete_user = "DELETE FROM ASSIGNMENT.users WHERE user_id = ?";

// prepare the above query.
$delete_user_preparedStatement = $pdo->prepare($delete_user);


// delete product
$delete_product = "DELETE FROM ASSIGNMENT.product WHERE product_sku = ?";

// prepare the above query.
$delete_product_preparedStatement = $pdo->prepare($delete_product);

// get payment details
$get_payment = "SELECT card_number, name_on_card FROM ASSIGNMENT.payment WHERE payment_ref = ?";

// prepare the above query.
$get_payment_preparedStatement = $pdo->prepare($get_payment);

// get order details
$order_details = "SELECT order_date, order_value FROM ASSIGNMENT.sale WHERE sale_number= ?";

// prepare the above query.
$order_details_preparedStatement = $pdo->prepare($order_details);
