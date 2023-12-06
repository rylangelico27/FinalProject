<!-- Link to the external CSS file -->
<link rel="stylesheet" href="{{ asset('css/site.css') }}">

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

    <div class="my-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

        @if(session('success'))
            <div id="alertMessage" class="alert alert-success d-flex align-items-center fade show" role="alert" style="height: 50px;">
                <svg class="bi flex-shrink-0 me-2 w-5" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div class="container">
                    {{session('success')}}
                </div>
            </div>
        @endif

        @if(session('info'))
            <div id="alertMessage" class="alert alert-info d-flex align-items-center fade show" role="alert" style="height: 50px;">
                <svg class="bi flex-shrink-0 me-2 w-5" role="img" aria-label="Success:"><use xlink:href="#info-fill"/></svg>
                <div class="container">
                    {{session('info')}}
                </div>
            </div>
        @endif
    </div>

    <!-- PRODUCTS LIST -->
    @php $i = 0; @endphp
    @foreach ($products as $product)
        @if ($i % 4 == 0)
            @if (!$loop->first)
                </div>  <!-- Close the previous div container if not the first loop -->
            @endif
            <div class="container d-flex justify-content-center mb-5">   <!-- Open a new div container -->
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

                <div class="d-flex align-items-center">
                    <div class="">
                        <span class="paraPrice" id="product_price"> ₱{{ number_format($product->product_price, 2) }} </span>
                    </div>

                    <div class="container d-flex justify-content-end">
                        @php
                            $productCartExisting = false;
                            $productWishExisting = false;
                            $productCartID = null;
                            $productWishID = null;
                        @endphp

                        @foreach ($carts as $cart)
                            @if ($product->id == $cart->product_id)
                                @php
                                    $productCartExisting = true;
                                    $productCartID = $cart->id;
                                    break;
                                @endphp
                            @endif
                        @endforeach

                        @if ($productCartExisting)
                            <form action="{{ route('DeleteCartWelcomeView', ['cartID' => $productCartID, 'id' => $product->id . '#productsList']) }}" method="POST">
                                @csrf
                                <button type="submit"><i class="cartWishIcon mx-3 bi bi-cart-plus-fill"></i></button>
                            </form>
                        @else
                            @auth
                                <form action="{{ route('AddToCartWelcomeView', $product->id . '#productsList') }}" method="POST">
                                    @csrf
                                    <button type="submit"><i class="cartWishIcon mx-3 bi bi-cart-plus"></i></button>
                                </form>
                            @else
                                <a href="{{ route('login') }}">
                                    <i class="cartWishIcon mx-3 bi bi-cart-plus"></i>
                                </a>
                            @endauth
                        @endif

                        @foreach ($wishlists as $wishlist)
                            @if ($product->id == $wishlist->product_id)
                                @php
                                    $productWishExisting = true;
                                    $productWishID = $wishlist->id;
                                    break;
                                @endphp
                            @endif
                        @endforeach

                        @if ($productWishExisting)
                            <form action="{{ route('DeleteWishlistWelcomeView', ['wishID' => $productWishID, 'id' => $product->id . '#productsList']) }}" method="POST">
                                @csrf
                                <button type="submit"><i class="cartWishIcon bi bi-bag-plus-fill"></i></button>
                            </form>
                        @else
                            @auth
                                <form action="{{ route('AddToWishlistWelcomeView', $product->id . '#productsList') }}" method="POST">
                                    @csrf
                                    <button type="submit"><i class="cartWishIcon bi bi-bag-plus"></i></button>
                                </form>
                            @else
                                <a href="{{ route('login') }}">
                                    <i class="cartWishIcon bi bi-bag-plus"></i>
                                </a>
                            @endauth
                        @endif
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

<script type="text/javascript">
    setTimeout(function() {
        var alertMessage = document.getElementById("alertMessage");
        alertMessage.classList.remove("show");
        alertMessage.classList.add("fade");
        // Optionally, remove the alert from the DOM after the fade-out animation
        setTimeout(function() {
            alertMessage.remove();
        }, 300); // Adjust the time based on your CSS transition duration
    }, 3000);

</script>
