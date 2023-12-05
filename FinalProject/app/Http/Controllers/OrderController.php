<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetails;
use App\Models\Products;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //

    public function index(string $amount) {

    }

    public function ProceedToCheckout($amount) {
        return view('customer.checkout', compact('amount'));
    }

    // CREATE
    public function PlaceOrder(Request $request, $amount) {

        // Validate the request
        $validated = $request->validate([
            'shipping_address' => 'required|max:255',
            'contact_number' => 'required|numeric|digits:11', // digits_between:1,11
        ],[
            'contact_number.numeric' => 'The contact_number field must be numeric.',
            'contact_number.digits' => 'The contact number must be 11 digits.',
        ]);

        // Get the authenticated user's ID
        $userId = auth()->user()->id;

        // Retrieve cart IDs to be deleted
        $cartIdsToDelete = Cart::where('user_id', $userId)->pluck('id')->toArray();
        $cartID_string = implode(',', $cartIdsToDelete);

        $defaultStatus = "Waiting for Payment";

        OrderDetails::create([
            'payment_total' => $amount,
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'contact_number' => $request->contact_number,
            'order_status' => $defaultStatus,
            'cart_id' => $cartID_string,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);

        // Delete all carts for the current user
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('OrderHistory')->with('success','You have successfully placed your order. Thank you!');
    }


    // UPDATE
    public function PayOrder($id)
    {
        $orderItem = OrderDetails::find($id);

        $paidStatus = "Paid";

        // Update only the changed fields
        $orderItem->update([
            'order_status' => $paidStatus,
        ]);

        return Redirect()->back()->with('success','Payment Successful');
    }

    public function ShipOrder($id)
    {
        $orderItem = OrderDetails::find($id);

        $paidStatus = "Order is being shipped";

        // Update only the changed fields
        $orderItem->update([
            'order_status' => $paidStatus,
        ]);

        return Redirect()->back()->with('success','Order is being shipped.');
    }

    public function OrderShipped($id)
    {
        $orderItem = OrderDetails::find($id);

        $paidStatus = "Order has arrived";

        // Update only the changed fields
        $orderItem->update([
            'order_status' => $paidStatus,
        ]);

        return Redirect()->back()->with('success','Order has arrived.');
    }

    public function ReceiveOrder($id)
    {
        $orderItem = OrderDetails::find($id);

        $paidStatus = "Complete";

        // Update only the changed fields
        $orderItem->update([
            'order_status' => $paidStatus,
        ]);

        return Redirect()->back()->with('success','Order has been received.');
    }

    // OrderDetails
    public function OrderDetails($id) {
        $orderItem = OrderDetails::find($id);
        $carts = Cart::withTrashed()->get();
        $products = Products::all();
        return view('customer.orderdetails', compact('orderItem', 'carts', 'products'));
    }



}
