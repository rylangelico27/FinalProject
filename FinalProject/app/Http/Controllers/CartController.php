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
        // Validate the request
        /* $validated = $request->validate([
            'product_name' => 'required|unique:products|max:100',
        ]); */

        Cart::create([
            'product_id' => $id,
            'product_cart_qty' => $request->product_cart_qty,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('ViewIndividualProduct', $id)->with('success','Product Added to Cart');
    }


}
