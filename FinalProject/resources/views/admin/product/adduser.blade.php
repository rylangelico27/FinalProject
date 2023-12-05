<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissable fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">

                                <h3 class="mb-4">New Admin</h3>

                                <form method="POST" action="{{ route('NewAdmin') }}">
                                    @csrf

                                    <div>
                                        <x-label for="name" value="{{ __('Name') }}" />
                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="email" value="{{ __('Email') }}" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="password" value="{{ __('Password') }}" />
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-button class="ml-4">
                                            {{ __('Register') }}
                                        </x-button>
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
