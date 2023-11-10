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

    public function index() {
        //$categories = Category::all();
        $products = Products::latest()->paginate('5');
        return view('admin.product.contentmanagementsystem', compact('products'));
    }

    public function AddProduct(Request $request)
    {
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
        return view('admin.product.updateproduct', compact('products'));
    }

    public function UpdateProduct(Request $request, $id)
    {
        $update = Products::find($id)->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price
        ]);

        return Redirect()->route('AllProducts')->with('success','Product Updated Successful');
    }

    public function DeleteCategory(Request $request, $id)
    {
        $deleted = Products::destroy($id);
        return Redirect()->back()->with('success','Category Deleted Successful');
    }

}
