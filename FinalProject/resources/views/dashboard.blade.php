<x-app-layout>
       <header style="background-color: #E9E9EA;" class="shadow">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-black leading-tight">
                   Welcome, {{Auth::user()->name}}!
                </h2>
            </div>
        </header>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
<div class="container">
    <div class="row">
        <!-- First Column -->
        <div class="col-md-6 d-flex flex-column">
            <div class="shadow p-3 mb-5 bg-white rounded flex-grow-1">
                <img src="{{ asset('images/logo2.png') }}" style="height: 15vh" class="block h-9 w-auto">
                <br/>
                <h2 class="font-semibold text-xl text-black leading-tight">
                    ETech’s Content Management System
                </h2>
                <p><br/>ETech is a user-friendly website that is catered for technophiles.  The website also provides a variety of features and functionalities to guarantee a pleasant and informative experience for the user.
                </p>
                <p>To maintain an accurate and up-to-date library, it offers a specialized Content Management System (CMS) that enables the administrator to simply manage the laptop’s details and prices. 
                </p>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-md-6">
            <div class="shadow p-3 mb-5 bg-white rounded d-flex align-items-center rowDash">
                <div class="icon">
                    <i class="fas fa-user fa-3x"></i>
                </div>
                <div class="info ml-3">
                    <h2 class="font-semibold text-xl text-black leading-tight">
                        Users
                    </h2>
                    <p>Manage user accounts by creating, updating, displaying, and deleting an account with ease.</p>
                </div>
            </div>

            <!-- Row 2 -->
            <a href="{{ route('AllProducts') }}" class="text-decoration-none">
                <div class="shadow p-3 mb-5 bg-white rounded d-flex align-items-center rowDash">
                    <div class="icon">
                        <i class="fas fa-box fa-3x"></i>
                    </div>
                    <div class="info ml-3">
                        <h2 class="font-semibold text-xl text-black leading-tight">
                            Products
                        </h2>
                        <p class="dashP">Manage products by creating, updating, displaying, and deleting a product with ease.</p>
                    </div>
                </div>
            </a>
            

            <!-- Row 3 -->
            <div class="shadow p-3 mb-5 bg-white rounded d-flex align-items-center rowDash">
                <div class="icon">
                    <i class="fas fa-receipt fa-3x"></i>
                </div>
                <div class="info ml-3">
                    <h2 class="font-semibold text-xl text-black leading-tight">
                        Transactions
                    </h2>
                    <p>Manage transactions by creating, updating, displaying, and deleting a transaction with ease.</p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</x-app-layout>
