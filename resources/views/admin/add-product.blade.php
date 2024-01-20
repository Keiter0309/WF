<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Add Products</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="font-sans">
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-semibold">
            <a href="{{ route('admin') }}">Admin Dashboard</a>
        </div>
        <ul class="flex space-x-4">
            <li><a href="{{ route('admin.products') }}" class="hover:text-gray-300">Manage Products</a></li>
            <li><a href="{{route('admin.orders')}}" class="hover:text-gray-300">Manage Orders</a></li>
            <li><a href="{{ route('admin.users') }}" class="hover:text-gray-300">Manage Users</a></li>
        </ul>
    </div>
</nav>
<div class="container mx-auto mt-10">
    <h2 class="text-4xl font-semibold text-gray-700 mb-8">Add Product</h2>
    <form action="{{route('admin.handle-add-product')}}" method="POST" enctype="multipart/form-data"
          class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Product Name</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Product Name"
                    type="text" name="name" id="name">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Price</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Price"
                    type="text" name="price" id="price">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="region">Region</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Region"
                    type="text" name="region" id="region">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grapes">Grapes</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Grapes"
                    type="text" name="grapes" id="grapes">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Description"
                    type="text" name="description" id="description">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="year">Year</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Year"
                    type="text" name="year" id="year">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="country">Country</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Country"
                    type="text" name="country" id="country">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="picture">Picture</label>
            <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:ring focus:ring-indigo-500 transition-all duration-150 ease-in-out"
                    placeholder="Add Picture"
                    type="text" name="picture" id="picture">
        </div>
        <div class="flex items-center justify-between">
            <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">Add Product
            </button>
        </div>
        @if(Session::has('success'))
            <div id="modal" class="fixed z-10 inset-0 overflow-y-auto"
                 aria-labelledby="modal-title"
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
                                             class="stroke-current shrink-0 h-6 w-6 mr-2"
                                             fill="none"
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
                            <a href="{{route('admin.products')}}" id="closeModal" type="button"
                               class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Close
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </form>
</div>
<script>
    window.onload = function () {
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');
        closeModal.addEventListener('click', function () {
            modal.classList.add('hidden');
        });
    }
</script>
</body>
</html>
