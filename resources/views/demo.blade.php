<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Wine Shop</title>
    <link rel="stylesheet" href="path/to/your/css/file.css">
</head>

<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .carousel {
        display: grid;
        grid-template-columns: repeat(3, 100%);
        grid-gap: 0;
        overflow: hidden;
        width: 100%;
        height: 100vh;
        position: relative;
    }

    .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-item {
        width: 100%;
        height: 100%;
    }

    .carousel-button {
        position: absolute;
        top: 50%;
        font-size: 24px;
        color: white;
        cursor: pointer;
        background: none;
        border: none;
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
    }

    .carousel-indicator {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ccc;
        cursor: pointer;
    }

    .carousel-indicator.active {
        background-color: #333;
    }
</style>

<body class="bg-gray-100 font-['Laila']" style="overflow-x: hidden;">
<!-- Navigation -->
<nav>
    @include('navigation')
</nav>

<!-- Hero Section -->
<section class="py-20 bg-cover bg-center h-screen flex items-center justify-center z-50">
    <!-- Carousel -->
    <div class="carousel relative overflow-hidden">

        <div class="carousel-inner flex">
            <!-- Item 1 -->

            <div class="carousel-item ">
                <img
                    src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.15752-9/403402162_1780640389099953_1472303949310716204_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=y1PGr8jH7UoAX-6euaP&_nc_ht=scontent.fsgn5-5.fna&oh=03_AdSdfdPA4Bw-K9DaYeG0vfikxxbyMu3Y-lrmR4tnStFs6g&oe=65A53C6E"
                    alt="Wine 1" class="w-full h-full object-cover object-center">

            </div>
            <!-- Item 2 -->
            <div class="carousel-item">
                <img
                    src="https://scontent.fsgn5-15.fna.fbcdn.net/v/t1.15752-9/385559678_6895473820546134_8535414984234801751_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=QzVm2p0LergAX8T5nw5&_nc_ht=scontent.fsgn5-15.fna&oh=03_AdTLt5rFrBZYwNUbSBofmwd4MBkx7df-zWPXFxpnEhDrYA&oe=65A545C0"
                    alt="Wine 2" class="w-full h-full object-cover object-center">
            </div>
        </div>

        <button class="carousel-button prev" onclick="prevSlide()">❮</button>
        <button class="carousel-button next" onclick="nextSlide()">❯</button>
        <div class="container mx-auto text-center" id="text-1">
            <h1 class="text-5xl font-extrabold text-white mb-4">Indulge in Luxury Wines</h1>
            <p class="text-lg text-white">Discover a collection of exquisite wines from renowned vineyards.</p>
            <a href="#"
               class="mt-8 bg-white text-black py-3 px-8 rounded-full inline-block hover:bg-gray-300 transition duration-300">Explore
                Our Wines</a>
        </div>
        <div class="carousel-indicators">
            <div class="carousel-indicator" onclick="goToSlide(0)"></div>
            <div class="carousel-indicator" onclick="goToSlide(1)"></div>
        </div>
    </div>
</section>
<!-- Product Section Wrapper -->
<section class="py-16 bg-white">
    <div class="wpb">
        <!-- item 1 -->
        <div class="img-wrapper z-0">
            <img
                src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_features1.jpg"
                alt="">
        </div>
        <div class="border-solid border " id="wpb_wrapper">
            <h3 class="text-2xl">Vineyard</h3>
            <p class="text-base opacity-75">It is a long established fact that a reader will be distracted by the
                readable content of a page when looking at its layout.</p>
        </div>
        <!-- item 2 -->

        <div class="img-wrapper z-0">
            <img
                src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_features3.jpg"
                alt="">
        </div>
        <div class="border-solid border " id="wpb_wrapper">
            <h3 class="text-2xl">Exclusive Wines</h3>
            <p class="text-base opacity-75">It is a long established fact that a reader will be distracted by the
                readable content of a page when looking at its layout.</p>
        </div>
        <!-- item 3 -->
        <div class="img-wrapper z-0">
            <img
                src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_features2.jpg"
                alt="">
        </div>
        <div class="border-solid border " id="wpb_wrapper">
            <h3 class="text-2xl">Winery Events</h3>
            <p class="text-base opacity-75">It is a long established fact that a reader will be distracted by the
                readable content of a page when looking at its layout.</p>
        </div>
    </div>
