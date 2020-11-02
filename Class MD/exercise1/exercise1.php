<?php

require_once 'Product.php';
require_once 'ProductStorage.php';

use App\Product;
use App\ProductStorage;

//Adds Products to storage
$storage = new ProductStorage();
$storage->add(new Product('Logitech mouse', 7000, 14));
$storage->add(new Product('iPhone 5s', 99999, 3));
$storage->add(new Product('Epson EB-U05', 44046, 1));

//Prints out all the products
foreach ($storage->getProducts() as $item) {
    echo $item->printProducts();
}