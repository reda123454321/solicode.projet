<?php

require_once "data.php";

function getProducts($products) {

    return $products;

}


function getProductById($products, $id) {

    foreach ($products as $product) {

        if ($product["id"] === $id) {

            return $product;

        }

    }

}

?>