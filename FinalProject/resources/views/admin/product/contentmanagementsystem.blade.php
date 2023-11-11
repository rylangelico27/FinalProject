<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome, {{Auth::user()->name}}
            {{-- to {{ __('Products') }} --}}

            <b style="float:right">
                Total Products: <span class="badge text-bg-danger mx-2"> {{ count($products) }} </span>
            </b>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                            <symbol id="check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                            <symbol id="info-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                            <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                        </svg>

                        @if(session('success'))
                            <div id="alertMessage" class="alert alert-success d-flex align-items-center fade show" role="alert">
                                <svg class="bi flex-shrink-0 me-2 w-10" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                <div class="container">
                                    {{session('success')}}
                                </div>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body table-responsive">

                                <div class="container mt-2 d-flex justify-content-end">
                                    <a href="{{ route('AddForm') }}" class="btn btn-primary btn-md">+ New Product</a>
                                </div>

                                <div class="container mt-4 text-center">
                                    <table class="table table-hover fs-5">
                                        <caption>List of Products</caption>

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
                                    {{ $products->links() }}

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() {
            var alertMessage = document.getElementById("alertMessage");
            alertMessage.classList.remove("show");
            alertMessage.classList.add("fade");
            // Optionally, remove the alert from the DOM after the fade-out animation
            setTimeout(function() {
                alertMessage.remove();
            }, 300); // Adjust the time based on your CSS transition duration
        }, 3000);
    </script>

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
