<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Terroir - Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/3.png') }}">
    @vite('resources/css/app.css')
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url("https://img.freepik.com/premium-photo/wine-wooden-table-background-blurred-wine-shop-with-bottles-generate-ai_868783-2582.jpg");
            background-repeat: no-repeat;
            background-size: cover;

        }

        .login-container {
            width: 350px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            font-size: 28px;
            font-weight: 600;
            color: #8e44ad;
            margin-bottom: 10px;
        }

        .login-header p {
            font-size: 14px;
            color: #777;
        }

        .login-form label {
            color: #555;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            outline: none;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #8e44ad;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #6c3483;
        }
    </style>
</head>
<body >
<div class="login-container">
    <div class="login-header">
        <h2>Royal Terroir</h2>
        <p>Welcome back! Please log in.</p>
    </div>
    <div class="login-form">
        <form action="/login" method="post">
            @csrf
            <div class="mb-4">
            <label for="email">Email</label>
            <input type="email" class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-300" id="email" name="email" placeholder="Enter Email">
            @if($errors->has('email'))
                <p class="text-red-500 text-sm">{{ $errors->first('email') }}</p>
            @endif
            </div>
            <div class="mb-4">
            <label for="password">Password</label>
            <input type="password" class="border focus:outline-none focus:ring focus:ring-indigo-500 py-2 px-3 rounded w-full transition-all duration-300" id="password" name="password" placeholder="Enter Password">
            @if($errors->has('password'))
                <p class="text-red-500 text-sm">{{ $errors->first('password') }}</p>
            @endif
            </div>
            <div class="text-left text-gray-400 hover:underline hover:text-blue-500 transition-all duration-300 ease-in-out">
                <a href="{{route('signup')}}">Don't have an account? Register</a>
            </div>
            <div class="text-left text-gray-400 hover:underline hover:text-blue-500 transition-all duration-300 mb-3">
                <a href="{{route('forget.password')}}">Forgot your password?</a>
            </div>
            <button type="submit">Login</button>
            @if(Session::has('message'))
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
                                        <h3 class="text-lg leading-6 font-medium text-green-500 flex" id="modal-title">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            Success
                                        </h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">
                                                {{ Session::get('message') }}
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
                                <button id="closeModal" type="button"
                                        class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </form>
    </div>
</div>
</body>
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
</script>
</html>
