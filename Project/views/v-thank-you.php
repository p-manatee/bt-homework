<main class="mt-5 mb-5">
        <div class="container">
            <div class="row text-center mt-5">
            <h1 class="mt-5">Thank you!</h1>
            <h2 class="mt-5">you have just bought these items:</h2> 
            <div class="card-body" class="mt-5">
                    <table class="table w-100">
                    <thead>
                        <tr>
                            
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            
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
                            
                            <td>
                            <img class="cart-img" src="<?php echo htmlspecialchars($product->image);?>" alt="<?php echo htmlspecialchars($product->title);?>">    
                            <?php echo htmlspecialchars($product->title);?>
                            </td>
                            <td>
                            <?php echo htmlspecialchars($product->price);?>$
                            </td>
                            <td>
                            <?php echo $quantity;?>
                            </td>
                            <td>
                            <?php echo $subtotal;?>$
                            </td>
                            
                        </tr>
                            <?php  } ?>

                        <tr>
                            <td class="tg-0lax" colspan="3"></td>
                            <td class="tg-0lax">TOTAL</td>
                            <td class="tg-0lax">
                            <?php echo $total;?>$
                            </td>
                        </tr>
                    </tbody>
                </table>
                    </div>
            </div>
        </div>
</main>   