<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETech: Content Management System</title>

    <!-- BOOTSTRAP v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/cms.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <x-app-layout>

        <!-- Link to the external CSS file -->
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">

        <div class="container mt-5">
            <div class="row justify-content-center gx-3">
                <div class="col-md-6 bg-white rounded p-4">
                    <a class="navbar-brand text-light" href="{{ route('dashboard') }}">   <img src="{{ asset('images/logo2.png') }}" style="height: 150px" class="block h-9 w-auto"></a>
                <br/>
                    <h2 class="font-semibold text-xl text-black leading-tight">
                        ETech’s Content Management System
                    </h2>
                    <p><br/>ETech is a user-friendly website that is catered for technophiles.  The website also provides a variety of features and functionalities to guarantee a pleasant and informative experience for the user.
                    </p>
                    <p>To maintain an accurate and up-to-date library, it offers a specialized Content Management System (CMS) that enables the administrator to simply manage the laptop’s details and prices.
                    </p>

                </div>
                <div class="col-md-6 bg-white rounded p-4 d-flex flex-column">
                    <!-- Content for the second column goes here -->
                    <div class="flex-grow-1 mb-3">
                        <a href="{{ route('AllProducts') }}" class="text-decoration-none">
                        <div class="bg-light rounded p-3 h-100 hover-shadow d-flex align-items-center">
                            <div class="icon mr-3">
                                <i class="fas fa-box fa-3x text-black"></i>
                            </div>
                            <div class="info">
                                <h2 class="font-semibold text-xl text-black leading-tight">
                                    Products
                                </h2>
                                <p class="text-black">Manage products by viewing, updating, and archiving a product with ease.</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="flex-grow-1 mb-3">
                        <a href="{{ route('ArchivedProducts') }}" class="text-decoration-none">
                            <div class="bg-light rounded p-3 h-100 hover-shadow d-flex align-items-center">
                                <div class="icon mr-3">
                                    <i class="fas fa-box-archive fa-3x text-black "></i>
                                </div>
                                <div class="info">
                                    <h2 class="font-semibold text-xl text-black leading-tight">
                                        Archives
                                    </h2>
                                    <p class="text-black">Manage archives by deleting and restoring an archive with ease.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex-grow-1 mb-3">
                        <a href="{{ route('Users') }}" class="text-decoration-none">
                        <div class="bg-light rounded p-3 h-100 hover-shadow d-flex align-items-center">
                            <div class="icon mr-3">
                                <i class="fas fa-user fa-3x text-black"></i>
                            </div>
                            <div class="info">
                                <h2 class="font-semibold text-xl text-black leading-tight">
                                    Users
                                </h2>
                                <p class="text-black">Manage user accounts by viewing and deleting an account with ease.</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="flex-grow-1">
                        <a href="{{ route('OrderHistory') }}" class="text-decoration-none">
                        <div class="bg-light rounded p-3 h-100 hover-shadow d-flex align-items-center">
                            <div class="icon mr-3">
                                <i class="fas fa-receipt fa-3x text-black"></i>
                            </div>
                            <div class="info">
                                <h2 class="font-semibold text-xl text-black leading-tight">
                                    Transactions
                                </h2>
                                <p class="text-black">Manage order transactions by changing the status of an order with ease.</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>

    <!-- Bootstrap JS Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

</body>
<footer>
    <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-bottom">
        <div class="container d-flex justify-content-center">
            <a class="navbar-brand text-light text-center" style="font-size: medium;">© 2023 - Ecommerce Software by ETech</a>
        </div>
    </nav>
</footer>

</html>
