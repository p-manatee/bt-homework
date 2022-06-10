<?php
class Product{
    private $barcode;
    private $title;
    private $price;
    private $stockQuantity;
    public function setBarcode($barcode){
        $this->barcode=$barcode;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setStockQuantity($stockQuantity){
        if($stockQuantity>=0){
            $this->stockQuantity=$stockQuantity;
        }else{
            throw new Exception("Quantity of this product can not be a negative number");
        }
    }
    public function getBarcode(){
        return $this->barcode;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getStockQuantity(){
        return $this->stockQuantity;
    }
}

?>