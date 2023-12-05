<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    //

    public function Users() {
        $users = User::latest()->paginate('10');
        return view('admin.product.user', compact('users'));
    }

    public function AddAdmin() {
        return view('admin.product.adduser');
    }

    public function NewAdmin(Request $request) {

        // Validate the request
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'password' => 'required|min:8',
        ]);

        // Hash the password before storing it in the database
        $hashedPassword = Hash::make($request->input('password'));
        $adminRole = "admin";

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $adminRole,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('Users')->with('success','New Administrator Added Successfully');
    }

    public function DeleteUser($id)
    {
        // Find the product to delete
        $user = User::all()->find($id);

        // Check if the product exists
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Permanently delete the product
        $user->forceDelete();

        return redirect()->back()->with('success', 'User has been removed from the system.');
    }

}
