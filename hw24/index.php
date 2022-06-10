<?php
require_once 'Product.php';
require_once 'ShoppingCartItem.php';
require_once 'ShoppingCart.php';

try {
    $tv = new Product();
    $tv->setBarcode('912345987652');
    $tv->setTitle('LG-UK55');
    $tv->setPrice('50000');
    $tv->setStockQuantity('24');
    $laptop = new Product();
    $laptop->setBarcode('232453987650');
    $laptop->setTitle('MSI');
    $laptop->setPrice('10000');
    $laptop->setStockQuantity('50');
    $camera = new Product();
    $camera->setBarcode('122222333334');
    $camera->setTitle('Nikon');
    $camera->setPrice('120000');
    $camera->setStockQuantity('50');
    $mobilePhone=new Product();
    $mobilePhone->setTitle('POCO X3');
    $mobilePhone->setPrice('35999');
    $mobilePhone->setStockQuantity('45');
    
} catch (\Throwable $th) {
    echo $th->getMessage();
    echo " on line ".$th->getLine();
}

try {
  $cart = new ShoppingCart();
  $cart->addToCart($tv,'3'); 
  $cart->addToCart($tv,'15'); 
  $cart->addToCart($laptop,'2');
  $cart->addToCart($laptop,'5');
  $cart->addToCart($camera,'6');
  $cart->addToCart($camera,'13');
  $cart->addToCart($tv,'10');
  $cart->addToCart($mobilePhone,'10');
  $cart->addToCart($mobilePhone,'13');
  $cart->addToCart($camera,'7');
  $cart->showCartItems();
  echo"<br>After removal of one item<br><hr>";
  $cart->removeItem($tv->getBarcode());
  $cart->showCartItems();
//   var_dump($cart);
 
} catch (\Throwable $th) {
    echo $th->getMessage();
    echo " on line ".$th->getLine();
}

?>