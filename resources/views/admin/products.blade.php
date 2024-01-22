<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Royal Terroir - Products</title>
    <link rel="icon" href="{{ asset('images/3.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-semibold">
            <a href="{{ route('admin') }}">Admin Dashboard</a>
        </div>
        <ul class="flex space-x-4">
            <li><a href="{{ route('admin.products') }}" class="hover:text-gray-300">Manage Products</a></li>
            <li><a href="{{ route('admin.orders') }}" class="hover:text-gray-300">Manage Orders</a></li>
            <li><a href="{{ route('admin.users') }}" class="hover:text-gray-300">Manage Users</a></li>
        </ul>
    </div>
</nav>
<div class="container mx-auto px-6 py-8">
    <div class="flex justify-between">
        <h2 class="text-4xl font-semibold text-gray-700">Products</h2>
        <div class="flex justify-end font-semibold text-gray-700">
            <a href="{{route('admin.add-product')}}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded transition-all duration-300 ease-in-out">Add
                Product</a>
        </div>
    </div>
    <div class="mt-8 mx-auto">
        <table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Image
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Product Name
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Price
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Description
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Year
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    Country
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <img src="{{$product->picture}}" alt="" class="h-10 w-15 mx-auto">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{$product->name}}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{$product->price}}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{$product->description}}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{$product->year}}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">{{$product->country}}</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="{{route('admin.edit-product', $product->id)}}"
                           class="text-indigo-600 hover:text-indigo-900 mr-5">Edit</a>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <form action="{{route('admin.delete-product', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-indigo-600 hover:text-indigo-900 mr-5">Delete</button>
                        </form>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- Pagination Links -->
        <div class="pt-4 mx-auto">
            {{ $products->links() }}
        </div>
    </div>
</div>
</body>
</html>
