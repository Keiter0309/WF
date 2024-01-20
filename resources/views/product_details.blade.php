<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<style>
    *{
        font-family: laila;
    }
</style>
<body>
<div class="navbar bg-[#b5a46d] text-white h-10" id="navbar">
    <div class="navbar-start">
        <ul class="flex space-x-14 ms-5 tex-lg font-semibold">
            <li class="hover:text-gray-500 transition-all duration-300"><a class="" href="">Add to cart</a></li>
            <li class="hover:text-gray-500 transition-all duration-300"><a href="">Checkout</a></li>
            <li class="hover:text-gray-500 transition-all duration-300"><a href="">FAQ</a></li>
        </ul>
    </div>
    <div class="navbar navbar-end">
        <button class="btn btn-ghost" id="searchButton">
            <i class="fa fa-search text-2xl"></i>
        </button>
        @if(Auth::check())
            <div class="dropdown dropdown-end">
                <a href="{{route('cart')}}" tabindex="0" role="button" class="btn btn-ghost btn-circle text-white">
                    <div class="indicator ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="badge badge-sm indicator-item"></span>
                    </div>
                </a>
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg text-black">8 Items</span>
                        <span class="text-info">Subtotal: $999</span>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">View cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(Auth::check())
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                             src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"/>
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-black">
                    @auth
                        <li><a href="">Hi, {{Auth::user()->name}}</a></li>
                    @endauth
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>
                            <form action="/logout" method="post">
                                @csrf
                                <button>Logout</button>
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
        @endif
        @if(!Auth::check())
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                             src="https://cdn5.vectorstock.com/i/1000x1000/75/09/smiling-avatar-boy-graphic-vector-9437509.jpg"/>
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-black">
                    <li>
                        <a class="justify-between" href="/signup">
                            Sign Up
                        </a>
                    </li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        @endif
    </div>
</div>
<div class="navbar bg-[#313131]" id="scroll">
    <div class="navbar-start" id="start"></div>
    <div class="navbar navbar-start text-white lg:hidden">
        <a href="" class="text-xl">Royal Terroir</a>
    </div>
    <div class="navbar-center hidden lg:flex text-xl">
        <ul class="menu menu-horizontal px-1 text-white text-xl">
            <li class="hover:text-[#b5a46d] transition-all duration-300">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="hover:text-[#b5a46d] transition-all duration-300">
                <a href="">Our Story</a>
            </li>
            <li class="">
                <p class="text-2xl">Royal Terroir</p>
            </li>
            <li class="hover:text-[#b5a46d] transition-all duration-300">
                <a href="">About</a>
            </li>
            <li class="hover:text-[#b5a46d] transition-all duration-300">
                <a>Contact</a>
            </li>
        </ul>
    </div>
    <div class="navbar-end lg:hidden text-white">
        <div class="dropdown float-right flex" id="">
            <button class="btn btn-ghost" id="searchButton1">
                <i class="fa fa-search text-lg"></i>
            </button>
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden" id="sidebarButton">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 " fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="navbar-end" id="end">

    </div>
</div>
<aside id="">
    <div class="h-screen w-72 bg-gray-900 shadow-lg fixed top-0 left-0 sidebar-hidden rounded-r-xl"
         id="sidebar">
        <div class="flex justify-center">
            <h1 class="text-center text-white text-3xl py-7 ms-3">Royal Terroir</h1>
            <button class="text-white py-8 ms-3 hover:text-red-500 duration-150 ease-in-out transition-all"
                    id="closeSidebarButton">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-11.293a1 1 0 00-1.414 0l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293a1 1 0 000-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
        <ul class="text-xl mt-8 text-white space-x-14 space-y-14">
            <li><a href=""></a></li>
            <li class="hover:text-[#b5a46d] transition-all duration-300"><a href="">Home</a></li>
            <li class="hover:text-[#b5a46d] transition-all duration-300"><a href="">Our Story</a></li>
            <li class="hover:text-[#b5a46d] transition-all duration-300"><a href="">About</a></li>
            <li class="hover:text-[#b5a46d] transition-all duration-300"><a href="">Contact</a></li>
            <li class="hover:text-[#b5a46d] transition-all duration-300"><a href="">More</a></li>
        </ul>
    </div>
    <div id="overlay"
         class="fixed inset-0 bg-black opacity-0 pointer-events-none transition-opacity duration-500 ease-in-out"></div>
</aside>
<section class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 transition-all w-full" id="searchBar" style="transform: translateY(100%);">
    <div class="bg-transparent p-4 rounded w-1/2">
        <button class="float-right mb-20" onclick="toggleSearchBar()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-10 w-10 text-white hover:text-red-500 transition-all duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
                <form action="{{route('search')}}">
                    @csrf
                    <input type="text" name="query" id="search" placeholder="Search..." class="border focus:outline-none focus:ring focus:ring-indigo-500 rounded-full py-2 px-3 w-full">
                    <button type="submit" class="float-right mt-3 rounded-full bg-[#b5a46d] transition-all duration-300 hover:bg-slate-400 p-3 hover:text-white">Search</button>
                </form>
    </div>
