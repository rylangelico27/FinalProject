<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//
use App\Models\Products;

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
    $products = Products::latest()->paginate('25');
    return view('welcome', compact('products'));
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /*
    Route::get('/content-management-system', function () {
        $products = Products::all();
        return view('contentmanagementsystem', compact('products'));
    })->name('contentmanagementsystem');
    */
});

// Display All Products
    Route::get('/content-management-system', [ProductController::class, 'index'])->name('AllProducts');

// Add Form
    Route::get('/content-management-system/add-product-form', [ProductController::class, 'AddForm'])->name('AddForm');
// Add Query
    Route::post('/content-management-system/add-product', [ProductController::class, 'AddProduct'])->name('AddProduct');

// View Form
    Route::get('/content-management-system/view-product/{id}', [ProductController::class, 'ViewProduct'])->name('ViewProduct');

// Edit Form
    Route::get('/content-management-system/edit-product/{id}', [ProductController::class, 'EditProduct'])->name('EditProduct');
// Update Query
    Route::post('/content-management-system/update-product/{id}', [ProductController::class, 'UpdateProduct']);

// Delete
    Route::post('/content-management-system/delete-product/{id}', [ProductController::class, 'DeleteCategory'])->name('DeleteProduct');


// FILTERING
    Route::get('/low-to-high', [ProductController::class, 'LowHigh'])->name('LowHigh');
    Route::get('/high-to-low', [ProductController::class, 'HighLow'])->name('HighLow');
    // DEFAULT      Route::get('/new-to-old', [ProductController::class, 'NewOld'])->name('NewOld');
    Route::get('/new-to-old', [ProductController::class, 'NewOld'])->name('NewOld');
    Route::get('/old-to-new', [ProductController::class, 'OldNew'])->name('OldNew');

// Product View
    Route::get('/view-product/{id}', [ProductController::class, 'ViewIndividualProduct'])->name('ViewIndividualProduct');



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

Route::get('/index', function () {
    return view('index');
});

