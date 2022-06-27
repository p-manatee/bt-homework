<!-- Main -->
<div class="container">
        <!-- Bread crumbs -->
        <div class="bread row mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div>
        <!-- End of Bread Crumbs -->
        <form class="row mt-5" action="shop-page.php" method="GET">
            <div class="col-3">
                <select name="sort-by" class="px-2 w-100 height-40">
                    <option value="">None</option>
                    <option value="<?php echo ORDER_BY_PRICE_ASC; ?>"<?php if($orderBy=="price-asc"){echo " selected";}?>>By price asc</option>
                    <option value="<?php echo ORDER_BY_PRICE_DSC; ?>"<?php if($orderBy=="price-desc"){echo " selected";}?>>By price desc</option>
                </select>
            </div>

            <div class="col-7">
                <input class="px-2 w-100 height-40" type="text" name="search-term" <?php if($searchTerm!=""){echo "value='$searchTerm'";} ?>>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary px-2 w-100 height-40" >Search</button>
            </div>

        </form>
        <div class="row mt-5">
         <?php foreach ($allProducts["products"] as $product) {
           
          ?>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="<?php echo htmlspecialchars($product->getImage());?>" class="card-img-top" alt="shoe">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mt-auto align-self-end text-center w-100">
                        <?php echo htmlspecialchars($product->getTitle());?>
                        </h5>
                        <p class="mt-auto align-self-end"><?php echo htmlspecialchars(substr($product->getDescription(),0,100))."...";?></p>
                        <p class="card-text mt-auto align-self-end">Price: <span class="card-text-span"><?php echo htmlspecialchars($product->getPrice());?>$</span></p>
                        <div class="buttons mt-auto align-self-end">
                            <a href="single-product-page.php?id=<?php echo htmlspecialchars($product->getId());?>" class="btn btn-dark">View</a>
                            <a href="add-to-cart.php?id=<?php echo htmlspecialchars($product->getId()); ?>" class="btn-danger btn"><i class="bi bi-cart-dash"></i></a>
                        </div>
                    </div>
                </div>
            </article>

            <?php   } ?>
        </div>
        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php for($i=1;$i<=$NumberOfPages;$i++){ ?>
                        <li class="page-item <?php if($i==$currentPageNum){echo "active";} ?>"><a class="page-link" href="shop-page.php?page=<?php echo $i;?>&sort-by=<?php echo $orderBy;?>&search-term=<?php echo $searchTerm;?>"><?php echo $i;?></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End of Pagination -->
    </div>
    <!-- End of Main -->