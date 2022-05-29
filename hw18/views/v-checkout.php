<!-- Main -->
    <div class="container">
        
        <div class="row mt-5">
            <article class="single-product row mb-5">
                <!-- MODAL SUCCESS-->
                <?php if($showSuccess){?>
                     <div class="col-12 w-100 text-center bg-success text-light p-5 position-absolute top-50 start-50 translate-middle">
                    <h2>Congratulations!You have just bought <?php echo htmlspecialchars($singleProduct[0]['title']);?></h2>
                    <p>Total price: <?php echo htmlspecialchars($singleProduct[0]['price']);?></p>
                    </div>
                <?php }?>    
                <!-- END MODAL SUCCESS-->
                <div class="col-7">
                    <form method="POST" action="./checkout-page.php?id=<?php echo htmlspecialchars($id);?>">
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
                        <img src="<?php echo htmlspecialchars($singleProduct[0]['img']);?>" class="w-100 mb-5" alt="<?php echo htmlspecialchars($singleProduct[0]['title']);?>">
                        <h1 class="card-title mb-5 text-center"><?php echo htmlspecialchars($singleProduct[0]['title']);?></h1>
                        <p class="card-text">Brand: <?php echo htmlspecialchars($singleProduct[0]['brand']);?></p>
                        <p class="card-text">Category: <?php echo htmlspecialchars($singleProduct[0]['brand']);?></p>
                        <p class="card-text">Price: <span class="card-text-span"><?php echo htmlspecialchars($singleProduct[0]['price']);?>$</span></p>
                        <p>Quantity : 1</p>
                        <p>Total: <span class="card-text-span"><?php echo htmlspecialchars($singleProduct[0]['price']);?>$</span></p>
                    </div>
                </div>



            </article>
        </div>
    </div>
    <!-- End of Main -->