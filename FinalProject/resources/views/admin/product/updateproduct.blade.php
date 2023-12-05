<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Product') }}
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

                            <form action="{{url('content-management-system/update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 container">
                                    <label for="inputCategory" class="col-form-label">Product Name</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}" onchange="enableUpdate()">
                                        @error('product_name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Description</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" aria-label="With textarea" name="product_description" onchange="enableUpdate()" rows="10">{{ $products->product_description }}</textarea>
                                        @error('product_description')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Quantity</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_qty" value="{{ $products->product_qty }}" onchange="enableUpdate()">
                                        @error('product_qty')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Price</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_price" id="product_price" value="{{ $products->product_price }}" hidden>
                                        <input type="text" class="form-control" name="product_price_input" id="product_price_input" value="{{ $products->product_price }}" onchange="formatAmountUpdate(this)">

                                        @error('product_price')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Image (Front)</label>
                                        <div class="d-flex align-items-start mb-3">
                                            <input type="file" class="form-control" name="product_front" id="product_front" onchange="enableUpdateFront(this)"style="width: 108px;">

                                            <input type="text" class="form-control text-center fst-italic" name="product_front_display" id="product_front_display" aria-label="Username" aria-describedby="addon-wrapping" value="{{ $products->product_front }}" readonly style="width: 50%;"/>

                                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                                <img class="" src="{{ asset('storage/product_images/' . $products->product_front) }}" alt="{{$products->product_front}}" width="250px">
                                            </div>

                                            @error('product_front')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    <label for="inputCategory" class="col-form-label">Product Image (Right)</label>
                                        <div class="d-flex align-items-start mb-3">
                                            <input type="file" class="form-control" name="product_right" id="product_right" onchange="enableUpdateRight(this)" style="width: 108px;">

                                            <input type="text" class="form-control text-center fst-italic" id="product_right_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_right }}" readonly style="width: 50%;"/>

                                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                                <img class="" src="{{ asset('storage/product_images/' . $products->product_right) }}" alt="{{$products->product_right}}" width="250px">
                                            </div>

                                            @error('product_right')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    <label for="inputCategory" class="col-form-label">Product Image (Left)</label>
                                        <div class="d-flex align-items-start mb-3">
                                            <input type="file" class="form-control" name="product_left" id="product_left" onchange="enableUpdateLeft(this)" style="width: 108px;">

                                            <input type="text" class="form-control text-center fst-italic" id="product_left_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_left }}" readonly style="width: 50%;"/>

                                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                                <img class="" src="{{ asset('storage/product_images/' . $products->product_left) }}" alt="{{$products->product_left}}" width="250px">
                                            </div>

                                            @error('product_left')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    <label for="inputCategory" class="col-form-label">Product Image (Back)</label>
                                        <div class="d-flex align-items-start mb-3">
                                            <input type="file" class="form-control" name="product_back" id="product_back" onchange="enableUpdateBack(this)" style="width: 108px;">

                                            <input type="text" class="form-control text-center fst-italic" id="product_back_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_back }}" readonly style="width: 50%;"/>

                                            <div class="d-flex align-items-center justify-content-center mx-auto">
                                                <img class="" src="{{ asset('storage/product_images/' . $products->product_back) }}" alt="{{$products->product_back}}" width="250px">
                                            </div>

                                            @error('product_back')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                    <div class="col-auto mt-4">
                                        <a href="{{ route('AllProducts') }}" class="btn btn-secondary btn-md">Cancel</a>
                                        <button type="submit" class="btn btn-primary" id="updateBtn" disabled>Update Product</button>
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

    <script type="text/javascript">

        function enableUpdateFront(inputFile) {
            var productFront = document.getElementById("product_front");
            var productFrontDisplay = document.getElementById('product_front_display');

            if (productFront.files.length > 0) {
                // Get the filename from the file input
                var filename = productFront.files[0].name;

                // Update the value of the filename input
                productFrontDisplay.value = filename;
                productFrontDisplay.style.display = "none";
                productFront.style.width = '60%';
            }

            document.getElementById("updateBtn").disabled = false;
        }

        function enableUpdateRight(inputFile) {
            var productRight = document.getElementById("product_right");
            var productRightDisplay = document.getElementById('product_right_display');

            if (productRight.files.length > 0) {
                // Get the filename from the file input
                var filename = productRight.files[0].name;

                // Update the value of the filename input
                productRightDisplay.value = filename;
                productRightDisplay.style.display = "none";
                productRight.style.width = '60%';
            }

            document.getElementById("updateBtn").disabled = false;
        }

        function enableUpdateLeft(inputFile) {
            var productLeft = document.getElementById("product_left");
            var productLeftDisplay = document.getElementById('product_left_display');

            if (productLeft.files.length > 0) {
                // Get the filename from the file input
                var filename = productLeft.files[0].name;

                // Update the value of the filename input
                productLeftDisplay.value = filename;
                productLeftDisplay.style.display = "none";
                productLeft.style.width = '60%';
            }

            document.getElementById("updateBtn").disabled = false;
        }

        function enableUpdateBack(inputFile) {
            var productBack = document.getElementById("product_back");
            var productBackDisplay = document.getElementById('product_back_display');

            if (productBack.files.length > 0) {
                // Get the filename from the file input
                var filename = productBack.files[0].name;

                // Update the value of the filename input
                productBackDisplay.value = filename;
                productBackDisplay.style.display = "none";
                productBack.style.width = '60%';
            }

            document.getElementById("updateBtn").disabled = false;
        }

        function enableUpdate() {
            document.getElementById("updateBtn").disabled = false;
        }

        function formatAmount() {
            let databasePrice = document.getElementById("product_price_input").value;

            // Format the number with commas
            let formattedAmount = parseFloat(databasePrice).toLocaleString('en-US', {
                // style: 'currency',
                currency: 'PHP',
                minimumFractionDigits: 2
            });

            document.getElementById('product_price_input').value = '₱ ' + formattedAmount;
        }

        function formatAmountUpdate(input) {
            // Remove non-numeric characters
            let value = input.value.replace(/[^0-9.]/g, '');
            let originalInput = input.value;

            // Format the number with commas
            let formattedAmount = parseFloat(value).toLocaleString('en-US', {
                // style: 'currency',
                currency: 'PHP',
                minimumFractionDigits: 2
            });

            // Concatenate Peso sign and space before the formatted amount
            input.value = '₱ ' + formattedAmount;

            // Update the hidden input value for database storage
            document.getElementById('product_price').value = originalInput;

            document.getElementById("updateBtn").disabled = false;
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
