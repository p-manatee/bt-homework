<!-- Main -->

<div class="container">
    <!-- Bread crumbs -->
    <div class="bread row mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-page.php">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Product</li>
                </ol>
            </nav>
        </div>
        <!-- End of Bread Crumbs -->
        <div class="row mt-5">
            <article class="single-product row mb-5">

                <div class="col-7">
                    <img src="<?php echo htmlspecialchars($oneProduct->image); ?>" class="card-img-top mb-5" alt="<?php echo htmlspecialchars($oneProduct->title); ?>">
                </div>
                <div class="col-4 px-5">
                    <div class="card-body">
                        <h1 class="card-title">
                        <?php echo htmlspecialchars($oneProduct->title); ?>
                        </h1>
                        <p class="card-text">Price: <span class="card-text-span"><?php echo htmlspecialchars($oneProduct->price); ?>$</span></p>
                        
                        <p class="card-text">Category: <?php echo strtoupper(htmlspecialchars($oneProduct->category)); ?>
                        </p>
                        <?php if(!$inCart){?>
                        <a href="add-to-cart.php?id=<?php echo htmlspecialchars($oneProduct->id);?>" class="btn-danger btn w-100">Add to Cart <i class="bi bi-cart-dash"></i></a>
                        <?php }?>
                        <?php if($inCart){?>
                         <div class="in-cart">
                            <h2>Item Already in Cart!</h2>
                            <h3>Quantity: <?php echo $quantityInCart; ?></h3>
                            <form action="add-to-cart.php" method="get" class="mt-3">
                                <input type="hidden" name="id" value="<?php echo htmlspecialchars($oneProduct->id);?>">
                                <select class="form-select" aria-label="Default select example" name="quantity">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                                <button type="submit"name="submit" class="btn btn-danger mt-3">Change Amount</button>
                            </form>
                         </div>
                         <?php } ?>   
                    </div>
                </div>
                <div class="col-12">
                    <p>
                    <?php echo htmlspecialchars($oneProduct->description); ?>
                    </p>
                </div>
                <div class="col-12 mt-3">
                    <a href="single-product-page.php?id=<?php echo htmlspecialchars($previousProductId);?>" class="btn btn-dark">&lt;&lt;&nbsp; Previous</a>
                    <a href="single-product-page.php?id=<?php echo htmlspecialchars($nextPRoductId);?>" class="btn btn-dark mx-3">Next &nbsp;&gt;&gt; </a>
                </div>
                <div class="row mt-5">
                    <h2 class="text-center col-12 mb-5">Related products</h2>
                    <?php foreach ($relatedProducts as $relatedProduct) {
                       
                    ?>                    
                    <div class="col-4 px-3">
                        <div class="product card h-100">
                            <img src="<?php echo htmlspecialchars($relatedProduct->image); ?>" class="card-img-top" alt="shoe">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">
                                <?php echo htmlspecialchars($relatedProduct->title); ?>
                                </h5>
                                <a href="single-product-page.php?id=<?php echo htmlspecialchars($relatedProduct->id);?>" class="bottom-5 btn btn-dark mt-auto align-self-end w-100">Show</a>
                            </div>

                        </div>
                    </div>
                    <?php } ?>

                </div>

            </article>
        </div>
    </div>
    <!-- End of Main -->