<!--  CAROUSEL  -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"  style="margin-top: -1px;">
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

<div class="container my-5 m-auto" id="products">
    {{-- <h2 class="prodHead">Top Selling Products</h2> --}}
    <h2 class="prodHead" id="productsList">Featured Products</h2>

    <div class="filterButt">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Filter
            <i class="filterIcon bi bi-funnel-fill"></i>
        </button>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="background-color: #ff523b;">
            <li><a href="{{ request()->routeIs('NewOld') ? '#' : route('NewOld') . '#productsList' }}" class="filterOption dropdown-item {{ request()->routeIs('NewOld') || request()->is('dashboard') ? 'disabled' : '' }}">Newest to Oldest</a></li>

            <li><a href="{{ request()->routeIs('OldNew') ? '#' : route('OldNew') . '#productsList' }}" class="filterOption dropdown-item {{ request()->routeIs('OldNew') ? 'disabled' : '' }}">Oldest to Newest</a></li>

            <li><a href="{{ request()->routeIs('LowHigh') ? '#' : route('LowHigh') . '#productsList' }}" class="filterOption dropdown-item {{ request()->routeIs('LowHigh') ? 'disabled' : '' }}">Price, Low to High</a></li>

            <li><a href="{{ request()->routeIs('HighLow') ? '#' : route('HighLow') . '#productsList' }}" class="filterOption dropdown-item {{ request()->routeIs('HighLow') ? 'disabled' : '' }}">Price, High to Low</a></li>
        </ul>

    </div>

    <!-- PRODUCTS LIST -->
    @php $i = 0; @endphp
    @foreach ($products as $product)
        @if ($i % 4 == 0)
            @if (!$loop->first)
                </div>  <!-- Close the previous div container if not the first loop -->
            @endif
            <div class="container d-flex justify-content-center my-5">   <!-- Open a new div container -->
        @endif

        <!-- Product Card Content -->
        <div class="onlStoProd card mx-2 col-md-3">
            <div class="card-body">
                <div class="text-center">
                    <a class="prodLink" href="{{ route('ViewIndividualProduct', $product->id) }}">
                        <img class="my-5 text-center" src="{{ asset('storage/product_images/' . $product->product_front) }}" alt="{{$product->product_front}}" height="180px">
                    </a>
                </div>

                <a class="prodLink" href=""><h4 class="headProdName">{{$product->product_name}}</h4></a>
                <div class="rating d-flex align-items-center">
                    <div class="d-block justify-content-between">
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-fill"></i>
                        <i class="starIcon bi bi-star-half"></i>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="">
                        <span class="paraPrice" id="product_price"> ₱{{ number_format($product->product_price, 2) }} </span>
                    </div>

                    <div class="container d-flex justify-content-end">
                        <a href="{{ auth()->check() ? '#' : route('login') }}">
                            <i class="cartWishIcon mx-3 bi bi-cart-plus"></i>
                        </a>

                        <a href="{{ auth()->check() ? '#' : route('login') }}">
                            <i class="cartWishIcon bi bi-bag-plus"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        @php $i++; @endphp  <!-- Increment counter -->

        @if ($loop->last)
            </div>  <!-- Close last div container -->
        @endif
    @endforeach
    {{-- {{ $products->links() }} --}}

</div>

<!-- PAYMENT OPTIONS -->
<div class="my-5">
    <div class="container m-auto">
        <h2 class="prodHead">Payment Options</h2>
    </div>

    <div class="container m-auto">
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
<!-- Footer section -->
<section class="footer bg-dark text-light text-center" id="contactInfo">
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

<hr class="border-white m-0">

<footer>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand text-light text-center" style="font-size: medium;">© 2023 - Ecommerce Software by ETech</a>
        </div>
    </nav>
</footer>