</section>
<!-- item columns sections  -->
<section>

    <div class="columns-2">
        <!-- component -->
        <!-- This is an example component -->
        <div class="max-w-2xl mx-auto w-full h-full">
            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <span
                            class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                            Slide</span>
                        <img
                            src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_slider2.jpg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_slider3.jpg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_slider4.jpg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img
                            src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_slider1.jpg"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
        <div class="font-['laila']">
            <h2 class="text-xl font-medium pt-8">Ancient Wine Areas In The ChiantiClassico Region</h2>
            <p class="pt-5 pb-8">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’,
                making it look like readable English. Many desktop publishing packages and web page editors now use
                Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites
                still in their infancy. Various versions have evolved over the years, sometimes by accident,
                sometimes on purpose (injected humour and the like).</p>
            <button class="btn-col">
                DISCOVER MORE
            </button>
        </div>
    </div>
</section>
<!-- story section -->
<section class="py-16 bg-white container mx-auto w-full font-['laila']">
    <div class="container mx-auto px-4">
        <h2 class="font-mono text-4xl text-center font-semibold">Our History</h2>
        <img class="mx-auto rounded-lg md:w-3/4"
             src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_bg1.jpg"
             alt="Vineyards Image">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 mt-8 text-center">
            <div class="">
                <p class="font-bold">1989</p>
                <p class="font-medium">The First Vineyards</p>
                <p class="opacity-75">There are many variations of passages of Lorem Ipsum available</p>
            </div>
            <div>
                <p class="font-bold">2009</p>
                <p class="font-medium">Expansion</p>
                <p class="opacity-75">There are many variations of passages of Lorem Ipsum available</p>
            </div>
            <div>
                <p class="font-bold">1999</p>
                <p class="font-medium">Founded</p>
                <p class="opacity-75">There are many variations of passages of Lorem Ipsum available</p>
            </div>
            <div>
                <p class="font-bold">2019</p>
                <p class="font-medium">Recent Achievements</p>
                <p class="opacity-75">There are many variations of passages of Lorem Ipsum available</p>
            </div>
        </div>
        <div>
            <img class="mx-auto pt-5 md:w-3/4"
                 src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_timeline2.png"
                 alt="Timeline Image">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 mt-8 font-[laila]">
            <div class="pl-28">
                <h2 class="text-2xl font-bold">What We Do?</h2>
                <p class="pt-5">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don’t look even slightly
                    believable.
                </p>
                <p class="pt-5">
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
                    structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                    therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p>
            </div>
            <div class="pl-28">
                <h2 class="text-2xl font-bold">How We Work</h2>
                <div class="flex items-center pt-5">
                    <svg class="h-8 w-8 text-yellow-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
                    </svg>
                    <p class="pl-3">Which don't look even slightly believable</p>
                </div>
                <div class="flex items-center pt-5">
                    <svg class="h-8 w-8 text-yellow-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
                    </svg>
                    <p class="pl-3">It uses a dictionary of over 200 Latin words</p>
                </div>
                <div class="flex items-center pt-5">
                    <svg class="h-8 w-8 text-yellow-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                         stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path
                            d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"/>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
                    </svg>
                    <p class="pl-3">Which don't look even slightly believable</p>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- Top Wine On Sale This Month  sections  -->
