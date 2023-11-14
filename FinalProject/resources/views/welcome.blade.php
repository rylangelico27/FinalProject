<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Bootstrap 5.0 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Link to the external CSS file -->
        <link rel="stylesheet" href="{{ asset('resources.css.site.css') }}">

    </head>
    <body class="antialiased" onload="formatAmount()">

        <header>
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand text-light" href="">ETech</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-light"></span>
                    </button>

                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav ms-auto d-flex justify-content-between align-items-center">
                            @if (Route::has('login'))
                                @auth
                                    <li class="navText nav-item">
                                        <a href="{{ url('/dashboard') }}" class="dropdown-item text-light font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    </li>

                                @else
                                    <li class="navText nav-item">
                                        <a href="{{ url('/login') }}" class="dropdown-item text-light">Sign In</a>
                                    </li>

                                    <li class="navText nav-item">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="dropdown-item text-light">Register</a>
                                        @endif
                                    </li>
                                @endauth
                            @endif
                        </ul>

                    </div>
                </div>
            </nav>
        </header>

        <!--  CAROUSEL  -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/Showcase/ASUS.png') }}" class="d-block w-100" alt="ASUS Brand">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ASUS</h5>
                        <p>ASUS is one of the famous brands of gaming devices.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('storage/Showcase/ASUS TUF.png') }}" class="d-block w-100" alt="ASUS TUF">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>TUF</h5>
                        <p>TUF is one of the famous categories of ASUS.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('storage/Showcase/ASUS ROG.png') }}" class="d-block w-100" alt="ASUS Republic of Gamers">
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

            <!-- PRODUCTS LIST -->
            <div class="d-flex justify-content-center m-auto my-2">

                @foreach ($products as $product)

                    <div class="onlStoProd col-sm-4 mx-3">
                        <a class="prodLink" href="">
                            <img class="my-5" src="{{ asset('storage/product_images/' . $product->product_front) }}" alt="{{$product->product_front}}" height="200px">
                        </a>
                        <a class="prodLink" href=""><h4 class="headProdName">{{$product->product_name}}</h4></a>
                        <div class="rating d-flex align-items-center">
                            <div class="d-block justify-content-between">
                                <i class="starIcon bi bi-star-fill"></i>
                                <i class="starIcon bi bi-star-fill"></i>
                                <i class="starIcon bi bi-star-fill"></i>
                                <i class="starIcon bi bi-star-fill"></i>
                                <i class="starIcon bi bi-star-half"></i>
                            </div>
                        </div>
                        <p class="paraPrice" id="product_price"> ₱ {{ number_format($product->product_price, 2) }} </p>
                    </div>

                @endforeach

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
                        <img class="my-5" src="{{ asset('storage/PaymentOptions/Logo GCash.png') }}" alt="GCash" width="70%">
                    </div>

                    <div class="col-sm-3 d-flex justify-content-center">
                        <img class="my-5" src="{{ asset('storage/PaymentOptions/Logo PayPal.png') }}" alt="PayPal" width="70%">
                    </div>

                    <div class="col-sm-3 d-flex justify-content-center">
                        <img class="my-5" src="{{ asset('storage/PaymentOptions/Logo BDO.png') }}" alt="BDO" width="60%">
                    </div>

                    <div class="col-sm-3 d-flex justify-content-center">
                        <img class="my-5" src="{{ asset('storage/PaymentOptions/Logo BPI.png') }}" alt="BPI" width="60%">
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

        {{-- {{ $products->links() }} --}}



        <script type="text/javascript">

        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
