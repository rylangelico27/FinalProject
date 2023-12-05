<?php

namespace App\Http\Controllers;

//

use App\Models\Cart;
use App\Models\Products;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //

    public function index() {
        $products = Products::latest()->paginate('10');
        return view('admin.product.contentmanagementsystem', compact('products'));
    }

    public function AddForm() {
        return view('admin.product.addproduct');
    }

    public function AddProduct(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'product_name' => 'required|unique:products|max:100',
            'product_description' => 'required|max:1000',
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

        // Find the product to update
        $product = Products::find($id);

        // Update only when the file has been changed or added
        if ($request->hasFile('product_front')) {
            $this->deleteAndUploadFile($request->file('product_front'), $product->product_front);
            $product->product_front = $request->file('product_front')->getClientOriginalName();
        }

        if ($request->hasFile('product_right')) {
            $this->deleteAndUploadFile($request->file('product_right'), $product->product_right);
            $product->product_right = $request->file('product_right')->getClientOriginalName();
        }

        if ($request->hasFile('product_left')) {
            $this->deleteAndUploadFile($request->file('product_left'), $product->product_left);
            $product->product_left = $request->file('product_left')->getClientOriginalName();
        }

        if ($request->hasFile('product_back')) {
            $this->deleteAndUploadFile($request->file('product_back'), $product->product_back);
            $product->product_back = $request->file('product_back')->getClientOriginalName();
        }

        // Update only the changed fields
        $product->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,
        ]);

        return Redirect()->route('AllProducts')->with('success', 'Product Updated Successfully');
    }

    private function deleteAndUploadFile($uploadedFile, $existingFilePath)
    {
        // Delete the existing file
        Storage::disk('public')->delete('product_images/' . $existingFilePath);

        // Upload the new file using a new filename
        $originalFileName = $uploadedFile->getClientOriginalName();
        $uploadedFile->storeAs('product_images', $originalFileName, 'public');
    }

    public function DeleteProduct(Request $request, $id)
    {
        $deleted = Products::destroy($id);
        return Redirect()->back()->with('success','Product Archived Successful');
    }

    public function LowHigh() {
        $products = Products::orderBy('product_price', 'asc')->get(); // 'asc' for ascending order

        if (auth()->check()) {
            $carts = Cart::all();
            $wishlists = Wishlist::all();
            return view('dashboard', compact('products', 'carts', 'wishlists'));
        } else {
            // $products = Products::orderBy('product_price', 'asc')->paginate('10'); // 'asc' for ascending order
            return view('welcome', compact('products'));
        }
    }

    public function HighLow() {
        $products = Products::orderBy('product_price', 'desc')->get(); // 'desc' for descending order

        if (auth()->check()) {
            $carts = Cart::all();
            $wishlists = Wishlist::all();
            return view('dashboard', compact('products', 'carts', 'wishlists'));
        } else {
            // $products = Products::orderBy('product_price', 'asc')->paginate('10'); // 'asc' for ascending order
            return view('welcome', compact('products'));
        }
    }

    public function NewOld() {
        $products = Products::orderBy('created_at', 'desc')->get(); // 'desc' for newest order

        if (auth()->check()) {
            $carts = Cart::all();
            $wishlists = Wishlist::all();
            return view('dashboard', compact('products', 'carts', 'wishlists'));
        } else {
            // $products = Products::orderBy('product_price', 'asc')->paginate('10'); // 'asc' for ascending order
            return view('welcome', compact('products'));
        }
    }

    public function OldNew() {
        $products = Products::orderBy('created_at', 'asc')->get(); // 'asc' for oldest order

        if (auth()->check()) {
            $carts = Cart::all();
            $wishlists = Wishlist::all();
            return view('dashboard', compact('products', 'carts', 'wishlists'));
        } else {
            // $products = Products::orderBy('product_price', 'asc')->paginate('10'); // 'asc' for ascending order
            return view('welcome', compact('products'));
        }
    }

    public function ViewIndividualProduct($id) {
        $products = Products::find($id);
        $carts = Cart::all();
        $wishlists = Wishlist::all();
        return view('customer.productView', compact('products', 'carts', 'wishlists'));
    }

    public function ArchivedProducts() {
        $archives = Products::onlyTrashed()->latest()->paginate('10');
        return view('admin.product.archive', compact('archives'));
    }

    public function RestoreProduct($id)
    {
        $restore = Products::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success','Product Restored Successful');
    }

    public function DeleteProductPermanently($id)
    {
        // Find the product to delete
        $product = Products::withTrashed()->find($id);

        // Check if the product exists
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Delete the associated files
        $this->deleteFile($product);

        // Permanently delete the product
        $product->forceDelete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function deleteFile($product)
    {
        // Delete the existing files
        Storage::disk('public')->delete('product_images/' . $product->product_front);
        Storage::disk('public')->delete('product_images/' . $product->product_right);
        Storage::disk('public')->delete('product_images/' . $product->product_left);
        Storage::disk('public')->delete('product_images/' . $product->product_back);
    }


}
