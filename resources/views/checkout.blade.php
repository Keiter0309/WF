<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('navigation')
<div class="py-16 px-4 md:px-6 2xl:px-0 flex justify-center items-center 2xl:mx-auto 2xl:container">
    <div class="flex flex-col justify-start items-start w-full space-y-9">
        <div class="flex justify-start flex-col items-start space-y-2">
            <button class="flex flex-row items-center text-gray-600 dark:text-white hover:text-gray-500 space-x-1">
                <svg class="fill-stroke" width="14" height="14" viewBox="0 0 14 14" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.91681 7H11.0835" stroke="currentColor" stroke-width="0.666667" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M2.91681 7L5.25014 9.33333" stroke="currentColor" stroke-width="0.666667"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.91681 7.00002L5.25014 4.66669" stroke="currentColor" stroke-width="0.666667"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p class="text-sm leading-none">Back</p>
            </button>
            <p class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800 dark:text-gray-50">
                Checkout</p>
            <p class="text-base leading-normal sm:leading-4 text-gray-600 dark:text-white">Home > Electronics >
                Headphones > Cart > Checkout</p>
        </div>

        <div
            class="flex flex-col xl:flex-row justify-center xl:justify-between space-y-6 xl:space-y-0 xl:space-x-6 w-full">
            <div
                class="xl:w-3/5 flex flex-col sm:flex-row xl:flex-col justify-center items-center bg-gray-100 dark:bg-gray-800 py-7 sm:py-0 xl:py-10 px-10 xl:w-full">
                <div class="flex flex-col justify-start items-start w-full space-y-4">
                    @foreach($cart as $id => $details)
                        <p class="text-xl md:text-2xl leading-normal text-gray-800 dark:text-gray-50">{{$details['name']}}</p>
                        <p class="text-base font-semibold leading-none text-gray-600 dark:text-white">
                            ${{$details['price']}}</p>
                    @endforeach
                </div>
                <div class="mt-6 sm:mt-0 xl:my-10 xl:px-20 w-52 sm:w-96 xl:w-auto">
                    <img src="{{$details['picture']}}" alt="headphones"/>
                </div>
            </div>

            <div class="p-8 bg-gray-100 dark:bg-gray-800 flex flex-col lg:w-full xl:w-3/5">
                <button
                    class="border border-transparent hover:border-gray-300 bg-gray-900 dark:bg-white dark:hover:bg-gray-900 dark:hover:border-gray-900 dark:text-gray-900 dark:hover:text-white hover:bg-white text-white hover:text-gray-900 flex flex-row justify-center items-center space-x-2 py-4 rounded w-full">
                    <div>
                        <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.9099 4.27692C9.6499 4.27692 9.1174 4.87817 8.2399 4.87817C7.34021 4.87817 6.65396 4.28129 5.56208 4.28129C4.49333 4.28129 3.35365 4.93379 2.6299 6.04535C1.61365 7.61285 1.78615 10.565 3.43208 13.08C4.02083 13.9804 4.80708 14.99 5.83833 15.001H5.85708C6.75333 15.001 7.01958 14.4141 8.25302 14.4072H8.27177C9.48677 14.4072 9.73052 14.9975 10.623 14.9975H10.6418C11.673 14.9866 12.5015 13.8679 13.0902 12.971C13.514 12.326 13.6715 12.0022 13.9965 11.2725C11.6155 10.3688 11.233 6.99348 13.5877 5.69942C12.869 4.79942 11.859 4.27817 10.9068 4.27817L10.9099 4.27692Z"
                                fill="currentColor"
                            />
                            <path
                                d="M10.6338 1C9.88379 1.05094 9.00879 1.52844 8.49629 2.15188C8.03129 2.71688 7.64879 3.555 7.79879 4.36781H7.85879C8.65754 4.36781 9.47504 3.88688 9.95254 3.27063C10.4125 2.68406 10.7613 1.85281 10.6338 1V1Z"
                                fill="currentColor"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-base leading-4">Pay</p>
                    </div>
                </button>

                <div class="flex flex-row justify-center items-center mt-6">
                    <hr class="border w-full"/>
                    <p class="flex flex-shrink-0 px-4 text-base leading-4 text-gray-600 dark:text-white">or pay with
                        card</p>
                    <hr class="border w-full"/>
                </div>
                <form action="{{route('checkout.handle')}}" method="post">
                    @csrf
                    <div class="mt-8">
                        <input
                            class="border border-gray-300 p-4 rounded w-full text-base leading-4 placeholder-gray-600 text-gray-600"
                            type="email" name="email" id="email" placeholder="Your Email"/>
                        @if($errors->has('email'))
                            <span class="text-red-500">{{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div class="mt-2 flex-col">
                        <div>
                            <input
                                class="border rounded border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600"
                                type="text" name="name" id="" placeholder="Your Name"/>
                            @if($errors->has('name'))
                                <span class="text-red-500">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2 flex-col">
                        <div>
                            <input
                                class="border rounded border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600"
                                type="number" name="phone" id="" placeholder="Your Phone"/>
                            @if($errors->has('phone'))
                                <span class="text-red-500">{{$errors->first('phone')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2 flex-col">
                        <div>
                            <input
                                class="border rounded border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600"
                                type="text" name="address" id="address" placeholder="Your Address"/>
                            @if($errors->has('address'))
                                <span class="text-red-500">{{$errors->first('address')}}</span>
                            @endif
                        </div>
                    </div>

                    <label class="mt-8 text-base leading-4 text-gray-800 dark:text-gray-50">Country or region</label>
                    <div class="mt-2 flex-col">
                        <div class="relative ">
                            <button id="changetext"
                                    class="text-left border rounded-tr rounded-tl border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600 bg-white"
                                    type="button" name="" id="">Viet Nam
                            </button>

                            <img onclick="showMenu(true)" id="closeIcon"
                                 class="cursor-pointer absolute top-4 right-4 dark:hidden"
                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/checkouts-1-svg1.svg"
                                 alt="Dropdown">
                            <img onclick="showMenu(true)" id="openIcon"
                                 class="cursor-pointer hidden transform rotate-180 absolute top-4 right-4 hidden transform rotate-180 dark:hidden"
                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/checkouts-1-svg1.svg"
                                 alt="Dropdown">
                            <img onclick="showMenu(true)" id="closeIcon"
                                 class="cursor-pointer absolute top-4 right-4 hidden dark:block"
                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/checkouts-1-svg1dark.svg"
                                 alt="Dropdown">
                            <img onclick="showMenu(true)" id="openIcon"
                                 class="cursor-pointer hidden transform rotate-180 absolute top-4 right-4 hidden dark:block"
                                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/checkouts-1-svg1dark.svg"
                                 alt="Dropdown">
                            <div id="dropdown"
                                 class=" hidden  z-10 w-full flex bg-gray-50 justify-start flex-col text-gray-600">
                                <div onclick="changeText('US')"
                                     class="cursor-pointer hover:bg-gray-800 hover:text-white px-4 py-2">US
                                </div>
                                <div onclick="changeText('Russia')"
                                     class="cursor-pointer hover:bg-gray-800 hover:text-white px-4 py-2">Russia
                                </div>
                                <div onclick="changeText('UK')"
                                     class="cursor-pointer hover:bg-gray-800 hover:text-white px-4 py-2">UK
                                </div>
                            </div>
                        </div>
                        <input
                            class="border rounded-bl rounded-br border-gray-300 p-4 w-full text-base leading-4 placeholder-gray-600 text-gray-600"
                            type="text" name="zip" id="" placeholder="ZIP"/>
                        @if($errors->has('zip'))
                            <span class="text-red-500">{{$errors->first('zip')}}</span>
                        @endif
                    </div>
                    <form action="{{route('checkout.handle')}}" method="post">
                        @csrf
                        <button
                            class="mt-8 border border-transparent hover:border-gray-300 dark:bg-white dark:hover:bg-gray-900 dark:text-gray-900 dark:hover:text-white dark:border-transparent bg-gray-900 hover:bg-white text-white hover:text-gray-900 flex justify-center items-center py-4 rounded w-full">
                            <div>
                                <p class="text-base leading-4">Pay ${{$total}}</p>
                            </div>
                        </button>
                    </form>
                </form>
            </div>

        </div>
    </div>
</div>
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
<script>
    let closeIcon = document.getElementById("closeIcon");
    let openIcon = document.getElementById("openIcon");
    let dropdown = document.getElementById("dropdown");
    let text = document.getElementById("changetext");

    const showMenu = (flag) => {
        if (flag) {
            closeIcon.classList.toggle("hidden");
            openIcon.classList.toggle("hidden");
            dropdown.classList.toggle("hidden");
        } else {
            closeIcon.classList.toggle("hidden");
            openIcon.classList.toggle("hidden");
            dropdown.classList.toggle("hidden");
        }
    };

    const changeText = (country) => {
        text.innerHTML = country;
        closeIcon.classList.toggle("hidden");
        openIcon.classList.toggle("hidden");
        dropdown.classList.toggle("hidden");
    };

</script>
</body>
</html>
