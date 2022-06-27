
<!-- Main -->
<div class="container d-flex flex-column justify-content-center align-items-center">
           <!-- Bread crumbs -->
           <div class="bread row mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop-page.php">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Log In/Register</li>
                </ol>
            </nav>
        </div>
        <!-- End of Bread Crumbs -->
        <div class="row mt-5">
            <article class="single-product row mb-5">
                <h2 class="mb-5">Register Here</h2>
                <div>
                    <form method="POST" action="" class="col-12" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name<span class="form-text text-danger"> *required<span></label>
                            <input type="text" class="form-control" id="first-name" aria-describedby="nameHelp" name="first-name">
                            <?php if(isset($_SESSION['first-name-error'])){?>
                            <div id="nameHelp" class="form-text text-danger"><?php echo $_SESSION['first-name-error']; ?></div>
                            <?php }?>
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Name<span class="form-text text-danger"> *required<span></label>
                            <input type="text" class="form-control" id="last-name" aria-describedby="nameHelp" name="last-name">
                            <?php if(isset($_SESSION['last-name-error'])){?>
                            <div id="nameHelp" class="form-text text-danger"><?php echo $_SESSION['last-name-error']; ?></div>
                            <?php }?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email<span class="form-text text-danger"> *required<span></label>
                            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                            <?php if(isset($_SESSION['email-error'])){?>
                            <div id="emailHelp" class="form-text text-danger"><?php echo $_SESSION['email-error']; ?></div>
                            <?php }?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password<span class="form-text text-danger"> *required<span></label>
                            <input type="text" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
                            <?php if(isset($_SESSION['password-error'])){?>
                            <div id="passwordHelp" class="form-text text-danger"><?php echo $_SESSION['password-error']; ?></div>
                            <?php }?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputAge" class="form-label">Age</label>
                            <input type="text" class="form-control" id="exampleInputAge" aria-describedby="passwordHelp" name="age">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputGender" class="form-label">Gender</label>
                            <select  id="exampleInputGender" class="form-control"  name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success px-5">Register</button>
                    </form>
                </div>
                



            </article>
        </div>
    </div>
    <!-- End of Main -->
