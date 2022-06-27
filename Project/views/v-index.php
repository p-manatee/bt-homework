<!-- Main -->
<div class="container">
        <!-- Bread crumbs -->
        <div class="bread row mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
        <!-- End of Bread Crumbs -->
        <div class="row  mt-3">
            <!-- carousel -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./public/theme/img/pioneer.jpg" class="d-block w-100 h-100" alt="test">
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/theme/img/denon.png" class="d-block w-100 h-100" alt="test">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/theme/img/numark.jpg" class="d-block w-100 h-100" alt="test">
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/theme/img/serato.png" class="d-block w-100 h-100" alt="test">
                        <div class="carousel-caption d-none d-md-block">
                         
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./public/theme/img/rekordbox.jpg" class="d-block w-100 h-100" alt="test">
                        <div class="carousel-caption d-none d-md-block">
                          
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- end of carousel -->
            <!-- Most popular products -->
            <section class="row popular-products mt-5 mb-5">
                <hr class="style-two mb-5">
                <h2 class="mb-5 text-center">Popular Products</h2>
                <?php foreach ($popularProducts as $popularProduct) {
                   
                ?>
                <div class="card custom-card mb-5" style="width: 18rem;">
                    <img src="<?php echo htmlspecialchars($popularProduct->getImage());?>" class="card-img-top mt-3" alt="<?php echo htmlspecialchars($popularProduct->getTitle());?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mt-auto align-self-end"><?php echo htmlspecialchars($popularProduct->getTitle());?></h5>
                        <p class="card-text mt-auto align-self-end"><?php echo htmlspecialchars(substr($popularProduct->getDescription(),0,100))."...";?></p>
                        <div class="buttons mt-auto align-self-end">
                            <a href="single-product-page.php?id=<?php echo htmlspecialchars($popularProduct->getId());?>" class="btn btn-dark">View</a>
                            <a href="add-to-cart.php?id=<?php echo htmlspecialchars($popularProduct->getId());?>" class="btn btn-danger"><i class="bi bi-cart-dash"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </section>
            <!-- end of Most popular products -->
            <!-- Our Friends -->
            <section class="row our-friends mt-5 mb-5">
                <hr class="style-two mb-5">
                <h2 class="mb-5 text-center">Our friends</h2>
                <div class="friend col-2"><img src="./public/theme/img/pioneer-friend.jpg" alt="friend"></div>
                <div class="friend col-2"><img src="./public/theme/img/vestax-logo.png" alt="friend"></div>
                <div class="friend col-2"><img src="./public/theme/img/serato-friend.png" alt="friend"></div>
                <div class="friend col-2"><img src="./public/theme/img/denon-friend.jpg" alt="friend"></div>
                <div class="friend col-2"><img src="./public/theme/img/numark-friend.png" alt="friend"></div>
                <div class="friend col-2"><img src="./public/theme/img/dj-mag-friend.jpeg" alt="friend"></div>
                <div class="both"></div>
            </section>
            <!-- Our Friends -->
        </div>
    </div>
    <!-- Edn of Main -->