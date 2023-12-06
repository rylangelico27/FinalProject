<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ETech</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        <!-- BOOTSTRAP v5.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- BOOTSTRAP ICONS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

        <!-- Link to the external CSS file -->
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    </head>
    <body class="antialiased" onload="formatAmount()">

        <header>
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-top">
                <div class="container">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a class="navbar-brand text-light" href="{{ route('dashboard') }}">
                                <img src="{{ asset('images/logo2.png') }}" style="height: 40px" class="block h-9 w-auto">
                            </a>
                        </div>
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            @if (Auth::user()->role == "admin")
                                {{-- <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Customer View') }}
                                </x-nav-link> --}}
                                <x-nav-link href="{{ route('AllProducts') }}" :active="request()->routeIs('AllProducts')" class="nav-linkO">
                                    {{ __('Products') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('ArchivedProducts') }}" :active="request()->routeIs('ArchivedProducts')" class="nav-linkO">
                                    {{ __('Archives') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('Users') }}" :active="request()->routeIs('Users')" class="nav-linkO">
                                    {{ __('Users') }}
                                </x-nav-link>
                            @endif
                        </div>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-light"></span>
                    </button>

                    <div class="navbar-collapse collapse">
                        <ul class="navbar-nav ms-auto d-flex justify-content-between align-items-center">
                            @if (Route::has('login'))
                                @auth

                                    {{--
                                    <li class="navText nav-item">
                                        <a href="{{ url('/dashboard') }}" class="dropdown-item text-light font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    </li>
                                    --}}

                                    <li class="navText nav-item">
                                        <a href="{{ route('OrderHistory') }}" class="navbarIcon text-light mx-2"><i class="bi bi-clock-history"></i></a>
                                    </li>

                                    <li class="navText nav-item">
                                        <a href="{{ route('Wishlist') }}" class="navbarIcon text-light mx-2"><i class="bi bi-bag-heart-fill"></i></a>
                                    </li>

                                    <li class="navText nav-item">
                                        <a href="{{ route('Cart') }}" class="navbarIcon text-light mx-2"><i class="bi bi-cart2"></i></a>
                                    </li>

                                @else

                                    <li class="navbarIcon nav-item">
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}" class="dropdown-item text-light mx-2"><i class="bi bi-bag-heart-fill"></i></a>
                                        @endif
                                    </li>

                                    <li class="navbarIcon nav-item">
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}" class="dropdown-item text-light mx-2"><i class="bi bi-cart2"></i></a>
                                        @endif
                                    </li>

                                    <div class="btn-group  mx-2">
                                        <a href="{{ url('/login') }}" type="button" class="text-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="navbarIcon bi bi-person-circle"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li class="">
                                                <a href="{{ url('/login') }}" type="button" class="dropdown-item">Sign In</a> <!-- text-light -->
                                            </li>

                                            <li class="">
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" type="button" class="dropdown-item">Register</a>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>

                                @endauth
                            @endif
                        </ul>

                    </div>
                </div>
            </nav>
        </header>

        {{-- CART VIEW --}}

        <div class="authorContainer m-auto">
            <h2 class="prodHead" style="margin-top:100px;">Cart</h2>
        </div>

        <div class="cartCont container">

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
                <div id="alertMessage" class="alert alert-success d-flex align-items-center fade show m-auto mb-1" role="alert" style="height: 50px;">
                    <svg class="bi flex-shrink-0 me-2 w-5" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div class="container">
                        {{session('success')}}
                    </div>
                </div>
            @endif

            <div class="card" style="margin-bottom: 10%;">
                <div class="card-body table-responsive">

                    <table class="table table-hover fs-5">
                        <thead class="align-middle">
                            <tr class="table-danger">
                                <th class="tableHeadingProd" style="width: 45%;" colspan="2">Product</th>
                                <th class="tableHeading">Product Price</th>
                                <th class="tableHeading">Quantity</th>
                                <th class="tableHeading">Action</th>
                                <th class="tableHeading">Subtotal</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider align-middle">

                            @php
                                $totalAmount = 0;
                                $shippingFee = 500;
                                $isThereRecords = 0;

                            @endphp

                            @foreach ($carts as $cart)
                                @foreach ($products as $product)
                                    @if ($product->id == $cart->product_id)

                                        <tr class="cartRow">
                                            <td class="">
                                                <img src="{{ asset('storage/product_images/' . $product->product_front) }}" alt="{{$product->product_front}}" style="width: 200px;">
                                            </td>
                                            <td style="font-size:large; font-weight: bold;"> {{ $product->product_name }} </td>

                                            @php
                                                // Format the number with currency symbol and commas
                                                $formatted_number = '₱ ' . number_format($product->product_price, 2);
                                            @endphp

                                            <td class="tdCenter"> {{ $formatted_number }} </td>

                                            <form method="POST" action="{{ route('UpdateCart', $cart->id) }}">
                                                @csrf
                                            <td>
                                                <input class="quanInput mx-3" type="number" id="product_cart_qty" name="product_cart_qty" value="{{ $cart->product_cart_qty }}" min="1" max="5" onchange="enableBtn( {{ $cart->id }} )"/>
                                            </td>

                                            <td class="tdCenter">
                                                <div class="d-flex justify-content-center">
                                                        <button class="removeToWish btn btn-danger mx-2" id="updateBtn-{{ $cart->id }}" type="submit" disabled>Update</button>
                                                    </form>

                                                    <form method="POST" action="{{ route('DeleteCart', $cart->id) }}">
                                                        @csrf
                                                        <button class="removeToWish btn btn-danger mx-2" type="submit">Remove</button>
                                                    </form>
                                                </div>
                                            </td>

                                            @php
                                                $subtotal = $cart->product_cart_qty * $product->product_price;
                                                $totalAmount += $subtotal;

                                                // Format the number with currency symbol and commas
                                                $formatted_number = '₱ ' . number_format($subtotal, 2);
                                            @endphp

                                            <td id="product_price" style="text-align:center; font-weight: bold; font-size: large;"> {{ $formatted_number }} </td>

                                            @php
                                                $isThereRecords++;
                                            @endphp
                                        </tr>

                                    @endif
                                @endforeach
                            @endforeach

                        </tbody>
                    </table>

                    @if ($isThereRecords > 0)
                        <div class="totalAmountTB d-flex justify-content-end">
                            <table class="table ">
                                <thead>
                                    <tr class="table-danger" style="height:auto;">
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        @php
                                            // Format the number with currency symbol and commas
                                            $formatted_number = '₱ ' . number_format($totalAmount, 2);
                                        @endphp

                                        <td style="text-align:left; font-size: large;">Subtotal</td>
                                        <td style="text-align:right; font-size: large;">{{ $formatted_number }}</td>
                                    </tr>

                                    <tr>
                                        @php
                                            // Format the number with currency symbol and commas
                                            $formatted_number = '₱ ' . number_format($shippingFee, 2);
                                        @endphp

                                        <td style="text-align:left; font-size: large;">Shipping Fee</td>
                                        <td style="text-align:right; font-size: large;">{{ $formatted_number }}</td>
                                    </tr>

                                    <tr>
                                        @php
                                            $amountToPay = $totalAmount + $shippingFee;
                                            // Format the number with currency symbol and commas
                                            $formatted_number = '₱ ' . number_format($amountToPay, 2);
                                        @endphp

                                        <td style="font-size: large; font-weight: bold; text-align:left;">Amount To Pay</td>
                                        <td style="font-size: large; font-weight: bold; text-align:right;">{{ $formatted_number }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-end mb-5">
                            <form method="GET" action="{{ route('ProceedToCheckout', $formatted_number) }}">
                                @csrf
                                <button class="checkOut btn btn-danger" type="submit">Proceed to Checkout&#8594;</button>
                            </form>
                        </div>

                    @else
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-center">No Items Found in Cart</td>
                                </tr>
                            </tbody>
                        </table>

                    @endif



                </div>
            </div>
        </div>

        <footer>
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-bottom">
                <div class="container d-flex justify-content-center">
                    <a class="navbar-brand text-light text-center" style="font-size: medium;">© 2023 - Ecommerce Software by ETech</a>
                </div>
            </nav>
        </footer>

        <script type="text/javascript">

            function enableBtn(cartId) {
                document.getElementById(`updateBtn-${cartId}`).disabled = false;
            }

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

    </body>
</html>
