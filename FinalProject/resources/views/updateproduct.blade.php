<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Content Management System') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissable fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body table-responsive">

                            <form action="{{url('content-management-system/update-product/'.$products->id)}}" method="POST">
                                @csrf
                                <div class="mb-3 container">
                                    <label for="inputCategory" class="col-form-label">Product Name</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_name" value="{{$products->product_name}}" required>
                                        @error('product_name')
                                            <span class="text-danger">{{message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Description</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" aria-label="With textarea" name="product_description" required>{{$products->product_description}}</textarea>
                                        @error('product_description')
                                            <span class="text-danger">{{message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Quantity</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_qty" value="{{$products->product_qty}}" required>
                                        @error('product_qty')
                                            <span class="text-danger">{{message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Price</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_price" value="{{$products->product_price}}" required>
                                        @error('product_price')
                                            <span class="text-danger">{{message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                    </div>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
