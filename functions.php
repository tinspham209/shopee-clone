<?php
//        require MySQL Connection
require('database/DBController.php');
require('database/Product.php');

// DBController object
$db = new DBController();

$product = new Product($db);
$product_shuffle = $product->getData();

print_r($product->getData());