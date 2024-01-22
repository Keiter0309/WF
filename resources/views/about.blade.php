<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/3.png') }}">
    <title>Royal Terroir</title>
    @vite('resources/css/app.css')
</head>
<body class="font-['laila']">
@include('navigation')
<style>
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.5s ease-in-out;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }
    @keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }

    @keyframes slideIn {
        0% {transform: translateY(-50px);}
        100% {transform: translateY(0);}
    }

    h1, p {
        animation-duration: 2s;
    }

    h1 {
        animation-name: fadeIn;
    }

    p {
        animation-name: slideIn;
    }
</style>
<script>
    window.addEventListener('load', function() {
        var elements = document.querySelectorAll('.fade-in');
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add('visible');
        }
    });
</script>
<div class="container mx-auto px-4 mt-8 fade-in font-['laila']">
    <h1 class="text-4xl font-bold mb-8 text-center">About Royal Terroir</h1>

    <div class="flex flex-wrap">
        <div class="w-full sm:w-1/2 p-4">
            <p class="text-lg mb-4">
                Welcome to Royal Terroir, your go-to destination for exquisite wines. Lorem Ipsum is simply dummy text
                of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen
                book.
            </p>

            <p class="text-lg">
                Our mission is to provide you with the finest selection of wines, curated from the most prestigious
                vineyards around the world. Whether you're a seasoned sommelier or a casual wine enthusiast, Royal
                Terroir has something for everyone.
            </p>
        </div>

        <div class="w-full sm:w-1/2 p-4">
            <img src="https://cellar.asia/vi/wp-content/uploads/sites/6/2020/04/cellar-asia-how-to-buy-wine-1200x800-1.jpg" alt="About Us Image" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer-1 py-8 sm:py-12 font-mono" style="font-family: laila;" id="footer_main">
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
</body>
</html>
