<?php include 'home/layout/head.php'?>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap">
        <img src="./assets/img/logo.jpg" width="70px" height="70px" class="img-thumbnail rounded-circle">
        </a>
            <h class="navbar-brand text-white h2 mt-0 mb-1" href="index.html">
                  Dreg Skateshop
            </h>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.html">About we</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search "></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-white mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-white mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-white mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/park.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/park2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/product_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left text-danger"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="bg-black">
    <div class="container py-5 ">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
            <h1 class="h1 text-danger"><b>Category Product</b></h1>
                <p class="h3 text-white">
                    Category Product Hit !!!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/product_1.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3 text-white">Skate</h5>
                <p class="text-center"><a class="btn btn-danger">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/product/Safety/safe_1.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3 text-white">Safety</h2>
                <p class="text-center"><a class="btn btn-danger">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/product/fashion/shirt_1.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3 text-white">Fashion</h2>
                <p class="text-center"><a class="btn btn-danger">Go Shop</a></p>
            </div>
        </div>
    </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start News -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-lg-6 ">
                    <h1 class="h1 text-danger"><b>News</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/new/new1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-black">                        
                            <a href="shop-single.html" class="h2 text-decoration-none text-white">Discount All Product 10%</a>
                            <p class="card-text text-white">
                                Happy go skateborad day We would like to give Promotion 10% discount on all products sold everywhere in online stores and stores.
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/new/new2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-black">
                            <a href="shop-single.html" class="h2 text-decoration-none text-white">Special offer for lockdown</a>
                            <p class="card-text text-white">
                                Dreg Skate shop offers a Promotion 10% Discount on all Product sold for Lockdown.
                            </p>
                            <p class="text-muted">Reviews (52)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/new/new3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body bg-black">
                            <a href="shop-single.html" class="h2 text-decoration-none text-white">Sign up for free, Get a DG Blackcard</a>
                            <p class="card-text text-white">
                                Sing up for free, get a DG Blackcard jusy by Scanning the QR code, Every 100 Baht equal to 1 Point, 100 Point equal to 200 Baht.
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-danger border-bottom pb-3 border-light logo">Dreg Skate Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: auto; Width: auto">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15495.39686619021!2d100.475284!3d13.848088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd259ae6248bde850!2sDreg%20skatepark!5e0!3m2!1sth!2sth!4v1629392571909!5m2!1sth!2sth" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            RoadBang sri Mueang Bang Si Mueang Mueang Nonthaburi Nonthaburi 11000
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">083-541-3212</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">dregskateboard@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Deck</a></li>
                        <li><a class="text-decoration-none" href="#">Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">T-Shirts</a></li>
                        <li><a class="text-decoration-none" href="#">Complete-Skateboards</a></li>
                        <li><a class="text-decoration-none" href="#">Trucks</a></li>
                        <li><a class="text-decoration-none" href="#">Wheels</a></li>
                        <li><a class="text-decoration-none" href="#">Grip Tape</a></li>
                        <li><a class="text-decoration-none" href="#">Hardware</a></li>
                        <li><a class="text-decoration-none" href="#">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/DREGskateshop.Park/?ref=page_internal"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/dreg_shop/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">      
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>