<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissable fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body table-responsive">

                                <form action="{{route('AddProduct')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 container">
                                        <label for="inputCategory" class="col-form-label">Product Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_name" id="product_name">
                                            @error('product_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Description</label>
                                        <div class="mb-3">
                                            <textarea class="form-control" aria-label="With textarea" name="product_description" id="product_description" oninput="formatTextarea()" rows="10"></textarea>
                                            @error('product_description')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Quantity</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_qty" id="product_qty">
                                            @error('product_qty')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Price</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="product_price" id="product_price" hidden>
                                            <input type="text" class="form-control" name="product_price_input" id="product_price_input" onchange="formatAmount(this)">
                                            @error('product_price')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Image (Front)</label>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" name="product_front" id="product_front" style="width: 50%">
                                            @error('product_front')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Image (Right)</label>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" name="product_right" id="product_right" style="width: 50%">
                                            @error('product_right')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Image (Left)</label>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" name="product_left" id="product_left" style="width: 50%">
                                            @error('product_left')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <label for="inputCategory" class="col-form-label">Product Image (Back)</label>
                                        <div class="mb-3">
                                            <input type="file" class="form-control" name="product_back" id="product_back" style="width: 50%">
                                            @error('product_back')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-auto mt-4">
                                            <a href="{{ route('AllProducts') }}" class="btn btn-secondary btn-md">Cancel</a>
                                            <button type="submit" class="btn btn-primary" id="addBtn">Add Product</button>
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
    <footer>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-dark bg-dark fixed-bottom">
            <div class="container d-flex justify-content-center">
                <a class="navbar-brand text-light text-center" style="font-size: medium;">© 2023 - Ecommerce Software by ETech</a>
            </div>
        </nav>
    </footer>
    <script type="text/javascript">
        /*
        function enableAdd() {
            var productName = document.getElementById("product_name").value;
            var productDesc = document.getElementById("product_description").value;
            var productQty = document.getElementById("product_qty").value;
            var productPrice = document.getElementById("product_price").value;
            var productFront = document.getElementById("product_front").value;
            var productRight = document.getElementById("product_right").value;
            var productLeft = document.getElementById("product_left").value;
            var productBack = document.getElementById("product_back").value;
        }
        */

        function formatTextarea() {
            var textarea = document.getElementById("product_description");
            var lines = textarea.value.split('\n');
            var formattedText = lines.map(function(line) {
                if (line.trim() !== '' && !line.startsWith('• ')) {
                    return '• ' + line;
                } else {
                    return line;
                }
            }).join('\n');

            textarea.value = formattedText;
        }

        function formatAmount(input) {
            // Remove non-numeric characters
            let value = input.value.replace(/[^0-9.]/g, '');

            // Format the number with commas
            let formattedAmount = parseFloat(value).toLocaleString('en-US', {
                // style: 'currency',
                currency: 'PHP',
                minimumFractionDigits: 2
            });

            // Concatenate Peso sign and space before the formatted amount
            input.value = '₱ ' + formattedAmount;

            // Update the hidden input value for database storage
            document.getElementById('product_price').value = value;
        }

    </script>

</x-app-layout>

{{--
@section('script')
    <script>
        function enableUpdate() {
            document.getElementById("updateBtn").disabled = false;
        }
    </script>
@endsection
 --}}
