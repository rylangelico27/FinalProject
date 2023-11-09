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

                                <div class="container mt-5 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-md">+ New Product</button>
                                </div>

                                <div class="container d-flex justify-content-center align-items-center mt-4 text-center">
                                    <table class="table table-hover fs-5">

                                        <thead class="table-info align-middle">
                                            <tr class="table-primary">
                                                <th class="" >Product</th> <!-- colspan="2" -->
                                                <th class="" >Created At</th>
                                                <th class="" colspan="3">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-group-divider align-middle">
                                            {{-- BALDE CODE --}}
                                            @foreach ($products as $product)
                                                <tr>
                                                    {{-- <th scope="row">{{$product->id}}</th> --}}
                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{$product->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-md mx-2">View</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('content-management-system/edit-product/'.$product->id)}}" class="btn btn-primary btn-md mx-2">Update</a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger btn-md mx-2">Remove</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('AddProduct')}}" method="POST">
                                    @csrf
                                    <div class="mb-3 container">
                                        <label for="inputCategory" class="col-form-label">Product Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_name" required>
                                            @error('product_name')
                                                <span class="text-danger">{{message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Description</label>
                                        <div class="mb-3">
                                            <textarea class="form-control" aria-label="With textarea" name="product_description" required></textarea>
                                            @error('product_description')
                                                <span class="text-danger">{{message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Quantity</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_qty" required>
                                            @error('product_qty')
                                                <span class="text-danger">{{message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Price</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_price" required>
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
