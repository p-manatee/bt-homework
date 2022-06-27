<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
if(!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])){
    header("Location:shop-page.php");
}

if(($_SERVER['HTTP_REFERER'])!="http://localhost/boot/homeworks/Project/checkout-page.php"){
    header("Location:shop-page.php");
}

if(isset($_SESSION['cart-items']) && count($_SESSION['cart-items'])>0){
    $cartItems = $_SESSION['cart-items'];
}
// reseting session - cart-items to NULL
unset($_SESSION['cart-items']);
// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
require __DIR__."/views/v-thank-you.php";
// FOOTER
require __DIR__."/views/_layout/v-footer.php";
// reseting session - cart-items to NULL


?>