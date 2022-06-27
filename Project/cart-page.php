<?php 
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
require_once 'lib/ShoppingCart.php';
require_once 'lib/ShoppingCartItem.php';
$cartItems="";
if(isset($_SESSION['cart-items']) && count($_SESSION['cart-items'])>0){
    $cartItems = $_SESSION['cart-items'];
}
// var_dump($cartItems);
if($cartItems==""){
    header("Location:index.php");
}
// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
require __DIR__."/views/v-shopping-cart.php";
// FOOTER
require __DIR__."/views/_layout/v-footer.php";

?>