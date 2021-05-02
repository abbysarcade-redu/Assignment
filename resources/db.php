<?php

try {
    $pdo = new PDO('mysql:Assignment;host=127.0.0.1', 'root', "");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}

// Game of month image
$game_of_month = "SELECT product_image FROM ASSIGNMENT.product WHERE game_of_month = ?";

// pass query

$G_O_M_preparedStatement = $pdo->prepare($game_of_month);

//execute

$G_O_M_preparedStatement->execute([1]);

// Get featured games
$featured_games = "SELECT product_name, product_image FROM assignment.product WHERE featured = ?";

//pass query
$featured_games_preparedStatement = $pdo->prepare($featured_games);

//execute
$featured_games_preparedStatement->execute([1]);


// Get games
$games = "SELECT product_name, product_image FROM assignment.product";

//pass query
$games_preparedStatement = $pdo->prepare($games);

//execute
$games_preparedStatement->execute();

// playstation image
$playstation = "SELECT product_name, product_image FROM ASSIGNMENT.product WHERE playstation = ?";

// pass query

$playstation_preparedStatement = $pdo->prepare($playstation);

//execute

$playstation_preparedStatement->execute([1]);

// Xbox image
$xbox = "SELECT product_name, product_image FROM ASSIGNMENT.product WHERE xbox = ?";

// pass query

$xbox_preparedStatement = $pdo->prepare($xbox);

//execute

$xbox_preparedStatement->execute([1]);

// nintendo image
$nintendo = "SELECT product_name, product_image FROM ASSIGNMENT.product WHERE nintendo = ?";

// pass query

$nintendo_preparedStatement = $pdo->prepare($nintendo);

//execute

$nintendo_preparedStatement->execute([1]);

// PC image
$pc = "SELECT product_name, product_image FROM ASSIGNMENT.product WHERE pc = ?";

// pass query

$pc_preparedStatement = $pdo->prepare($pc);

//execute

$pc_preparedStatement->execute([1]);
