<!-- Main -->
    <div class="container">
        <form class="row mt-5" action="./products-page.php" method="GET">
            <div class="col-3">
                <select name="sort-by" class="px-2 w-100 height-40">
                    <option value="">None</option>
                    <option value="<?php echo ORDER_BY_PRICE_ASC; ?>">By price asc</option>
                    <option value="<?php echo ORDER_BY_PRICE_DSC; ?>">By price desc</option>
                </select>
            </div>

            <div class="col-7">
                <input class="px-2 w-100 height-40" type="text" name="search-term">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-info px-2 w-100 height-40">Search</button>
            </div>

        </form>
        <div class="row mt-5">
            <?php 
                foreach ($availableproducts as $product) {
                    
                
            ?>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['brand']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h5>
                        <p class="card-text">Price: <span class="card-text-span"><?php echo htmlspecialchars($product['price']); ?>$</span></p>
                        <a href="./single-product-page.php?id=<?php echo htmlspecialchars($product['id']); ?>" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
            <?php } ?>    
        </div>
    </div>
    <!-- End of Main -->