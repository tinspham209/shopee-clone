<?php
//        require MySQL Connection
require('database/DBController.php');
require('database/Product.php');

// DBController object
$db = new DBController();

$product = new Product($db);

print_r($product->getData());