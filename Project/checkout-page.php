<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
require_once 'lib/Validation.php';
// echo $_SERVER['HTTP_REFERER'];

if(!isset($_SERVER['HTTP_REFERER']) || empty($_SERVER['HTTP_REFERER'])){
    header("Location:shop-page.php");
}

$validateFlag = false;
$showSuccess = false;
$firstName="";
$lastName="";
$email="";
$city="";
$phone="";
$street="";
$zip="";
$comment="";
$policy="";
$validateFirstName=array();
$validateLastName=array();
$validateEmail=array();
$validateCity =array();
$validatePhone = array();
$validateStreet = array();
$validateZip = array();
$validatePolicy = array();
if(isset($_SESSION['cart-items']) && count($_SESSION['cart-items'])>0){
    $cartItems = $_SESSION['cart-items'];
}
if(isset($_POST['submit'])){
    $validateFlag =true;
}

// Form inputs
    
if(!empty($_POST['first-name'])){
    $firstName = trim($_POST['first-name']);
    echo $firstName;
}
if(!empty($_POST['last-name'])){
    $lastName = trim($_POST['last-name']);
}
if(!empty($_POST['email'])){
    $email = trim($_POST['email']);
}
if(!empty($_POST['city'])){
    $city = trim($_POST['city']);
}
if(!empty($_POST['phone'])){
    $phone = trim($_POST['phone']);
}
if(!empty($_POST['street'])){
    $street = trim($_POST['street']);
}
if(!empty($_POST['zip'])){
    $zip = trim($_POST['zip']);
}
if(!empty($_POST['comment'])){
    $comment = trim($_POST['comment']);
}
if(isset($_POST['check']) && !empty($_POST['check'])){
    $policy = trim($_POST['check']);
}

// Calling validate functions if flag alows it(means if it is not on the first loading of the page but when submit form button is clicked)
if($validateFlag){
    $validateFirstName = Validation::validateFirstName($firstName);
    $validateLastName = Validation::validateLastName($lastName);
    $validateEmail = Validation::validateEmail($email);
    $validateCity = Validation::validateCity($city);
    $validatePhone = Validation::validatePhone($phone);
    $validateStreet = Validation::validateStreet($street);
    $validateZip = Validation::validateZip($zip);
    $validatePolicy = Validation::validatePolicy($policy);
}

// show modal if all validate messages are empty
if(count($validateFirstName)==0 && $validateFlag && count($validateLastName)==0 && count($validateEmail)==0 && count($validateCity)==0 && count($validatePhone)==0 && count($validateStreet)==0 && count($validateZip)==0 && count($validatePolicy)==0){
    $showSuccess = true;
}

if($showSuccess){
    header("Location:thank-you-page.php");
}

// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
require __DIR__."/views/v-checkout.php";
// FOOTER
require __DIR__."/views/_layout/v-footer.php";

?>