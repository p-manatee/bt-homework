<?php
class ShoppingCartItem{
    private $product;
    private $quantity;
    public function getProduct(){
        return $this->product;
    }
    public function getQuantity(){
        return $this->quantity;
    }
    public function setProduct($product){
        if($product instanceof Product){
            $this->product = $product;
        }else{
            throw new Exception("Function setProduct accepts one param that is instance of Product class!");

        }
    }
    public function setQuantity($quant,$product){
        if($product instanceof Product){
            if(is_numeric($quant)){
                if($quant<=0){
                    throw new Exception("Quantity added to cart can not be zero or negative number"); 
                }elseif($quant>$product->getStock()){
                    throw new Exception("Number of product that you are trying to add to cart exceeds stock quantity");
                }else{
                    $this->quantity = $quant;
                }
            }else{
                throw new Exception("Function setQuantity accepts two params,first param must be numeric!");
            }
        }else{
            throw new Exception("Function setQuantity accepts two params,second param must be instance of Product class!");
        }
    }
}

?>