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

    public function AddToCartWelcomeView(Request $request, int $id)
    {
        $userId = Auth::user()->id;
        $defaultQty = 1;

        // Check if the entry already exists in the wishlist
        $existingWishlistEntry = Cart::where('product_id', $id)
                                        ->where('user_id', $userId)
                                        ->first();

        if (!$existingWishlistEntry) {
            Cart::create([
                'product_id' => $id,
                'product_cart_qty' => $defaultQty,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('dashboard')->with('success','Product Added to Cart');
        }

        else
            return Redirect()->back()->with('info', 'Product Already in Cart');
    }

    // UPDATE
    public function UpdateCart(Request $request, $id)
    {
        $cartItem = Cart::find($id);

        // Update only the changed fields
        $cartItem->update([
            'product_cart_qty' => $request->product_cart_qty,
        ]);

        return Redirect()->back()->with('success','Cart Updated Successfully');
    }


    // DELETE
    public function DeleteCart($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->forceDelete();
        return Redirect()->route('Cart')->with('success','Product Removed from Cart');
    }

    public function DeleteCartProductView($cartID, $id)
    {
        $cartItem = Cart::find($cartID);

        if (!$cartItem) {
            return redirect()->route('ViewIndividualProduct', $cartID)->with('error', 'Cart item not found');
        }

        $cartItem->forceDelete();

        return redirect()->route('ViewIndividualProduct', $id)->with('success', 'Product Removed from Cart');
    }

    public function DeleteCartWelcomeView($cartID, $id)
    {
        $cartItem = Cart::find($cartID);

        if (!$cartItem) {
            return redirect()->back()->with('error', 'Cart item not found');
        }

        $cartItem->forceDelete();

        return redirect()->route('dashboard')->with('success', 'Product Removed from Cart');
    }

}
