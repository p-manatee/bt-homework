<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';

$popularProducts = Product::getPopularProducts();
// if(isset($_SESSION['cart-items']) && !empty($_SESSION['cart-items'])){
//     echo "<pre>";
//     var_dump($_SESSION['cart-items']);
//     echo "</pre>";
// }
// var_dump($popularProducts);
$current_page = "index";

// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
require __DIR__."/views/v-index.php";
// FOOTER
require __DIR__."/views/_layout/v-footer.php";
?>