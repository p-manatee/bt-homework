<!-- Main -->
<div class="container">
           <!-- Bread crumbs -->
           <div class="bread row mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-page.php">Shop</a></li>
                    <li class="breadcrumb-item"><a href="cart-page.php">Shopping Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </nav>
        </div>
        <!-- End of Bread Crumbs -->
        <div class="row mt-5">
            <article class="single-product row mb-5">
              
                <div class="col-7">
                    <form method="POST" action="checkout-page.php">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first-name" aria-describedby="nameHelp" name="first-name">
                            <?php if($validateFlag && isset($validateFirstName['NameError'])){?>
                            <div id="nameHelp" class="form-text text-danger"><?php echo htmlspecialchars($validateFirstName['NameError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name" aria-describedby="nameHelp" name="last-name">
                            <?php if($validateFlag && isset($validateLastName['LastNameError'])){?>
                            <div id="nameHelp" class="form-text text-danger"><?php echo htmlspecialchars($validateLastName['LastNameError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <?php if($validateFlag && isset($validateEmail['EmailError'])){?>
                            <div id="emailHelp" class="form-text text-danger"><?php echo htmlspecialchars($validateEmail['EmailError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" aria-describedby="cityHelp" name="city">
                            <?php if($validateFlag && isset($validateCity['CityError'])){?>
                            <div id="cityHelp" class="form-text text-danger"><?php echo htmlspecialchars($validateCity['CityError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone">
                            <?php if($validateFlag && isset($validatePhone['PhoneError'])){?>
                            <div id="phoneHelp" class="form-text text-danger"><?php echo htmlspecialchars($validatePhone['PhoneError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="street" class="form-label">Street and number</label>
                            <input type="text" class="form-control" id="street" aria-describedby="streetHelp" name="street">
                            <?php if($validateFlag && isset($validateStreet['StreetError'])){?>
                            <div id="streetHelp" class="form-text text-danger"><?php echo htmlspecialchars($validateStreet['StreetError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" aria-describedby="zipHelp" name="zip">
                            <?php if($validateFlag && isset($validateZip['ZipError'])){?>
                            <div id="zipHelp" class="form-text text-danger"><?php echo htmlspecialchars($validateZip['ZipError']); ?></div>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" aria-describedby="commentHelp" style="height: 180px" name="comment"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="check" name="check">
                            <label class="form-check-label" for="check" aria-describedby="checkHelp">Agree with our policy</label>
                            <?php if($validateFlag && isset($validatePolicy['PolicyError'])){?>
                            <div id="checkHelp" class="form-text text-danger"><?php echo htmlspecialchars($validatePolicy['PolicyError']); ?></div>
                            <?php } ?>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success px-5">Buy</button>
                    </form>
                </div>
                <div class="col-4 px-5">
                    <div class="card-body">
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



            </article>
        </div>
    </div>
    <!-- End of Main -->