<?php
session_start();
$show= true;
if(isset($_SESSION['accept'])){
    if($_SESSION['accept']==true){
        $show= false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Modal i Session</title>
</head>

<body>
    
    <!-- MODAL -->
    <?php if($show){ ?>
    <div class="modal show-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Privacy Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Accept all Cookies</p>
      </div>
      <div class="modal-footer">
        <a href="accept.php" type="button" class="btn btn-primary">Save changes</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
    <!-- END OF MODAL -->
    <div class="container">
        <div class="row mt-5">
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="shoe.jpg" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>
                        <p class="card-text">Price: <span class="card-text-span">300$</span></p>
                        <a href="#" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="shoe.jpg" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>
                        <p class="card-text">Price: <span class="card-text-span">300$</span></p>
                        <a href="#" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="shoe.jpg" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>
                        <p class="card-text">Price: <span class="card-text-span">300$</span></p>
                        <a href="#" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="shoe.jpg" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>
                        <p class="card-text">Price: <span class="card-text-span">300$</span></p>
                        <a href="#" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="shoe.jpg" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>
                        <p class="card-text">Price: <span class="card-text-span">300$</span></p>
                        <a href="#" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
            <article class="single-product col-4 mb-5">
                <div class="product card h-100">
                    <img src="shoe.jpg" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h5 class="card-title">Shoe</h5>
                        <p class="card-text">Price: <span class="card-text-span">300$</span></p>
                        <a href="#" class="btn btn-primary">Show</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <script src="bootstrap.min.js"></script>
</body>

</html>