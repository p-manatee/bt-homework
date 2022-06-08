<?php 
session_start();
if(!isset($_SESSION['accept'])){
    $_SESSION['accept']=true;
}
header('Location:products.php');
?>