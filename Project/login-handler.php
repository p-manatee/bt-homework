<?php
session_start();
require_once 'models/User.php';
require_once 'models/Database.php';
$firstName = $_SESSION["first-name"];
$lastName = $_SESSION["last-name"];
$email= $_SESSION["email"];
$password =  $_SESSION["password"];
$age = ($_SESSION["age"]=="") ? NULL : $_SESSION["age"];
$gender = ($_SESSION["gender"]=="") ? NULL: $_SESSION["gender"] ;
$image = ($_SESSION["image"]=="") ? NULL : $_SESSION["image"];


// To do
$insertUser = User:: insertUser($firstName,$lastName,$email,$password,$age,$gender,$image);
// var_dump ($insertUser);

if($insertUser){
    // echo $insertUser->first_name;
    $_SESSION['logged-in']=true;
    $_SESSION['user-first-name']=$insertUser->first_name;
    $_SESSION['user-last-name']=$insertUser->last_name;
    $_SESSION['user-image']=$insertUser->image;
}

// UNSETTING SESSIONS
unset ($_SESSION["first-name"]);
unset ($_SESSION["last-name"]);
unset ($_SESSION["email"]);
unset ($_SESSION["password"]);
unset ($_SESSION["age"]);
unset ($_SESSION["gender"]);
unset ($_SESSION["image"]);
header("Location:index.php");
