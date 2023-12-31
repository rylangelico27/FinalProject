<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ETech') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <!-- BOOTSTRAP v5.3 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- BOOTSTRAP ICONS-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

        {{-- <!-- Link to the external CSS file -->
        <link rel="stylesheet" href="{{ asset('css/site.css') }}"> --}}

    </head>
    <body class="font-sans antialiased" onload="formatAmount()">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        {{--
        <script type="text/javascript">

            function enableAdd() {
                var productName = document.getElementById("product_name").value;
                var productDesc = document.getElementById("product_description").value;
                var productQty = document.getElementById("product_qty").value;
                var productPrice = document.getElementById("product_price").value;

                // Check if all values are not empty
                if (productName !== '' && productDesc !== '' && productQty !== '' && productPrice !== '') {
                    document.getElementById("addBtn").disabled = false;
                } else {
                    document.getElementById("addBtn").disabled = true;
                }
            }

            function enableUpdate() {
                document.getElementById("updateBtn").disabled = false;
            }

        </script>
         --}}

    </body>
</html>
