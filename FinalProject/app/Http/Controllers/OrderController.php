<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index(string $amount) {
        $carts = Cart::all();
        $users = User::all();
        return view('customer.checkout', compact('carts', 'users', 'amount'));
    }
}
