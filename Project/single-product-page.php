<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
$id="";
$inCart = false;
$cartItems="";
$quantityInCart="";
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id=$_GET['id'];
}
if(isset($_SESSION['cart-items']) && !empty($_SESSION['cart-items'])){
    $cartItems=$_SESSION['cart-items'];
}
$oneProduct=Product::getProductById($id);
if($oneProduct){
    $relatedProducts=Product::getRelatedProducts($id,$oneProduct->cat_id);
    $previousProductId = Product::getPreviousProductID($id);
    $nextPRoductId = Product::getNextProductID($id);
    if($cartItems!=""){
        foreach($cartItems as $item){
            if($item["product"]==$id){
                $inCart = true;
               $quantityInCart = $item["quantity"];
            }
        }
    }
}

// var_dump($relatedProducts);

// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
if($oneProduct){
    require __DIR__."/views/v-single-product.php";
}else{
    require __DIR__."/views/v-404.php";
}

// FOOTER
require __DIR__."/views/_layout/v-footer.php";
?>