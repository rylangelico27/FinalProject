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
                    @auth
                        <a class="navbar-brand text-light" href="{{ route('dashboard') }}">
                            <img src="{{ asset('images/logo2.png') }}" style="height: 40px" class="block h-9 w-auto">
                        </a>

                        @if (Auth::user()->role == "admin")
                            {{-- <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                {{ __('Customer View') }}
                            </x-nav-link> --}}

                            <x-nav-link href="{{ route('AllProducts') }}" :active="request()->routeIs('AllProducts')" style="margin-left: 3.3%;">
                                {{ __('Content Management System') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('ArchivedProducts') }}" :active="request()->routeIs('ArchivedProducts')" style="margin-left: 3.7%;">
                                {{ __('Archive') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('Users') }}" :active="request()->routeIs('Users')" style="margin-left: 2.5%;">
                                {{ __('Users') }}
                            </x-nav-link>
                        @endif

                    @else
                        <a class="navbar-brand text-light" href="{{ route('welcome') }}">
                            <img src="{{ asset('images/logo2.png') }}" style="height: 40px" class="block h-9 w-auto">
                        </a>
                    @endauth

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

        {{-- PRODUCT VIEW --}}
        <div class="d-flex align-items-center" style="height: 885px;">
            <div class="prodContainer container align-items-center">

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

                <div class="row d-flex justify-content-center align-items-center">

                    <div class="imgColumn card col-sm-10 col-md-8 col-lg-6 align-items-center">
                        <img class="imgProd" src="{{ asset('storage/product_images/' . $products->product_front) }}" alt="{{$products->product_front}}" width="100%" id="bigImg">

                        <div class="smallerRow row d-flex justify-content-between mt-5">
                            <div class="smallerImg card col">
                                <img src="{{ asset('storage/product_images/' . $products->product_front) }}" alt="{{$products->product_front}}" width="100%" class="smallImg my-3">
                            </div>

                            <div class="smallerImg card col">
                                <img src="{{ asset('storage/product_images/' . $products->product_left) }}" alt="{{$products->product_left}}" width="100%" class="smallImg my-3">
                            </div>

                            <div class="smallerImg card col">
                                <img src="{{ asset('storage/product_images/' . $products->product_right) }}" alt="{{$products->product_right}}" width="100%" class="smallImg my-3">
                            </div>

                            <div class="smallerImg card col">
                                <img src="{{ asset('storage/product_images/' . $products->product_back) }}" alt="{{$products->product_back}}" width="100%" class="smallImg my-3">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-6 align-self-center">
                        <p>Home / ASUS</p>

                        <h1>{{ $products->product_name }}</h1>
                        <h4>Product Details</h4>

                        @php
                            $productDescription = $products->product_description;

                            // Split the product description into an array of items
                            $descriptionItems = explode("\n", $productDescription);
                        @endphp

                        <ul>
                            @foreach ($descriptionItems as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>

                        <h5 class="productPrice" id="product_price">{{ $products->product_price }}</h5>

                        <div class="container d-flex">
                            <form action="{{ route('AddToCart', $products->id) }}" method="POST">
                                @csrf

                                <div class="mb-3 d-flex align-items-center">
                                    <label for="inputCategory" class="col-form-label">Quantity</label>
                                    <input type="number" class="quanInputEveryProd mx-3" name="product_cart_qty" id="product_cart_qty" value="1" min="1" max="5">
                                    @error('product_cart_qty')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                @php
                                    $productCartExisting = false;
                                    $productWishExisting = false;
                                    $productCartID = null;
                                    $productWishID = null;
                                @endphp

                                @foreach ($carts as $cart)
                                    @if ($products->id == $cart->product_id)
                                        @php
                                            $productCartExisting = true;
                                            $productCartID = $cart->id;
                                            break;
                                        @endphp
                                    @endif
                                @endforeach

                                @if ($productCartExisting)

                                @else
                                    @auth
                                        {{-- If the product is not found in any cart, show the "Add to Cart" button --}}
                                        <button class="addToCart btn btn-lg px-5" type="submit" id="addToCart">Add to Cart</button>
                                    @else
                                        <a class="addToCart btn btn-lg px-5" href="{{ route('login') }}">Add to Cart</a>
                                    @endauth
                                @endif

                            </form>

                            @if ($productCartExisting)
                                @auth
                                    <form class="mt-5" action="{{ route('DeleteCartProductView', ['cartID' => $productCartID, 'id' => $products->id]) }}" method="POST" style="margin-left: -143px;">
                                        @csrf
                                        <button class="addToCartSelected btn btn-lg px-5 mt-2" type="submit" id="addCartSelected">Remove from Cart</button>
                                    </form>
                                @else
                                    <form class="mt-5" action="{{ route('login') }}" method="GET" style="margin-left: -143px;">
                                        @csrf
                                        <button class="addToCart btn btn-lg px-5 mt-2" type="submit" id="addCartSelected">Add to Cart</button>
                                    </form>
                                @endauth
                            @endif

                            @foreach ($wishlists as $wishlist)
                                @if ($products->id == $wishlist->product_id)
                                    @php
                                        $productWishExisting = true;
                                        $productWishID = $wishlist->id;
                                        break;
                                    @endphp
                                @endif
                            @endforeach

                            @if ($productWishExisting)
                                @auth
                                    <form class="mt-5" action="{{ route('DeleteWishlistProductView', ['wishID' => $productWishID, 'id' => $products->id]) }}" method="POST">
                                        @csrf
                                        <button class="addToWishlistSelected btn btn-lg px-5 mx-3" type="submit" id="addWishSelected" style="margin-top: 8px;">Remove from Wishlist</button>
                                    </form>
                                @else
                                    <form class="mt-5" action="{{ route('login') }}" method="GET">
                                        @csrf
                                        <button class="addToWishlist btn btn-lg px-5 mx-3" type="submit" id="addWishSelected" style="margin-top: 8px;">Remove from Wishlist</button>
                                    </form>
                                @endauth

                            @else
                                @auth
                                    {{-- If the product is not found in any cart, show the "Add to Cart" button --}}
                                    <form class="mt-5" action="{{ route('AddToWishlist', $products->id) }}" method="POST">
                                        @csrf
                                        <button class="addToWishlist btn btn-lg px-5 mx-3" type="submit" id="addToWishlist" style="margin-top: 8px;">Add to Wishlist</button>
                                    </form>
                                @else
                                    <a class="addToWishlist btn btn-lg px-5 mx-3" href="{{ route('login') }}" style="margin-top: 55px;">Add to Wishlist</a>
                                @endauth



                            @endif

                        </div>


                    </div>
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
            var bigImg = document.getElementById("bigImg");
            var smallImg = document.getElementsByClassName("smallImg");

            /*   Changing Pictures on Every Product   */
            smallImg[0].onclick = function () {
                bigImg.src = smallImg[0].src;
            }

            smallImg[1].onclick = function () {
                bigImg.src = smallImg[1].src;
            }

            smallImg[2].onclick = function () {
                bigImg.src = smallImg[2].src;
            }

            smallImg[3].onclick = function () {
                bigImg.src = smallImg[3].src;
            }

            function formatAmount() {
                let databasePrice = document.getElementById("product_price").innerText;

                // Format the number with commas
                let formattedAmount = parseFloat(databasePrice).toLocaleString('en-US', {
                    // style: 'currency',
                    currency: 'PHP',
                    minimumFractionDigits: 2
                });

                document.getElementById('product_price').innerText = '₱ ' + formattedAmount;
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
