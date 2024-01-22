<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Profile</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
</head>
<body class=" py-6 flex justify-center items-center min-h-screen">
    <div class="bg-white border border-gray-300 shadow-xl rounded-lg p-8 mt-6 w-96">
        <div class="flex items-center mb-6">
            <img class="h-16 w-16 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Profile image">
        </div>
        <div class="text-center">
            <h2 class="text-xl font-semibold text-gray-800">
                @auth
                    {{ auth()->user()->name}}
                @endauth
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                @auth
                    {{ auth()->user()->email}}
                @endauth
            </p>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.</p>
        </div>
        <div class="mt-6 grid grid-cols-2 gap-4">
            <div>
                <button class="w-full px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Edit Profile
                </button>
            </div>
            <div>
                <button class="w-full px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    Delete Profile
                </button>
            </div>
        </div>
    </div>
</body>
</html>