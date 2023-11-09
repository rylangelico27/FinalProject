<?php

namespace App\Http\Controllers;

//
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    //

    public function AddProduct(Request $request)
    {
        //var_dump($request);

        $validated = $request->validate([
            'product_name' => 'required|unique:products|max:50',
            'product_description' => 'required|max:255',
            'product_qty' => 'required',
            'product_price' => 'required',
        ]);

            Products::create([
                'product_name' => $request->product_name,
                'product_description' => $request->product_description,
                'product_qty' => $request->product_qty,
                'product_price' => $request->product_price,
                'created_at' => Carbon::now()
            ]);

        return Redirect()->back()->with('success','Product Added Successful');
    }

    public function EditProduct($id) {
        //$categories = Category::all();
        $products = Products::find($id);
        return view('updateproduct', compact('products'));
    }

    public function UpdateProduct(Request $request, $id)
    {
        $update = Products::find($id)->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price
        ]);

        return Redirect()->route('contentmanagementsystem')->with('success','Product Updated Successful');
    }

}
