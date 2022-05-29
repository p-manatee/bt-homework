<!-- Main -->
    <div class="container">
        <div class="row mt-5">
            <article class="single-product row mb-5">

                <div class="col-7">
                    <img src="<?php echo htmlspecialchars($singleProduct[0]['img']);?>" class="card-img-top mb-5" alt="<?php echo htmlspecialchars($singleProduct[0]['title']);?>">
                </div>
                <div class="col-4 px-5">
                    <div class="card-body">
                        <h1 class="card-title"><?php echo htmlspecialchars($singleProduct[0]['title']);?></h1>
                        <p class="card-text">Price: <span class="card-text-span"><?php echo htmlspecialchars($singleProduct[0]['price']);?>$</span></p>
                        <p class="card-text">Brand: <?php echo htmlspecialchars($singleProduct[0]['brand']);?></p>
                        <p class="card-text">Category: <?php echo htmlspecialchars($singleProduct[0]['brand']);?></p>
                        <a href="./checkout-page.php?id=<?php echo htmlspecialchars($id);?>" class="btn btn-success px-5">Buy</a>
                    </div>
                </div>
                <div class="col-12">
                    <p><?php echo htmlspecialchars($singleProduct[0]['description']);?></p>
                </div>
                <div class="col-12 mt-3">
                    <a href="./single-product-page.php?id=<?php echo htmlspecialchars(getPreviousProduct($id));?>" class="btn btn-info">&lt;&lt;&nbsp; Previous</a>
                    <a href="./single-product-page.php?id=<?php echo htmlspecialchars(getNextProduct($id));?>" class="btn btn-info mx-3">Next &nbsp;&gt;&gt; </a>
                </div>
                <div class="row mt-5">
                    <h2 class="text-center col-12 mb-5">Related products</h2>
                    <?php foreach ($relatedProducts as $relatedProduct) {
                       
                    ?>
                    <div class="col-4 px-3">
                        <div class="product card h-100">
                            <img src="<?php echo htmlspecialchars($relatedProduct['img']);?>" class="card-img-top" alt="shoe">
                            <h5 class="card-title text-center"><?php echo htmlspecialchars($relatedProduct['title']);?></h5>
                            <a href="./single-product-page.php?id=<?php echo htmlspecialchars($relatedProduct['id']);?>" class="bottom-5 btn btn-primary ">Show</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </article>
        </div>
    </div>
    <!-- End of Main -->