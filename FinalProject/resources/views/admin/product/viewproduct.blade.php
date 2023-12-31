<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="card">
                            <div class="card-body table-responsive">

                                <div class="mb-3 container">
                                    <label for="inputCategory" class="col-form-label">Product Name</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}" readonly>
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Description</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" aria-label="With textarea" name="product_description" rows="10" readonly>{{ $products->product_description }}</textarea>
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Quantity</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_qty" value="{{ $products->product_qty }}" readonly>
                                    </div>

                                    <label for="inputCategory" class="col-form-label">Product Price</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="product_price" id="product_price" hidden>
                                        <input type="text" class="form-control" name="product_price_input" id="product_price_input" value="{{ $products->product_price }}" readonly>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="inputCategory" class="col-form-label">Product Image (Front)</label>
                                            <div class="d-flex align-items-center mb-3">
                                                <input type="text" class="form-control text-center fst-italic" id="product_front_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_front }}" readonly/>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-5 w-50" src="{{ asset('storage/product_images/' . $products->product_front) }}" alt="{{$products->product_front}}">
                                            </div>

                                            <label for="inputCategory" class="col-form-label">Product Image (Right)</label>
                                            <div class="d-flex align-items-center mb-3">
                                                <input type="text" class="form-control text-center fst-italic" id="product_right_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_right }}" readonly/>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-5 w-50" src="{{ asset('storage/product_images/' . $products->product_right) }}" alt="{{$products->product_right}}">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <label for="inputCategory" class="col-form-label">Product Image (Left)</label>
                                            <div class="d-flex align-items-center mb-3">
                                                <input type="text" class="form-control text-center fst-italic" id="product_left_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_left }}" readonly/>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-5 w-50" src="{{ asset('storage/product_images/' . $products->product_left) }}" alt="{{$products->product_left}}">
                                            </div>

                                            <label for="inputCategory" class="col-form-label">Product Image (Back)</label>
                                            <div class="d-flex align-items-center mb-3">
                                                <input type="text" class="form-control text-center fst-italic" id="product_back_display" aria-label="Username" aria-describedby="addon-wrapping"  value="{{ $products->product_back }}" readonly/>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-5 w-50" src="{{ asset('storage/product_images/' . $products->product_back) }}" alt="{{$products->product_back}}">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-auto mt-4">
                                        <a href="{{ route('AllProducts') }}" class="btn btn-secondary btn-md">Back</a>
                                    </div>
                                </div>

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
