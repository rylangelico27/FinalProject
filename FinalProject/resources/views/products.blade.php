<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="adminCMS.css"> -->

    <!-- BOOTSTRAP v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand text-light" asp-area="" asp-page="/Products">ETech</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto d-flex justify-content-between align-items-center">
                        <li class="navText nav-item">
                            <a class="signOutButt dropdown-item text-light" asp-area="" asp-page="/Index">Sign Out</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- SHOWCASE -->
    <section class="showcaseBG bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container" style="width: auto; height: 925px; padding-top: 10%;">
            <!-- Flex Box -->
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>ETech, <span class="text-warning">an E-Commerce software</span></h1>
                    <h4 class="my-3">The Online Shop for your Online Needs</h4>
                    <p class="lead my-5"><em><small>We devote out passion in ASUS brands for laptops. This is an online store exclusively for ASUS laptops.</small></em></p>
                    <a href="#products"><button class="btn btn-primary btn-lg">View Products &#8594;</button></a>
                        
                </div>
            </div>
        </div>
    </section>

    <!--  CAROUSEL  -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="~/images/Showcase/ASUS.png" class="d-block w-100" alt="ASUS Brand">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ASUS</h5>
                    <p>ASUS is one of the famous brands of gaming devices.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="~/images/Showcase/ASUS TUF.png" class="d-block w-100" alt="ASUS TUF">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TUF</h5>
                    <p>TUF is one of the famous categories of ASUS.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="~/images/Showcase/ASUS ROG.png" class="d-block w-100" alt="ASUS Republic of Gamers">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ROG</h5>
                    <p>Republic of Gamers (ROG) is one of the famous categories of ASUS.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- PRODUCTS -->
    <div class="smallContainer my-5 m-auto" id="products">
        <h2 class="prodHead">Top Selling Products</h2>

        <div class="filterButt container col-xs-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
                <i class="filterIcon bi bi-funnel-fill"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="background-color: #ff523b;">
                <li><a class="filterOption dropdown-item">Price, Low to High</a></li>
                <li><a class="filterOption dropdown-item" asp-area="" asp-page="/">Price, High to Low</a></li>
            </ul>
        </div>

        <div class="d-flex justify-content-center m-auto my-2">

    <!--  Product 1  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_1">
                    <img class="my-5" src="~/images/Products/ASUS TUF DASH F15 TUF516PE-AB73 (Front).jpg" alt="ASUS TUF DASH F15 TUF516PE-AB73" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_1"><h4 class="headProdName">ASUS TUF DASH F15 TUF516PE-AB73</h4></a>
                <div class="rating d-flex align-items-center">
                    <div class="d-block justify-content-between">
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-half"></i>
                    </div>
                </div>
                <p class="paraPrice">₱61,900</p>
            </div>

    <!--  Product 2  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_2">
                    <img class="my-5" src="~/images/Products/ASUS ROG STRIX G15 G513IC-EB73 (Front).jpg" alt="ASUS ROG STRIX G15 G513IC-EB73" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_2"><h4 class="headProdName">ASUS ROG STRIX G15 G513IC-EB73</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱62,900</p>
            </div>

    <!--  Product 3  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_3">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus G14 GA401IH (Front).jpg" alt="ASUS ROG Zephyrus G14 GA401IH" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_3"><h4 class="headProdName">ASUS ROG Zephyrus G14 GA401IH</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                    <i class="starIcon bi bi-star"></i>
                </div>
                <p class="paraPrice">₱64,900</p>
            </div>

    <!--  Product 4  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_4">
                    <img class="my-5" src="~/images/Products/ASUS TUF F17 FX706HE (Front).jpg" alt="ASUS TUF F17 FX706HE" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_4"><h4 class="headProdName">ASUS TUF F17 FX706HE</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                </div>
                <p class="paraPrice">₱64,900</p>
            </div>
        </div>


        <div class="d-flex justify-content-center m-auto my-2">

    <!--  Product 5  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_5">
                    <img class="my-5" src="~/images/Products/ASUS TUF F15 TUF506HE-DS74 (Front).jpg" alt="ASUS TUF F15 TUF506HE-DS74" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_5"><h4 class="headProdName">ASUS TUF F15 TUF506HE-DS74</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱71,900</p>
            </div>

    <!--  Product 6  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_6">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus G15 GA502IU-ES76 (Front).jpg" alt="ASUS ROG Zephyrus G15 GA502IU-ES76" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_6"><h4 class="headProdName">ASUS ROG Zephyrus G15 GA502IU-ES76</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱75,900</p>
            </div>

    <!--  Product 7  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_7">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus M16 GU603HE (Front).jpg" alt="ASUS ROG Zephyrus M16 GU603HE" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_7"><h4 class="headProdName">ASUS ROG Zephyrus M16 GU603HE</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star"></i>
                </div>
                <p class="paraPrice">₱89,900</p>
            </div>

    <!--  Product 8  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_8">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus G14 GA401QM (Front).jpg" alt="ASUS ROG Zephyrus G14 GA401QM" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_8"><h4 class="headProdName">ASUS ROG Zephyrus G14 GA401QM</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                    <i class="starIcon bi bi-star"></i>
                </div>
                <p class="paraPrice">₱94,900</p>
            </div>
        </div>

        <div class="d-flex justify-content-center m-auto my-2">

    <!--  Product 9  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_9">
                    <img class="my-5" src="~/images/Products/ASUS ROG X13 GV301QE (Front).jpg" alt="ASUS ROG X13 GV301QE" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_9"><h4 class="headProdName">ASUS ROG X13 GV301QE</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                </div>
                <p class="paraPrice">₱94,900</p>
            </div>

    <!--  Product 10  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_10">
                    <img class="my-5" src="~/images/Products/ASUS ROG Strix G15 G513QY (Front).jpg" alt="ASUS ROG Strix G15 G513QY" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_10"><h4 class="headProdName">ASUS ROG Strix G15 G513QY</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱109,900</p>
            </div>

    <!--  Product 11  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_11">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus G15 GA503QR (Front).jpg" alt="ASUS ROG Zephyrus G15 GA503QR" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_11"><h4 class="headProdName">ASUS ROG Zephyrus G15 GA503QR</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱117,900</p>
            </div>

    <!--  Product 12  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_12">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus S17 GX703HM-DB76 (Front).jpg" alt="ASUS ROG Zephyrus S17 GX703HM-DB76" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_12"><h4 class="headProdName">ASUS ROG Zephyrus S17 GX703HM-DB76</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                </div>
                <p class="paraPrice">₱127,900</p>
            </div>
        </div>

        <div class="d-flex justify-content-center m-auto my-2">

    <!--  Product 13  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_13">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus Duo 15 SE GX551QM-ES76 (Front).jpg" alt="ASUS ROG Zephyrus Duo 15 SE GX551QM-ES76" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_13"><h4 class="headProdName">ASUS ROG Zephyrus Duo 15 SE GX551QM-ES76</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱129,900</p>
            </div>

    <!--  Product 14  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_14">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus G15 GA503QS-XS98Q-WH (Front).jpg" alt="ASUS ROG Zephyrus G15 GA503QS-XS98Q-WH" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_14"><h4 class="headProdName">ASUS ROG Zephyrus G15 GA503QS-XS98Q-WH</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                </div>
                <p class="paraPrice">₱149,900</p>
            </div>

    <!--  Product 15  -->
            <div class="onlStoProd col-sm-4 mx-3">
                <a class="prodLink" asp-area="" asp-page="/Products_15">
                    <img class="my-5" src="~/images/Products/ASUS ROG Zephyrus S17 GX703HS-XB99 (Front).jpg" alt="ASUS ROG Zephyrus S17 GX703HS-XB99" height="200px">
                </a>
                <a class="prodLink" asp-area="" asp-page="/Products_15"><h4 class="headProdName">ASUS ROG Zephyrus S17 GX703HS-XB99</h4></a>
                <div class="rating">
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-fill"></i>
                    <i class="starIcon bi bi-star-half"></i>
                </div>
                <p class="paraPrice">₱210,900</p>
            </div>
        </div>
    </div>



    <!-- PAYMENT OPTIONS -->
    <div class="my-5">
        <div class="smallContainer m-auto">
            <h2 class="prodHead">Payment Options</h2>
        </div>

        <div class="smallContainer m-auto">
            <div class="row d-flex align-items-center">
                <div class="col-sm-3 d-flex justify-content-center">
                    <img class="my-5" src="~/images/Payment Options/Logo GCash.png" alt="GCash" width="70%">
                </div>

                <div class="col-sm-3 d-flex justify-content-center">
                    <img class="my-5" src="~/images/Payment Options/Logo PayPal.png" alt="PayPal" width="70%">
                </div>

                <div class="col-sm-3 d-flex justify-content-center">
                    <img class="my-5" src="~/images/Payment Options/Logo BDO.png" alt="BDO" width="60%">
                </div>

                <div class="col-sm-3 d-flex justify-content-center">
                    <img class="my-5" src="~/images/Payment Options/Logo BPI.png" alt="BPI" width="60%">
                </div>
            </div>
        </div>
    </div>




    <!-- STORE INFORMATION -->
    <section class="footerStoreInfo footer bg-dark text-light text-center" id="contactInfo">
        <div class="container">
            <br>
            <h3 class="storeFoot">Store Information</h3> <br>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 text-center align-items-center">
                    <i class="footerIcon bi bi-geo-alt"></i> <br><br>
                    <p>
                        3F RBM Building <br>
                        2256 Rizal Avenue cor. <br>
                        Laguna St Santa Cruz <br>
                        Manila, Metro Manila, PH 1104
                    </p>
                </div>

                <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 text-center align-items-center">
                    <i class="footerIcon bi bi-telephone"></i> <br><br>
                    <p>(632) 475-0000</p>
                </div>

                <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 text-center align-items-center">
                    <i class="footerIcon bi bi-envelope"></i> <br><br>
                    <p>etechsupport@gmail.com</p>
                </div>

                <div class="col-sm-8 col-md-6 col-lg-4 col-xl-3 text-center align-items-center">
                    <h5>Follow US!</h5> <br>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-6 col-md-3 col-lg-4 text-center align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Facebook <i class="footerIcon bi bi-facebook"></i></p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" style="background-color: #ff523b;">
                                    <li><a class="socMedButt dropdown-item">www.facebook.com/etech-store</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-4 text-center align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Instagram <i class="footerIcon bi bi-instagram"></i></p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" style="background-color: #ff523b;">
                                    <li><a class="socMedButt dropdown-item">etechstore.mnl</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-4 text-center align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                    <p>Twitter <i class="footerIcon bi bi-twitter"></i></p>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" style="background-color: #ff523b;">
                                    <li><a class="socMedButt dropdown-item">etechstore</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOTSTRAP v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
       
</body>
</html>