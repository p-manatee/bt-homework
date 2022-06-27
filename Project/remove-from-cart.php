<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
require_once 'lib/ShoppingCart.php';
require_once 'lib/ShoppingCartItem.php';
$id="";
$removeArray="";

// If there is no id in url string redirection to shop page
if((isset($_GET['id']) && !empty($_GET['id'])) || (isset($_POST['remove']) && !empty($_POST['remove']))){
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id=$_GET['id'];
    }
    if(isset($_POST['remove']) && !empty($_POST['remove'])){
        $removeArray = $_POST['remove'];
    }
   
}else{
    header("Location:shop-page.php");
}

// var_dump($id);
// var_dump($removeArray);
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

// Removing one product
    if($id!=""){
        $cart->removeItem($id);
    }
// Removing multiple product from cart , with id's in  array removeArray

    if($removeArray!=""){
        foreach ($removeArray as $idToRemove) {
            $cart->removeItem($idToRemove);
        }
    }
// Reseting and  updating Session[cart-items] 
    $items=$cart->getCartItems();
    unset($_SESSION['cart-items']);
    foreach ($items as $item) {
        $_SESSION['cart-items'][]=array("product"=>$item->getProduct()->getId(),"quantity"=>$item->getQuantity());
    }

    header("Location:".$_SERVER['HTTP_REFERER']);
?>