<section class="py-16 bg-white" id="top-wine">
    <img class="w-full"
         src="https://popmenucloud.com/cdn-cgi/image/width%3D1200%2Cheight%3D1200%2Cfit%3Dscale-down%2Cformat%3Dauto%2Cquality%3D60/hxcrwjle/2d8a0d96-9461-4e7b-9f9a-f00c1f5cd819.jpg"
         alt="">
    <div class="container mx-auto text-center font-mono font-bold grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2"
         id="text-2">
        <div></div>
        <div class="sm:pl-8 lg:pl-8">
            <!-- Thêm padding left cho responsiveness -->
            <p class="text-lg text-white">Top Wine On Sale This Month</p>
            <h1 class="text-6xl font-extrabold text-white mb-4">Premium Quality</h1>
            <p class="text-3xl text-white">UP TO 50% OFF</p>
            <button class="btn-col">Shop now</button>
        </div>
    </div>
</section>

<!-- Product Section -->
<section class=" bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-10 text-center">Featured Wines</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
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
    <div class="flex justify-center my-10">
        {{ $wines->links('vendor.pagination.custom') }}
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
</section>
<section>
    <div class="font-['laila'] container mx-auto relative" id="contact">
        <!-- img -->
        <img src="https://scontent.fsgn5-10.fna.fbcdn.net/v/t1.15752-9/410203617_739718257589056_6776045944098537520_n.png?_nc_cat=107&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=k4fiv-uscUAAX_VWXCG&_nc_ht=scontent.fsgn5-10.fna&oh=03_AdRyQezCmJJDsvYTI6ZIhmpZqz1X5M4I8MDp40ROn2uvXQ&oe=65AE635D"
             alt="" srcset="" class="" style="width: 110rem">
        <!-- content -->
        <div
            class="lg:top-52 lg:left-32 min-[300px]:top-8 min-[300px]:left-1 md:top-28 md:left-14 container mx-auto text-center font-mono font-bold grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 absolute ">
            <div>
                <p class="text-white font-bold text-3xl ">Subscribe Now!</p>
            </div>
            <div class="d-flex">
                <p class="email-contact">
                    <input type="text" placeholder="Enter your email ">
                </p>
            </div>
            <div class="btn-contact min-[300px]:hidden">
                <button><svg class="h-8 w-8 text-white" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z"
                              transform="rotate(-15 12 12) translate(0 -1)" />
                        <line x1="3" y1="21" x2="21" y2="21" />
                    </svg></button>
            </div>
        </div>
        <div>
            <h1 class="text-center text-3xl mt-2">Latest Form Our Blog</h1>
            <div class="mx-auto text-center font-mono font-bold grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 my-5 ms-10">
                <!-- item 1 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-3">
                    <a href="#">
                        <img class="rounded-t-lg"
                             src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_blog3-570x370-370x240.jpg"
                             alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The
                                Power of Bordeaux</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">It is a long established fact
                            that a reader will be distracted by the readable.</p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- item 2 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-2">
                    <a href="#">
                        <img class="rounded-t-lg"
                             src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_blog1-570x370-370x240.jpg"
                             alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taste
                                of Napa</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">There are many variations of
                            passages of Lorem Ipsum available, but the majority have suffered.</p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- item 3 -->
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-3">
                    <a href="#">
                        <img class="rounded-t-lg"
                             src="https://templatebundle.net/wp/moto/netw5/luxury-wine/wp-content/uploads/sites/8/2019/04/lw_blog4-570x370-370x240.jpg"
                             alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Perfect
                                Gifts For Any Occasion</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">It is a long established fact
                            that a reader will be distracted by the readable.</p>
                        <a href="#"
                           class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-1 py-8 sm:py-12 font-mono" style="" id="footer_main">
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

<!-- JavaScript for carousel -->
<script>
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselIndicators = document.querySelectorAll('.carousel-indicator');
    let currentIndex = 0;

    function showSlide(index) {
        const newTransformValue = `translateX(${-index * 100}%)`;
        carouselInner.style.transform = newTransformValue;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % 2;
        updateIndicators();
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex + 1) % 2;
        updateIndicators();
        showSlide(currentIndex);
    }

    function goToSlide(index) {
        currentIndex = index;
        updateIndicators();
        showSlide(currentIndex);
    }

    function updateIndicators() {
        carouselIndicators.forEach((indicator, index) => {
            if (index === currentIndex) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
            }
        });
    }

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
