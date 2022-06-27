<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/theme/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Project shop</title>
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a href="#"><img class="navbar-brand custom-logo" src="./public/theme/img/logo.png"></img>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" class="center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 custom-navbar">
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link <?php if($current_page=="index"){echo "custom-active";} ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link <?php if($current_page=="shop"){echo "custom-active";} ?>" href="shop-page.php">Shop</a>
                        </li>

                        </li>
                        <li class="nav-item custom-nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="login">
            <?php if(!isset($_SESSION['logged-in'])){?>
            <a class="login-link" href="login-register-page.php">log in</a>
            <?php } ?>
            <?php if(isset($_SESSION['logged-in'])){?>
            <a href="#">
                <div class="login-link login-profile">
                    <p>My profile</p>
                    <img src="<?php echo $_SESSION['user-image'];?>" alt="profile photo">
                    <div class="both"></div>
                </div>
            </a>
            <a class="login-link" href="logout.php">Logout</a>
            <?php }?>
            <div class="both"></div>
        </div>
        <a href="cart-page.php">
            <div class="cart"><img src="./public/theme/img/cart.jpg" alt="cart-logo"><?php 
                if(isset($_SESSION['cart-items']) && !empty($_SESSION['cart-items'])){
                    echo "<span>";
                    echo count($_SESSION['cart-items']);
                    echo "</span>";
                }
            ?></div>
        </a>
    </header>
    <!-- End of Navigation -->