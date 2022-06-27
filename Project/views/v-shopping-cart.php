<!-- Main -->
<h1 class="text-center mt-5">Shopping cart</h1>
    <p class="text-center mt-5">Check your items before proceeding</p>
    <main class="mt-5 mb-5">
        <div class="container">
            <!-- Bread crumbs -->
         <div class="bread row mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-page.php">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </nav>
        </div>
        <!-- End of Bread Crumbs -->
            <form action="remove-from-cart.php" method="post" class="m-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">remove</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Change Amount</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <?php 
                            $total=0;
                            foreach ($cartItems as $cartItem) {
                                $product = Product::getProductById($cartItem["product"]);
                                $quantity = $cartItem["quantity"];
                                $subtotal = $quantity*$product->price;
                                $total+=$subtotal;
                            
                            ?>
                            <td><input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($product->id);?>"></td>
                            <td>
                                <a class="btn btn-primary btn-sm" style="background-color: #b52f1d;" href="remove-from-cart.php?id=<?php echo htmlspecialchars($product->id);?>" role="button"><i class="bi bi-x"></i></a>
                            </td>
                            <td>
                            <img class="cart-img" src="<?php echo htmlspecialchars($product->image);?>" alt="<?php echo htmlspecialchars($product->title);?>">    
                            <?php echo htmlspecialchars($product->title);?>
                            </td>
                            <td>
                            <?php echo htmlspecialchars($product->price);?> $
                            </td>
                            <td>
                            <?php echo $quantity;?>
                            </td>
                            <td>
                            <?php echo $subtotal;?> $
                            </td>
                            <td>
                            <div class="add-remove">
                                <a class="btn btn-danger <?php if($quantity==1) echo "disabled" ?>" href="add-to-cart.php?id=<?php echo htmlspecialchars($product->id);?>&quantity=<?php echo $quantity-1?>">- 1</a>
                                <a class="btn btn-success" href="add-to-cart.php?id=<?php echo htmlspecialchars($product->id);?>&quantity=<?php echo $quantity+1?>">+ 1</a>
                            </div>
                            </td>
                        </tr>
                            <?php  } ?>

                        <tr>
                            <td class="tg-0lax" colspan="3"></td>
                            <td class="tg-0lax">TOTAL</td>
                            <td class="tg-0lax">
                            <?php echo $total;?> $
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-5">
                    <button class="btn btn-danger m-2" type="submit">Remove Selected</button>
                    <a href="./checkout-page.php" class="btn btn-success m-2">Checkout</a>
                </div>
            </form>
        </div>
    </main>
    <!-- End of Main -->