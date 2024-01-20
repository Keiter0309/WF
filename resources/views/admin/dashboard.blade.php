<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Terroir - Admin Dashboard</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

<!-- Navigation Bar -->
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

<!-- Main Content Area -->
<div class="container mx-auto mt-8 p-4" style="height:81vh">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <!-- Recent Orders -->
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-xl font-semibold mb-4">Recent Orders</h2>
            @foreach($recentOrders as $order)
                <div class="flex justify-between items-center py-2">
                    <span class="text-gray-800">{{ $order->name }}</span>
                    <span class="text-gray-500">${{ $order->total }}</span>
                </div>
            @endforeach
        </div>

        <!-- List of Products -->
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-xl font-semibold mb-4">Product List</h2>
            <ul>
                @foreach($products as $product)
                    <li class="flex justify-between items-center py-2">
                        <span class="text-gray-800">{{ $product->name }}</span>
                        <span class="text-gray-500">${{ $product->price }}</span>
                    </li>
                @endforeach
            </ul>
            <!-- Pagination Links -->
            <div class="pt-4">
                {{ $products->links() }}
            </div>
        </div>

        <!-- User Statistics -->
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-xl font-semibold mb-4">User Statistics</h2>
            <p class="text-2xl font-bold text-gray-800">Total Users: {{ $userStatistics }}</p>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto text-center">
        <p class="text-gray-300">&copy; 2024 Your Company. All rights reserved.</p>
        <div class="mt-2">
            <a href="#" class="text-gray-300 hover:text-white mr-4">Privacy Policy</a>
            <a href="#" class="text-gray-300 hover:text-white">Terms of Service</a>
        </div>
    </div>
</footer>

</body>
</html>
