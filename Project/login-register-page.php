<?php
session_start();
require_once 'models/Database.php';
require_once 'models/Product.php';
require_once 'models/User.php';
$fileUrl="";
$validateFlag = false;

if(isset($_POST['submit'])){
    $validateFlag =true;
}

if($validateFlag){
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
       if (empty($_POST["first-name"]))
         {$_SESSION['first-name-error']= "Name is required";}
       if (empty($_POST["last-name"]))
         {$_SESSION['last-name-error'] = "Last name is required";}
       if (empty($_POST["email"]))
         {$_SESSION['email-error'] = "Email is required";}
         if (!str_contains($_POST["email"],"@") && empty($_SESSION['email-error']))
         {$_SESSION['email-error'] = "Email must contain @";}
       if (empty($_POST["password"]))
         {$_SESSION['password-error'] = "Password is required";}
       
    }
}
if( !empty($_FILES["image"])){
    $name = $_FILES["image"]["name"];
    $name = uniqid().$name;
    $path = $_FILES["image"]["tmp_name"];
    $target="./public/theme/img/";
    $res = move_uploaded_file($path,$target.$name);
    if($res){
        $fileUrl=$target.$name;
        
    }
}
if(!isset($_SESSION['first-name-error']) && !isset($_SESSION['last-name-error']) && !isset($_SESSION['email-error']) && !isset($_SESSION['password-error']) && $validateFlag){
    $_SESSION["first-name"]=$_POST["first-name"];
    $_SESSION["last-name"]=$_POST["last-name"];
    $_SESSION["email"]=$_POST["email"];
    $_SESSION["password"]=$_POST["password"];
    $_SESSION["age"]=$_POST["age"];
    $_SESSION["gender"]=$_POST["gender"];
    $_SESSION["image"]=$fileUrl;
    header("Location:login-handler.php");
}
// var_dump($_POST);
// echo "FILE URL IS--->".$fileUrl;
// HEADER
require __DIR__."/views/_layout/v-header.php";
// PAGE
require __DIR__."/views/v-login-register.php";
// FOOTER
require __DIR__."/views/_layout/v-footer.php";

unset($_SESSION['first-name-error']);
unset($_SESSION['last-name-error']);
unset($_SESSION['email-error']);
unset($_SESSION['password-error']);
?>