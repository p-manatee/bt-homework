<?php
class ShoppingCart{
    private $cartItems=[];
    public function getCartItems(){
        return $this->cartItems;
    }
    public function setCarItems($items){
        $this->cartItems = $items;
    }
    public function addToCart($productToAdd,$quantity='1'){
        $newCartItem = new ShoppingCartItem();
        $newCartItem->setProduct($productToAdd);
        $newCartItem->setQuantity($quantity,$productToAdd);
        if(empty($this->cartItems)){
            $this->cartItems[]=$newCartItem;
        }else{
            $inCart=false;
            $cartIndex=null;
            foreach ($this->cartItems as $k=>$item) {
                if($item->getProduct()->getId() == $productToAdd->getId()){
                    $inCart=true;
                    $cartIndex = $k;
                } 
            }
            if($inCart){
                $this->cartItems[$cartIndex]->setQuantity($quantity,$productToAdd);
            }else{
                $this->cartItems[]=$newCartItem;
            }
        }
    }
    public function showCartItems(){
        $cartItems=$this->getCartItems();
        foreach ($cartItems as $item) {
            echo "Product: ".$item->getProduct()->getTitle()." ,price: ".$item->getProduct()->getPrice().", Quantity: ".$item->getQuantity();
            echo "<br><hr>";
        }
    }
    public function removeItem($id){
        $indexToRemove="";
        foreach ($this->cartItems as $key => $item) {
            if($id == $item->getProduct()->getId()){
                $indexToRemove = $key;
            }
        }
        if($indexToRemove!=""){
            unset($this->cartItems[$indexToRemove]);
        }    
    }
}
?>