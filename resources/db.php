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
