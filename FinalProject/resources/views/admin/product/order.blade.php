<x-app-layout>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="authorContainer m-auto">
                            <h2 class="prodHead">Order History</h2>
                        </div>

                        <div class="cartCont container">

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
                                <div id="alertMessage" class="alert alert-success d-flex align-items-center fade show m-auto mb-1" role="alert" style="height: 50px;">
                                    <svg class="bi flex-shrink-0 me-2 w-5" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div class="container">
                                        {{session('success')}}
                                    </div>
                                </div>
                            @endif

                            <div class="card" style="margin-bottom: 10%;">
                                <div class="card-body table-responsive">

                                    <table class="table table-hover fs-5">
                                        <thead class="align-middle">
                                            <tr class="table-danger">
                                                <th class="tableHeadingProd">Order Reference No.</th>
                                                <th class="tableHeading">Date</th>
                                                <th class="tableHeading">Amount to Pay</th>
                                                <th class="tableHeading">Payment Method</th>
                                                <th class="tableHeading">Status</th>
                                                <th class="tableHeading">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody class="table-group-divider align-middle">

                                            @php
                                                $isThereRecords = 0;
                                            @endphp


                                            @foreach ($orderHistory as $order)
                                                {{-- @foreach ($products as $product) --}}
                                                    {{-- @if ($product->id == $cart->product_id) --}}

                                                        @php
                                                            $year = \Carbon\Carbon::parse($order->created_at)->year;
                                                            $dateOnly = \Carbon\Carbon::parse($order->created_at)->toDateString();
                                                        @endphp

                                                        <tr class="cartRow">
                                                            <td class="fw-bold">
                                                                <a href="{{ route('OrderDetails', $order->id) }}"> 1-{{$year}}-0926-37755-{{$order->id}}</a>
                                                            </td>

                                                            <td class="tdCenter">{{ $dateOnly }}</td>
                                                            <td class="tdCenter">{{ $order->payment_total }}</td>
                                                            <td class="tdCenter">{{ $order->payment_method }}</td>

                                                            @if ($order->order_status == "Waiting for Payment")
                                                                <td class="tdCenter">{{ $order->order_status }}</td>

                                                                @if (Auth::user()->role == "admin")
                                                                    <td class="tdCenter"></td>

                                                                @else
                                                                    <td class="tdCenter">
                                                                        <form method="POST" action="{{ route('PayOrder', $order->id) }}">
                                                                            @csrf
                                                                            <button class="btn btn-warning btn-md" type="submit">Pay Now</button>
                                                                        </form>
                                                                    </td>
                                                                @endif

                                                            @else

                                                                <td class="tdCenter">{{ $order->order_status }}</td>

                                                                @if (Auth::user()->role == "admin")

                                                                    @if ($order->order_status == "Paid")
                                                                        <td class="tdCenter">
                                                                            <form method="POST" action="{{ route('ShipOrder', $order->id) }}">
                                                                                @csrf
                                                                                <button class="btn btn-info btn-md" type="submit">Ship Now</button>
                                                                            </form>
                                                                        </td>

                                                                    @else
                                                                        @if ($order->order_status == "Order is being shipped")
                                                                            <td class="tdCenter">
                                                                                <form method="POST" action="{{ route('OrderShipped', $order->id) }}">
                                                                                    @csrf
                                                                                    <button class="btn btn-info btn-md" type="submit">Complete</button>
                                                                                </form>
                                                                            </td>

                                                                        @else
                                                                            @if ($order->order_status == "Order has arrived")
                                                                                <td class="tdCenter"></td>

                                                                            @else
                                                                                @if ($order->order_status == "Complete")
                                                                                    <td class="tdCenter"></td>
                                                                                @endif

                                                                            @endif

                                                                        @endif

                                                                    @endif

                                                                @else

                                                                    @if ($order->order_status == "Order has arrived")
                                                                        <td class="tdCenter">
                                                                            <form method="POST" action="{{ route('ReceiveOrder', $order->id) }}">
                                                                                @csrf
                                                                                <button class="btn btn-success btn-md" type="submit">Receive</button>
                                                                            </form>
                                                                        </td>

                                                                    @else
                                                                        <td class="tdCenter"></td>

                                                                    @endif

                                                                @endif

                                                            @endif

                                                            @php
                                                                $isThereRecords++;
                                                            @endphp
                                                        </tr>

                                                    {{-- @endif --}}
                                                {{-- @endforeach --}}
                                            @endforeach


                                        </tbody>
                                    </table>

                                    @if ($isThereRecords > 0)

                                    @else
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">No Records found in your Order History.</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    @endif



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
