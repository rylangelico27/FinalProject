<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //

    public function index() {
        $carts = Wishlist::all();
        $products = Products::all();
        return view('customer.wishlist', compact('carts', 'products'));
    }

    public function AddToWishlist(Request $request, int $id)
    {
        Wishlist::create([
            'product_id' => $id,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('ViewIndividualProduct', $id)->with('success','Product Added to Wishlist');
    }
}
