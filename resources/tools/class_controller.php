<?php

//class used for returning game data from the product table of the database.
class game {
    public $product_name;
    public $product_image;
    public $product_cost;
    public $product_description;
    public $product_sku;
    public $available_stock;
    public $playstation;
    public $nintendo;
    public $pc;
    public $xbox;
}

//class used for returning user data from the users table of the database.
class users {
    public $user_id;
    public $name;
    public $email;
    public $access;
}

//class used for returning the data of the game of the month from the product table of the database .
class game_of_month {
    public $product_image;
    public $available_stock;
    public $product_sku;
}

//class used for returning the data of the featered games from the product table of the database.
class featured_game {
    public $product_name;
    public $product_image;
    public $product_sku;
    public $available_stock;
}


//class used for returning game data from the product table of the database.
class prod_ret {
    public $product_name;
    public $product_image;
    public $product_description;
    public $slug;
    public $available_stock;
}

//class used for returning game data from the product table of the database.
class games {
    public $product_name;
    public $product_image;
    public $product_sku;
    public $available_stock;
}

//class used for returning the links data from the useful_links table of the database.
class useful_link {
    public $link_id;
    public $website;
    public $webpage;
    public $author;
    public $lang;
    public $tags;
    public $url;
}

//class used for returning the order data from the sale table of the database.
class order {
    public $sale_id;
    public $sale_number;
    public $user_id;
    public $order_date;
    public $order_value;
}

//class used for returning game data from the product table of the database.
class kiosk_products {
    public $product_sku;
    public $product_name;
    public $product_description;
    public $product_cost;
    public $featured;
    public $game_of_month;
    public $available_stock;
    public $product_image;
    public $playstation;
    public $xbox;
    public $nintendo;
    public $pc;
}

?>
