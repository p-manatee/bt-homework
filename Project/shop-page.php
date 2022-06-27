<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
const ORDER_BY_PRICE_ASC = 'price-asc';
const ORDER_BY_PRICE_DSC = 'price-desc'; 

$current_page = "shop";
$searchTerm="";
$orderBy="";
if(isset($_GET['sort-by'])){
    if($_GET['sort-by']!=""){
        $orderBy=$_GET['sort-by'];
    }
}
if(isset($_GET['search-term'])){
    if($_GET['search-term']!=""){
        $searchTerm=$_GET['search-term'];
    }
}
$currentPageNum=1;
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPageNum=$_GET['page'];
}
$allProducts=Product::getAllProducts($searchTerm,$orderBy,$currentPageNum);
$totalNumberOfProducts = $allProducts["number-of-products"];
$NumberOfPages = ceil($totalNumberOfProducts/6);
// var_dump($allProducts);
// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
if($currentPageNum<1 || $currentPageNum>$NumberOfPages || !is_numeric($currentPageNum)){
require __DIR__."/views/v-404.php";
}else{
    require __DIR__."/views/v-shop.php";
}

// FOOTER
require __DIR__."/views/_layout/v-footer.php";

?>