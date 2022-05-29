<?php
require_once __DIR__.'./models/m-products.php';
$sortBy="";
$searchTerm ="";
if(!empty($_GET['search-term'])){
    $searchTerm = $_GET['search-term'];
}
if(!empty($_GET['sort-by'])){
    $sortBy = $_GET['sort-by'];
}
$availableproducts = getAllProducts($sortBy);
if($searchTerm!=""){
    $availableproducts = searchProductsByTerm($availableproducts,$searchTerm,$sortBy);
}
// HEADER
require __DIR__."./views/_layout/v-header.php";
// HOME MAIN
require __DIR__."./views/v-products.php";
// FOOTER
require __DIR__."./views/_layout/v-footer.php";


?>