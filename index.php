<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <?php
        require 'components/header.php';
    ?>
    <main>
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <div class="p-2 mt-2 quick-menu bg-info w-100">
                            <h4>Quick Menu</h4>
                        </div>

                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Mobile Phones
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <a href="">
                                                <li>Nokia Phones</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Samsung Phones</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Tecno Phones</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li> IPhones</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Phone Accessories
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <a href="">
                                                <li>Cables</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Phone Cases</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Screen Protectors</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Chargers</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Cameras
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <a href="">
                                                <li>Nixon Cameras</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Sony Cameras</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Canon Cameras</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Panasonic Cameras</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Camera Accesories
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <a href="">
                                                <li>Camera Bags</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Tripod</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Tripod Heads</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Lenses</li>
                                            </a>
                                        </ul>
                                        <ul>
                                            <a href="">
                                                <li>Batteries</li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-md-9 p-lg-0 p-0">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/carousel.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/carousel.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/carousel.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="jumbotron jumbotron-fluid w-100 mb-0">
                <div class="container promo_section">
                    <h1 class="display-4">Promo Sales</h1>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/airpod1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/airpod1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/airpod1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>


    </main>

    <?php
  require 'components/footer.php'

?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>