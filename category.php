<?php
  require 'components/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/category.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">CATEGORY</h1>
        <p class="lead text-muted mb-0">Welcome to Dominion Phones and Phone Accessories Online Store. </p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="category.php">Mobile Phones</a></li>
                    <li class="list-group-item"><a href="category.php">Phone Accessories</a></li>
                    <li class="list-group-item"><a href="category.php">Cameras</a></li>
                    <li class="list-group-item"><a href="category.php">Camera Accessories</a></li>
                </ul>
            </div>
            
        </div>
        <div class="col">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/airpod1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.php" title="View Product">Airpod</a></h4>
                            <p class="card-text">Original Apple Airpod</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block"># 2000</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/applewatch.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Apple Watch</a></h4>
                            <p class="card-text">Original Apple Watch</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block"># 5000</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/case1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="product.html" title="View Product">Phone</a></h4>
                            <p class="card-text">Original Phone Case</p>
                            <div class="row">
                                <div class="col">
                                    <p class="btn btn-danger btn-block"># 1000</p>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</div>

<?php
  require 'components/footer.php'

?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>