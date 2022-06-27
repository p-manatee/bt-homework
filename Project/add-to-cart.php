<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
require_once 'lib/ShoppingCart.php';
require_once 'lib/ShoppingCartItem.php';
$id="";
$quant=1;

// If there is no id in url string redirection to shop page
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
}else{
    header("Location:shop-page.php");
}
// If there is no refferer that means someone typed address in url, since that is not approved redirection to shop page
if(!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])){
    header("Location:shop-page.php");
}
// Taking products that are in session cart-items and putting them in cart first
$cart = new ShoppingCart();
if(isset($_SESSION['cart-items']) && !empty($_SESSION['cart-items'])){
 foreach ($_SESSION['cart-items'] as $item) {
    $prodid=$item["product"];
    $quantity = $item["quantity"];
    $prod = Product::getProductById($prodid);
    $product = new Product();
    $product->setId($prod->id);
    $product->setTitle($prod->title);
    $product->setDescription($prod->description);
    $product->setPrice($prod->price);
    $product->setBarcode($prod->barcode);
    $product->setStock($prod->stock);
    $product->setImage($prod->image);
    $product->setCategoryId($prod->category_id);
    $cart->addToCart($product,$quantity);
    // var_dump($prod);
    
 }
}


// Getting new product to be added by id
$productModel = Product::getProductById($id);
if(isset($_GET['quantity'])){
    $quant = $_GET['quantity'];
}
$productNew = new Product();
$productNew->setId($productModel->id);
$productNew->setTitle($productModel->title);
$productNew->setDescription($productModel->description);
$productNew->setPrice($productModel->price);
$productNew->setBarcode($productModel->barcode);
$productNew->setStock($productModel->stock);
$productNew->setImage($productModel->image);
$productNew->setCategoryId($productModel->category_id);
//  echo "<pre>";
// var_dump($product);
// echo "</pre>";

// echo "<br><hr>";

    
     $cart->addToCart($productNew,$quant);
    // echo "<pre>";
  
    // $cart->showCartItems();
    $items=$cart->getCartItems();
    unset($_SESSION['cart-items']);
    foreach ($items as $item) {
        $_SESSION['cart-items'][]=array("product"=>$item->getProduct()->getId(),"quantity"=>$item->getQuantity());
    }

    // echo "</pre>";

    header("Location:".$_SERVER['HTTP_REFERER']);

// unset($_SESSION['cart-items']);

?>