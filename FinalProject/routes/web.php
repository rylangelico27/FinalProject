<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

//
use App\Models\Products;
use App\Models\Wishlist;

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
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }

    else {
        $products = Products::latest()->paginate('25');
        return view('welcome', compact('products'));
    }
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        //$products = Products::all();
        $products = Products::latest()->paginate('25');
        $carts = Cart::all();
        $wishlists = Wishlist::all();
        return view('dashboard', compact('products', 'carts', 'wishlists')); // welcome
    })->name('dashboard');

    /*
    Route::get('/content-management-system', function () {
        $products = Products::all();
        return view('contentmanagementsystem', compact('products'));
    })->name('contentmanagementsystem');
    */
});

// Display All Products
    Route::get('/content-management-system', [ProductController::class, 'index'])->name('AllProducts')->middleware('checkUserRole:admin');
    Route::get('/content-management-system/archive', [ProductController::class, 'ArchivedProducts'])->name('ArchivedProducts')->middleware('checkUserRole:admin');

// Add Form
    Route::get('/content-management-system/add-product-form', [ProductController::class, 'AddForm'])->name('AddForm')->middleware('checkUserRole:admin');
// Add Query
    Route::post('/content-management-system/add-product', [ProductController::class, 'AddProduct'])->name('AddProduct')->middleware('checkUserRole:admin');

// View Form
    Route::get('/content-management-system/view-product/{id}', [ProductController::class, 'ViewProduct'])->name('ViewProduct')->middleware('checkUserRole:admin');

// Edit Form
    Route::get('/content-management-system/edit-product/{id}', [ProductController::class, 'EditProduct'])->name('EditProduct')->middleware('checkUserRole:admin');
// Update Query
    Route::post('/content-management-system/update-product/{id}', [ProductController::class, 'UpdateProduct'])->middleware('checkUserRole:admin');

// Delete
    Route::post('/content-management-system/archive-product/{id}', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct')->middleware('checkUserRole:admin');
    Route::post('/content-management-system/restore-product/{id}', [ProductController::class, 'RestoreProduct'])->name('RestoreProduct')->middleware('checkUserRole:admin');
    Route::post('/content-management-system/delete-product/{id}', [ProductController::class, 'DeleteProductPermanently'])->name('DeleteProductPermanently')->middleware('checkUserRole:admin');


// FILTERING
    Route::get('/low-to-high', [ProductController::class, 'LowHigh'])->name('LowHigh');
    Route::get('/high-to-low', [ProductController::class, 'HighLow'])->name('HighLow');
    // DEFAULT      Route::get('/new-to-old', [ProductController::class, 'NewOld'])->name('NewOld');
    Route::get('/new-to-old', [ProductController::class, 'NewOld'])->name('NewOld');
    Route::get('/old-to-new', [ProductController::class, 'OldNew'])->name('OldNew');

// Product View
    Route::get('/view-product/{id}', [ProductController::class, 'ViewIndividualProduct'])->name('ViewIndividualProduct');








// Products in CART
    Route::get('/dashboard/cart', [CartController::class, 'index'])->name('Cart');

// Add to Cart Query
    Route::post('/add-to-cart/{id}', [CartController::class, 'AddToCart'])->name('AddToCart');
    Route::post('/dashboard/add-to-cart/{id}', [CartController::class, 'AddToCartWelcomeView'])->name('AddToCartWelcomeView');

// Remove from Cart Query
    Route::post('/dashboard/cart/delete-from-cart/{id}', [CartController::class, 'DeleteCart'])->name('DeleteCart');
    Route::post('/delete-from-cart/{cartID}/{id}', [CartController::class, 'DeleteCartProductView'])->name('DeleteCartProductView');
    Route::post('/dashboard/delete-from-cart/{cartID}/{id}', [CartController::class, 'DeleteCartWelcomeView'])->name('DeleteCartWelcomeView');

// Update Cart Query
    Route::post('/cart/update-cart/{id}', [CartController::class, 'UpdateCart'])->name('UpdateCart');



// Products in WISHLIST
    Route::get('/dashboard/wishlist', [WishlistController::class, 'index'])->name('Wishlist');

// Add to Wishlist Query
    Route::post('/add-to-wishlist/{id}', [WishlistController::class, 'AddToWishlist'])->name('AddToWishlist');
    Route::post('/dashboard/add-to-wishlist/{id}', [WishlistController::class, 'AddToWishlistWelcomeView'])->name('AddToWishlistWelcomeView');

// Remove from Wishlist Query
    Route::post('/dashboard/wishlist/delete-from-wishlist/{id}', [WishlistController::class, 'DeleteWishlist'])->name('DeleteWishlist');
    Route::post('/delete-from-wishlist/{wishID}/{id}', [WishlistController::class, 'DeleteWishlistProductView'])->name('DeleteWishlistProductView');
    Route::post('/dashboard/delete-from-wishlist/{wishID}/{id}', [WishlistController::class, 'DeleteWishlistWelcomeView'])->name('DeleteWishlistWelcomeView');

// Update Wishlist Query




// Proceed to Checkout (from Cart)
    Route::get('/dashboard/checkout/{amount}', [OrderController::class, 'index'])->name('ProceedToCheckout');

// Order History
    Route::get('/dashboard/order-history', function () {
        return view('customer.orderhistory');
    }) -> name('OrderHistory');




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

