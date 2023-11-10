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
                                            {{-- BLADE CODE --}}
                                            @foreach ($products as $product)
                                                <tr>
                                                    {{-- <th scope="row">{{$product->id}}</th> --}}
                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{$product->created_at->diffForHumans()}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-md">View</button>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('EditProduct', $product->id) }}" class="btn btn-primary btn-md">Update</a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Remove</a>
                                                    </td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Delete?</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                Are you sure you want to delete this product?
                                                            </div>

                                                            <div class="modal-footer">
                                                                <form action="{{ route('DeleteProduct', $product->id) }}" method="POST">
                                                                @csrf
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

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
                                            <input type="text" class="form-control" name="product_name" id="product_name" onchange="enableAdd()" required>
                                            @error('product_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Description</label>
                                        <div class="mb-3">
                                            <textarea class="form-control" aria-label="With textarea" name="product_description" id="product_description" onchange="enableAdd()" required></textarea>
                                            @error('product_description')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Quantity</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_qty" id="product_qty" onchange="enableAdd()" required>
                                            @error('product_qty')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Price</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_price" id="product_price" onchange="enableAdd()" required>
                                            @error('product_price')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary" id="addBtn" disabled>Add Product</button>
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

{{--
@section('script')
    <script type="text/javascript">
        function enableAdd() {
            var productName = document.getElementById("product_name").value;
            var productDesc = document.getElementById("product_description").value;
            var productQty = document.getElementById("product_qty").value;
            var productPrice = document.getElementById("product_price").value;

            // Check if all values are not empty
            if (productName !== '' && productDesc !== '' && productQty !== '' && productPrice !== '') {
                document.getElementById("addBtn").disabled = false;
            } else {
                document.getElementById("addBtn").disabled = true;
            }
        }
    </script>
@endsection
--}}
