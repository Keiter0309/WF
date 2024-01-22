<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Success</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-['laila']">
@include('navigation')
<div class="flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md text-center">
        <h1 class="text-2xl font-bold mb-4">Order Successful!</h1>
        <p class="text-gray-700 mb-4">Thank you for your purchase. Your order is now being processed.</p>
        <a href="/" class="inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Back to Home</a>
    </div>
</div>

</body>
</html>
