<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Shopping Cart</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
@include('navigation')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
        <h1 class="text-2xl font-bold my-4">Shopping Cart</h1>
        <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
            Checkout
        </button>
    </div>
    @foreach(session('cart') as $id => $details)
        <div class="mt-8">
            <div class="flex flex-col md:flex-row border-b border-gray-400 py-4">
                <div class="flex-shrink-0">
                    <img src="{{$details['picture']}}" alt="Product image" class="w-32 h-32 object-cover mx-auto"
                         style="width: 2em">
                </div>
                <div class="mt-4 md:mt-0 md:ml-6 flex-grow"> <!-- Add flex-grow here -->
                    <h2 class="text-lg font-bold">{{$details['name']}}</h2>
                    <div class="mt-4 flex items-center">
                        <span class="mr-2 text-gray-600">Quantity:</span>
                        <div class="flex items-center">
                            <button class="bg-gray-200 rounded-l-lg px-2 py-1 decrement">-</button>
                            <span class="mx-2 text-gray-600 quantity">{{$details['quantity']}}</span>
                            <button class="bg-gray-200 rounded-r-lg px-2 py-1 increment">+</button>
                        </div>
                        <span class="ms-5 font-bold" data-price="{{$details['price']}}">${{$details['price']}}</span>
                        {{--                        <span class="ms-5 font-bold">${{$details['price']}}</span>--}}
                    </div>
                </div>
                <div class="mt-10  md:ml-6">
                    <a href="{{route('remove.from.cart', $id)}}"
                       class="text-red-500 hover:text-red-600 underline font-semibold">Remove</a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="flex justify-end items-center mt-8">
        <span class="text-gray-600 mr-4">Subtotal:</span>
        <span class="text-xl font-bold">${{ array_reduce(session('cart'), function ($carry, $item) {
        return $carry + ($item['price'] * $item['quantity']);
    }, 0) }}</span>
    </div>
</div>
@if(Session::has('success'))
    <div id="modal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"
         role="dialog" aria-modal="true">
        <div
            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                 aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                  aria-hidden="true">&#8203;</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-green-500 flex"
                                id="modal-title">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Success
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    {{ Session::get('success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="closeModal" type="button"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
<script>
    window.onload = function () {
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        if (modal.style.display === 'none') {
            modal.classList.remove('modal-closed');
            modal.classList.add('modal-open');
        }

        closeModal.addEventListener('click', function () {
            modal.classList.remove('modal-open');
            modal.classList.add('modal-closed');
        });
    }
    // window.onload = function () {
    //     // Get all the increment and decrement buttons
    //     const incrementButtons = document.querySelectorAll('.increment');
    //     const decrementButtons = document.querySelectorAll('.decrement');
    //
    //     // Add event listeners to the increment buttons
    //     incrementButtons.forEach(function (button) {
    //         button.addEventListener('click', function () {
    //             const quantityElement = this.parentElement.querySelector('.quantity');
    //             const priceElement = this.parentElement.nextElementSibling;
    //             const pricePerItem = parseFloat(priceElement.dataset.price);
    //
    //             // Increment the quantity
    //             const quantity = parseInt(quantityElement.innerText, 10) + 1;
    //             quantityElement.innerText = quantity;
    //
    //             // Update the total price for this item
    //             priceElement.innerText = '$' + (pricePerItem * quantity).toFixed(2);
    //         });
    //     });
    //
    //     // Add event listeners to the decrement buttons
    //     decrementButtons.forEach(function (button) {
    //         button.addEventListener('click', function () {
    //             const quantityElement = this.parentElement.querySelector('.quantity');
    //             const priceElement = this.parentElement.nextElementSibling;
    //             const pricePerItem = parseFloat(priceElement.dataset.price);
    //
    //             // Decrement the quantity (but don't go below 1)
    //             const quantity = Math.max(1, parseInt(quantityElement.innerText, 10) - 1);
    //             quantityElement.innerText = quantity;
    //
    //             // Update the total price for this item
    //             priceElement.innerText = '$' + (pricePerItem * quantity).toFixed(2);
    //         });
    //     });
    // }
</script>
</body>
</html>
