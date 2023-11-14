<?php

namespace App\Http\Controllers;

//
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //

    public function index() {
        $products = Products::latest()->paginate('5');
        return view('admin.product.contentmanagementsystem', compact('products'));
    }

    public function AddForm() {
        return view('admin.product.addproduct');
    }

    public function AddProduct(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'product_name' => 'required|unique:products|max:50',
            'product_description' => 'required|max:500',
            'product_qty' => 'required',
            'product_price' => 'required',
            'product_front' => 'required|mimes:jpeg,png,jpg',
            'product_right' => 'required|mimes:jpeg,png,jpg',
            'product_left' => 'required|mimes:jpeg,png,jpg',
            'product_back' => 'required|mimes:jpeg,png,jpg',
        ], [
            'product_qty.required' => 'The product quantity field is required.',

            'product_front.required' => 'The product image field is required.',
            'product_right.required' => 'The product image field is required.',
            'product_left.required' => 'The product image field is required.',
            'product_back.required' => 'The product image field is required.',

            'product_front.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
            'product_right.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
            'product_left.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
            'product_back.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
        ]);

        $imagePathFront = null;
        $imagePathRight = null;
        $imagePathLeft = null;
        $imagePathBack = null;

        // Handle file upload
        if ($request->hasFile('product_front')) {
            $uploadedFile = $request->file('product_front');
            $originalFileName = $uploadedFile->getClientOriginalName();

            // Generate a unique filename to avoid conflicts
            $filename = Str::uuid() . '_' . $originalFileName;

            // Store the file with the generated filename
            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');
            $imagePathFront = $originalFileName;
        }

        if ($request->hasFile('product_right')) {
            $uploadedFile = $request->file('product_right');
            $originalFileName = $uploadedFile->getClientOriginalName();

            $filename = Str::uuid() . '_' . $originalFileName;

            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');
            $imagePathRight = $originalFileName;
        }

        if ($request->hasFile('product_left')) {
            $uploadedFile = $request->file('product_left');
            $originalFileName = $uploadedFile->getClientOriginalName();

            $filename = Str::uuid() . '_' . $originalFileName;

            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');
            $imagePathLeft = $originalFileName;
        }

        if ($request->hasFile('product_back')) {
            $uploadedFile = $request->file('product_back');
            $originalFileName = $uploadedFile->getClientOriginalName();

            $filename = Str::uuid() . '_' . $originalFileName;

            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');
            $imagePathBack = $originalFileName;
        }

        Products::create([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,

            // Move to each if statement
            'product_front' => $imagePathFront,
            'product_right' => $imagePathRight,
            'product_left' => $imagePathLeft,
            'product_back' => $imagePathBack,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('AllProducts')->with('success','Product Added Successful');
        // return Redirect()->back()->with('success','Product Added Successful');
    }

    public function ViewProduct($id) {
        $products = Products::find($id);
        return view('admin.product.viewproduct', compact('products'));
    }

    public function EditProduct($id) {
        //$categories = Category::all();
        $products = Products::find($id);
        return view('admin.product.updateproduct', compact('products'));
    }

    public function UpdateProduct(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'product_front' => 'mimes:jpeg,png,jpg',
            'product_right' => 'mimes:jpeg,png,jpg',
            'product_left' => 'mimes:jpeg,png,jpg',
            'product_back' => 'mimes:jpeg,png,jpg',
        ], [
            'product_front.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
            'product_right.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
            'product_left.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
            'product_back.mimes' => 'The product image field only accepts .JPG. JPEG, .PNG.',
        ]);

        $imagePathFront = null;
        $imagePathRight = null;
        $imagePathLeft = null;
        $imagePathBack = null;

        // Find the product to update
        $product = Products::find($id);

        // Handle file upload
        if ($request->hasFile('product_front')) {
            // Delete the existing file
            Storage::disk('public')->delete('product_images/' . $product->product_front);

            // Upload the new file using a new filename
            $uploadedFile = $request->file('product_front');
            $originalFileName = $uploadedFile->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFileName;
            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');

            // Update the database with the new filename
            $imagePathFront = $originalFileName;
        }

        if ($request->hasFile('product_right')) {
            // Delete the existing file
            Storage::disk('public')->delete('product_images/' . $product->product_right);

            // Upload the new file using a new filename
            $uploadedFile = $request->file('product_right');
            $originalFileName = $uploadedFile->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFileName;
            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');

            // Update the database with the new filename
            $imagePathRight = $originalFileName;
        }

        if ($request->hasFile('product_left')) {
            // Delete the existing file
            Storage::disk('public')->delete('product_images/' . $product->product_left);

            // Upload the new file using a new filename
            $uploadedFile = $request->file('product_left');
            $originalFileName = $uploadedFile->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFileName;
            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');

            // Update the database with the new filename
            $imagePathLeft = $originalFileName;
        }

        if ($request->hasFile('product_back')) {
            // Delete the existing file
            Storage::disk('public')->delete('product_images/' . $product->product_back);

            // Upload the new file using a new filename
            $uploadedFile = $request->file('product_back');
            $originalFileName = $uploadedFile->getClientOriginalName();
            $filename = Str::uuid() . '_' . $originalFileName;
            $imagePathLocal = $uploadedFile->storeAs('product_images', $originalFileName, 'public');

            // Update the database with the new filename
            $imagePathBack = $originalFileName;
        }

        Products::find($id)->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,
            'product_front' => $imagePathFront,
            'product_right' => $imagePathRight,
            'product_left' => $imagePathLeft,
            'product_back' => $imagePathBack,
        ]);

        return Redirect()->route('AllProducts')->with('success','Product Updated Successful');
    }

    public function DeleteCategory(Request $request, $id)
    {
        $deleted = Products::destroy($id);
        return Redirect()->back()->with('success','Category Deleted Successful');
    }

}
