<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //

    public function index() {
        $carts = Cart::all();
        $products = Products::all();
        return view('customer.cart', compact('carts', 'products'));
    }

    public function AddToCart(Request $request, int $id)
    {
        $userId = Auth::user()->id;

        // Check if the entry already exists in the wishlist
        $existingWishlistEntry = Cart::where('product_id', $id)
                                        ->where('user_id', $userId)
                                        ->first();

        if (!$existingWishlistEntry) {
            Cart::create([
                'product_id' => $id,
                'product_cart_qty' => $request->product_cart_qty,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('ViewIndividualProduct', $id)->with('success','Product Added to Cart');
        }

        else
            return Redirect()->route('ViewIndividualProduct', $id)->with('info', 'Product Already in Cart');
    }

    // UPDATE


    // DELETE
    public function DeleteCart(Request $request, $id)
    {
        $deleted = Cart::destroy($id);
        return Redirect()->route('Cart')->with('success','Product Removed from Cart');
    }
}
