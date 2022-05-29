<?php
require_once __DIR__.'./models/m-products.php';
    $id='';
if(!empty($_GET['id'])){
    $id = $_GET['id'];
}
if($id!=''){
    $singleProduct = getOneProduct($id);
    $relatedProducts = getRelatedProducts($id);
}

// var_dump($relatedProducts);

// HEADER
require __DIR__."./views/_layout/v-header.php";
// SINGLE PRODUCT MAIN
if($id!=''){
    if(count($singleProduct)>0){
        require __DIR__."./views/v-single-product.php";
    }else{
        require __DIR__."./views/v-404.php";
    }
}
else{
    require __DIR__."./views/v-404.php";
}


// FOOTER
require __DIR__."./views/_layout/v-footer.php";


?>