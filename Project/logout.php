<?php
session_start();
echo "logout page";
    unset($_SESSION['logged-in']);
    unset($_SESSION['user-first-name']);
    unset($_SESSION['user-last-name']);
    unset($_SESSION['user-image']);
    header("Location:index.php");

?>