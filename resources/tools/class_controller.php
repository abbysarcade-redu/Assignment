<?php
class game {
    public $product_name;
    public $product_image;
    public $product_cost;
    public $product_description;
    public $slug;
    public $product_sku;
    public $available_stock;
    public $playstation;
    public $nintendo;
    public $pc;
    public $xbox;
}

class users {
    public $user_id;
    public $name;
    public $email;
    public $access;
}

class game_of_month {
    public $product_image;
    public $available_stock;
    public $product_sku;
}

class featured_game {
    public $product_name;
    public $product_image;
    public $product_sku;
    public $available_stock;
}

class prod_ret {
    public $product_name;
    public $product_image;
    public $product_description;
    public $slug;
    public $available_stock;
}

class games {
    public $product_name;
    public $product_image;
    public $product_sku;
    public $available_stock;
}

class useful_link {
    public $link_id;
    public $website;
    public $webpage;
    public $author;
    public $lang;
    public $tags;
    public $url;
}

class order {
    public $sale_id;
    public $sale_number;
    public $user_id;
    public $order_date;
    public $order_value;
}

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
