<?php
//        require MySQL Connection
require('database/DBController.php');
require('database/Product.php');
require('database/Cart.php');

// DBController object
$db = new DBController();

$product = new Product($db);
$product_shuffle = $product->getData();

$Cart = new Cart($db);