</section>
<section class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 transition-all w-full" id="searchBar" style="transform: translateY(100%);">
    <div class="bg-transparent p-4 rounded w-1/2">
        <button class="float-right mb-20" onclick="toggleSearchBar1()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-10 w-10 text-white hover:text-red-500 transition-all duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
                <form action="{{route('search')}}">
                    @csrf
                    <input type="text" name="query" id="search" placeholder="Search..." class="border focus:outline-none focus:ring focus:ring-indigo-500 rounded-full py-2 px-3 w-full">
                    <button type="submit" class="float-right mt-3 rounded-full bg-[#b5a46d] transition-all duration-300 hover:bg-slate-400 p-3 hover:text-white">Search</button>
                </form>
    </div>
</section>

<!-- Product Details Section -->
<div class="container mx-auto mt-8 p-12 bg-white rounded-lg shadow-md sm:w-100 w-3/4 mx-auto">
    <div class="flex flex-col sm:flex-row">
        <!-- Left Column - Product Details -->
        <div class="w-full sm:w-1/2 pr-8">
            <p class="text-gray-700 text-sm">ID: {{ $wine->id }}</p>
            <h1 class="text-3xl font-semibold text-gray-900 mb-4">{{ $wine->name }}</h1>
            <p class="text-gray-700">Year: {{ $wine->year }}</p>
            <p class="text-gray-700">Grapes: {{ $wine->grapes }}</p>
            <p class="text-gray-700">Country: {{ $wine->country }}</p>
            <p class="text-gray-700">Region: {{ $wine->region }}</p>
            <p class="mt-4 text-gray-700">{{ $wine->description }}</p>
            <p class="mt-4 text-2xl font-bold text-indigo-700">${{ $wine->price }}</p>
        </div>

        <!-- Right Column - Product Image -->
        <style>
            @keyframes fade-in-up {
                0% {
                    transform: translateY(20px);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .animate-fade-in-up {
                animation: fade-in-up 1s ease-out forwards;
            }
        </style>
        <div class="w-full sm:w-1/2 sm:pl-40">
            <img src="{{ asset('storage/' . $wine->picture) }}" alt="{{ $wine->name }}" class="w-64 h-64 object-contain rounded-lg shadow-md transform transition duration-500 ease-in-out translate-y-10 opacity-0 animate-fade-in-up">
        </div>
    </div>

    {{-- <!-- Add to Cart Section -->
    <section class="py-16">
        <div class="mt-8">
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <h3 class="text-md font-bold mb-2">{{ $wine->name }}</h3>
                <p class="text-gray-600">{{ $wine->description }}</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-gray-800 font-bold">${{ $wine->price }}</span>
                    <form action="{{ route('add.to.cart', $wine->id) }}" method="post" class="flex items-center">
                        @csrf
                        <input type="number" id="quantity" name="quantity" value="1" min="1" class="w-16 px-2 py-1 border rounded mr-4">
                        <button type="submit" class="bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 transition duration-300">
                            Add to Cart
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Product Section -->
<section class="py-16">
    <div class="mt-8">
        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            <h3 class="text-md font-bold mb-2">{{ $wine->name }}</h3>
            <p class="text-gray-600">{{ $wine->description }}</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-gray-800 font-bold">${{ $wine->price }}</span>
                                <form id="add-to-cart-form" action="{{route('add.to.cart', $wine->id)}}" method="post">
                                    @csrf
                                    <div class="mt-4 flex justify-between items-center">
                                        <input type="number" id="quantity" name="quantity" value="1" min="1" class="w-16 px-2 py-1 border rounded mr-4">
                                        <a href="{{route('add.to.cart', $wine->id)}}"
                                            class="bg-black text-white px-4 py-2 rounded-full hover:bg-gray-800 ">
                                             Add to Cart
                                         </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </a>
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
                                <button id="closeModal" type="button"
                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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
                                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
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
        </div>
    </div>
</section>




<footer class="bg-black text-white py-8">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 LuxuryWines. All Rights Reserved.</p>
        <p>⚠️ Under the age of 18 is not allowed to use alcohol ⚠️</p>
    </div>
</footer>

<script>
    const searchButton = document.getElementById('searchButton');
    const searchBar = document.getElementById('searchBar');

    function toggleSearchBar() {
        if (searchBar.style.transform === "translateY(100%)") {
            searchBar.style.transform = "translateY(0)";
        } else {
            searchBar.style.transform = "translateY(100%)";
        }
    }
    searchButton.addEventListener('click', toggleSearchBar);
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const sidebarButton = document.getElementById('sidebarButton');
    sidebarButton.addEventListener('click', () => {
        sidebar.classList.add('sidebar-visible');
        overlay.classList.remove('opacity-0');
        overlay.classList.add('opacity-50', 'pointer-events-auto');
    });
    const closeSidebarButton = document.getElementById('closeSidebarButton');
    closeSidebarButton.addEventListener('click', () => {
        sidebar.classList.remove('sidebar-visible');
        overlay.classList.remove('opacity-50', 'pointer-events-auto');
        overlay.classList.add('opacity-0');
    });
    window.addEventListener('scroll', () => {
        const navbar = document.getElementById('scroll')
        if (window.scrollY > 0) {
            navbar.classList.add('fixed-navbar');
            navbar.classList.add('bg-opacity-70');
        } else {
            navbar.classList.remove('fixed-navbar');
            navbar.classList.remove('bg-opacity-70');
        }
    });
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
