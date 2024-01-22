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

<section class="py-16 text-white bg-[#1d232a]">
    <div class="container mx-auto content">
        <div class="text-center mb-10 text-gray">
            <h2 class="text-3xl font-semibold leading-tight ">Our Contact</h2>
            <p class=" mt-2">We are always ready to serve you!</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="mb-8 ml-10">
                <h3 class="text-xl font-semibold mb-4">Contact Info</h3>
                <p class="">Address: 123 6th St. Melbourne, FL 32904</p>
                <p class="">Phone: +659874123, +659874124</p>
                <p class="">Email: yourname@email.com</p>
            </div>
            {{-- 2 --}}
            <div class="mr-10 ml-10">
                <h3 class="text-xl font-semibold mb-4">Send Message</h3>
                <form action="#" method="POST">
                   
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium">Full name</label>
                        <input type="text" id="name" name="name" class="text-black w-full px-4 py-2 border rounded-md">
                    </div>
                    @error('name')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium ">Email</label>
                        <input type="email" id="email" name="email" class=" text-black w-full px-4 py-2 border rounded-md">
                    </div>
                    @error('email')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium ">Message Content</label>
                        <textarea id="message" name="message" rows="4" class=" text-black w-full px-4 py-2 border rounded-md"></textarea>
                    </div>
                    @error('message')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    @csrf
                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition duration-300 block mx-auto text-center">
                        Send!! <i class="fas fa-plane"></i>
                    </button>
                </form>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
<style>
    .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.content {
  animation: fadeInUp 0.5s ease-out;
  animation-fill-mode: backwards;
}

@keyframes fly {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(100px);
    }
    100% {
        transform: translateX(0px);
    }
}

button:active i {
    animation: fly 0.2s linear forwards;
}
    @keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }

    @keyframes slideIn {
        0% {transform: translateY(-100%);}
        100% {transform: translateY(0);}
    }

    @keyframes grow {
        0% {transform: scale(1);}
        100% {transform: scale(1.05);}
    }

    @keyframes jump {
        0% {transform: translateY(0);}
        50% {transform: translateY(-10px);}
        100% {transform: translateY(0);}
    }

    h2, h3, p {
        animation-duration: 2s;
        animation-fill-mode: forwards;
    }

    h2 {
        animation-name: fadeIn;
    }

    h3, p {
        animation-name: slideIn;
    }

    input, textarea {
        transition: all 0.3s ease;
    }

    input:hover, textarea:hover {
        transform: scale(1.05);
    }

    button {
        transition: all 0.3s ease;
    }

    button:active {
        animation-name: jump;
        animation-duration: 0.3s;
    }
</style>
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
<script>
    document.querySelector('button').addEventListener('click', createFirework);
    function createFirework() {
        const firework = document.createElement('div');
        firework.classList.add('firework');
        document.body.appendChild(firework);

        setTimeout(() => {
            firework.remove();
        }, 2000);
    }
</script>
</body>
</html>