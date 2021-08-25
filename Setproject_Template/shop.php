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
                            <a class="nav-link text-white" href="#tempaltemo_footer">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php">About we</a>
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



    <!-- Start Side Bar -->
    <section class="bg-white">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-4">
                    <h3 class="h2 text-black"><b>Type Product</b></h3>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Decks</a>
                            <a href="#" class="list-group-item list-group-item-action">Shoes</a>
                            <a href="#" class="list-group-item list-group-item-action">T-shirts</a>
                            <a href="#" class="list-group-item list-group-item-action">Complete Skateboards</a>
                            <a href="#" class="list-group-item list-group-item-action">Trucks</a>
                            <a href="#" class="list-group-item list-group-item-action">Wheels</a>
                            <a href="#" class="list-group-item list-group-item-action">Bearinds</a>
                            <a href="#" class="list-group-item list-group-item-action">Grip Tape</a>
                            <a href="#" class="list-group-item list-group-item-action">Hardware</a>
                            <a href="" class="list-group-item list-group-item-action">Accessories</a>
                            
                        </ul>
                    </div>
                </div>
    <!-- End side bar-->

    <!-- Start Shop -->
                <div class="col-md-8 ">
                <h1 class="h2 text-black text-center"><b>Shop</b></h1>
                    <div class="row py-3">
                    <h3 class="h4 text-black"><b>New Product</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/fashion/shirt_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dreg Team Shirt</h5>
                                    <p class="card-text text-center">650 Baht.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/Safety/pro_tec_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PRO-TEC Mark-Gonzales</h5>
                                    <p class="card-text text-center">1,560 Baht</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/decks/death_wish_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Death Wish White</h5>
                                    <p class="card-text text-center">1,980 Baht</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>    

                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Decks</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/skate/decks/baker_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Baker </h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/decks/dreg_deck_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Dreg Red</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/decks/preduse_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Preduce</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Shoes</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/fashion/shoes/vans_popcush_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vans Popcush</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/fashion/shoes/vans_popcush_2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vans Popcush</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/fashion/shoes/vans_popcush_3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Vans Popcush</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                        
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>T-Shirts</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Complete Skateborad</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/skate/complete_skate/baker_set1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Baker Set 1</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/complete_skate/baker_set2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Baker Set 2</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/complete_skate/creature_set1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Creature set 1</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Trucks</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/skate/trucks/theeve_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Theeve Rainbow</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/trucks/theeve_2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Theeve Silver<h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/trucks/theeve_3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Theeve Rose</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Wheels</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/skate/wheels/spitfire_classic_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Spitfire Classic</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/wheels/spitfire_conical_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Spitfire Conical</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/wheels/spitfire_radial_shave_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Spitfire Radialshave</h5>
                                    <p class="card-text text-center">price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Bearings</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="./assets/img/product/skate/bearing/bronson_bearing.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bronson</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/bearing/bronson_jaws.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bronson Jaws</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="./assets/img/product/skate/bearing/swiss_gold.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Swiss Gold</h5>
                                    <p class="card-text text-center">Price</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Grip Tape</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>hardware</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                                                            
                    <div class="row py-3">
                        <h3 class="h4 text-black"><b>Accessories</b></h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>  
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop -->



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
                        <div class="input-group-text btn-danger text-light">Subscribe</div>
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