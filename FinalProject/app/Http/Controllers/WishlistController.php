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
        $userId = Auth::user()->id;

        // Check if the entry already exists in the wishlist
        $existingWishlistEntry = Wishlist::where('product_id', $id)
                                        ->where('user_id', $userId)
                                        ->first();

        if (!$existingWishlistEntry) {
            Wishlist::create([
                'product_id' => $id,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('ViewIndividualProduct', $id)->with('success','Product Added to Wishlist');
        }

        else
            return Redirect()->route('ViewIndividualProduct', $id)->with('info', 'Product Already in Wishlist');
    }

    public function AddToWishlistWelcomeView(Request $request, int $id)
    {
        $userId = Auth::user()->id;

        // Check if the entry already exists in the wishlist
        $existingWishlistEntry = Wishlist::where('product_id', $id)
                                        ->where('user_id', $userId)
                                        ->first();

        if (!$existingWishlistEntry) {
            Wishlist::create([
                'product_id' => $id,
                'user_id' => Auth::user()->id,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->back()->with('success','Product Added to Wishlist');
        }

        else
            return Redirect()->back()->with('info', 'Product Already in Wishlist');
    }

    // UPDATE


    // DELETE
    public function DeleteWishlist($id)
    {
        $wishlistItem = Wishlist::find($id);
        $wishlistItem->forceDelete();
        return Redirect()->route('Wishlist')->with('success','Product Removed from Wishlist');
    }

    public function DeleteWishlistProductView($wishID, $id)
    {
        $wishlistItem = Wishlist::find($wishID);

        if (!$wishlistItem) {
            return redirect()->route('ViewIndividualProduct', $wishID)->with('error', 'Wishlist item not found');
        }

        $wishlistItem->forceDelete();

        return redirect()->route('ViewIndividualProduct', $id)->with('success', 'Product Removed from Wishlist');
    }

    public function DeleteWishlistWelcomeView($wishID, $id)
    {
        $wishlistItem = Wishlist::find($wishID);

        if (!$wishlistItem) {
            return redirect()->back()->with('error', 'Wishlist item not found');
        }

        $wishlistItem->forceDelete();

        return redirect()->back()->with('success', 'Product Removed from Wishlist');
    }


}
