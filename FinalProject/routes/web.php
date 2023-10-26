<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cms', function () {
        return view('cms');
    })->name('cms');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/productView', function () {
    return view('productView');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

/*

    php artisan route:list
        - 

    php artisan make:middleware EnsureTokenIsValid
        - located in app > Http > Middleware


    
    Middleware Configuration

        To register middleware,
            php artisan make:middleware [MiddlewareName]
        
        It will be located in app > Http > Middleware.

        To configure middleware for access, go to app > Http > Middleware > Kernel.php
            'checktoken' => \App\Http\Middleware\CheckToken::class,

        To apply middlware in routes/web.php
                Route::get('/admin', function () {
                    return view('admin');
                }) -> middleware('checktoken');

        http://127.0.0.1:8000/admin?token=my-secret-token


    Controller Configuration
        To register middleware,
            php artisan make:controller [ControllerName]
            
        It will be located in app > Http > Controllers.

        To apply in routes/web.php,
            Route::get('/contact', [ContactController::class, 'index']);
                where 'index' is the function name from ContactController
            
            Make sure to include use App\Http\Controllers\ContactController; in routes/web.php
                where you must include the particular controller


    Database Configuration
        To configure database credentials, go to:
            config > database.php
            .env
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=webapp
                DB_USERNAME=root
                DB_PASSWORD=
        You can view your credentials (username & password) in C:\xampp\phpMyAdmin\config.inc

        To migrate tables from database > migrations,
            public function up(): void is CREATE
            public function down(): void is DROP

            php artisan migrate
        
        After migrating, it will migrate all the tables from the database > migrations + another table for the 'migrations' containing all the migration logs.


    Authentication Configuration
        Laravel Breeze, Laravel Jetstream, and Laravel Fortify.
        Make sure to have Node.js installed.

        To install Laravel Jetstream,
            composer require laravel/jetstream
            php artisan jetstream:install livewire

        Afterwards, there are added tables and files.
            views, routes, migrations, app

            php artisan migrate

        To access the profile pictures, change from .env file
            APP_URL=http://localhost --> APP_URL=http://localhost:8000

*/
