<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Store</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
</head>
<body class="font-['laila']">
@include('navigation')
<div class="flex">
    <!-- Filter section -->
    <div class="w-1/6 p-4">
        <h2 class="font-bold mb-4">Filter by Price</h2>
        <form action="{{ route('store') }}" method="GET">
            <div class="mb-4">
                <label for="min-price" class="block text-sm font-bold mb-2">Minimum Price</label>
                <input type="number" id="min-price" name="min_price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="0" step="0.01">
            </div>
            <div class="mb-4">
                <label for="max-price" class="block text-sm font-bold mb-2">Maximum Price</label>
                <input type="number" id="max-price" name="max_price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="0" step="0.01">
            </div>
            <div class="mb-4">
                <label for="sort-price" class="block text-sm font-bold mb-2">Sort Price</label>
                <select id="sort-price" name="sort_price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="asc">Low to High</option>
                    <option value="desc">High to Low</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Apply</button>
        </form>
    </div>
    <div class="w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach ($wines as $wine)
            <div
                class="bg-white shadow-md rounded-lg overflow-hidden hover:cursor-pointer transition-all duration-300 group relative">
                <img src="{{$wine->picture}}" alt="Wine" style="width: 5em"
                     class="object-cover mx-auto w-full h-72 transform hover:scale-105">
                <div
                    class="bg-gray-50 p-6 absolute bottom-0 shadow-lg transform transition-transform duration-300 group-hover:translate-y-0 translate-y-full w-full">
                    <h3 class="text-md font-bold mb-2">{{$wine->name}}</h3>
                    <p class="text-gray-600">{{$wine->description}}</p>
                    <div class="mt-4 flex justify-between items-center">
                        {{-- <span class="text-gray-800 font-bold">${{$wine->price}}</span> --}}
                        <form action="{{route('details', $wine->id)}}">
                            @csrf
                            <a href="{{route('details', $wine->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mr-2"
                                     fill="none"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </form>
                        <form action="{{route('add.to.cart', $wine->id)}}" method="post">
                            @csrf
                            <a href="{{route('add.to.cart', $wine->id)}}"
                               class="bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition duration-300">
                                Add to Cart
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        @if(Session::has('success'))
            <div id="modal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                 aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                    </div>
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                          aria-hidden="true">&#8203;</span>
                    <div
                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-green-500 flex" id="modal-title">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none"
                                             viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
    </div>
</div>
    @if(Session::has('error'))
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
                                <h3 class="text-lg leading-6 font-medium text-red-500 flex" id="modal-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mr-2"
                                         fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Error
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        {{ Session::get('error') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <a href="{{route('login')}}" id="closeModal" type="button"
                           class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Close
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="flex justify-center my-10">
        {{ $wines->links('vendor.pagination.custom') }}
    </div>
    <footer class="footer-1 py-8 sm:py-12 font-['laila']" style="" id="footer_main">
        <div class="container mx-auto px-4">
            <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6">
                    <h5 class="text-xl font-bold mb-6">About Us</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent ">The point of using Lorem Ipsum is that it
                                has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                                content here', making it look like readable.</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Read
                                More</a>
                        </li>
    
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
                    <h5 class="text-xl font-bold mb-6">Categories</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Cheese</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Event
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Sommerliers
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Tasting
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">About</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Locations</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Privacy</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Terms</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
                    <h5 class="text-xl font-bold mb-6">Conntact Us</h5>
                    <ul class="list-none footer-links">
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent">
                                123 6th St. Melbourne, FL 32904</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent">+659874123, +659874124</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                               class="border-b border-solid border-transparent">yourname@email.com</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 mt-4 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
                    <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-left">Stay connected</h5>
                    <div class="flex sm:justify-center xl:justify-start">
                        <a href=""
                           class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href=""
                           class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href=""
                           class="w-8 h-8 border border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-red-600 hover:border-red-600">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script>
        window.onload = function () {
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        if (modal && closeModal) {
            if (modal.style.display === 'none') {
                modal.classList.remove('modal-closed');
                modal.classList.add('modal-open');
            }

            closeModal.addEventListener('click', function () {
                modal.classList.remove('modal-open');
                modal.classList.add('modal-closed');
            });
        }
    }
</script>
</body>
</html>