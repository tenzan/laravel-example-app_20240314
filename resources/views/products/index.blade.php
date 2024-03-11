<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure Tailwind CSS is linked -->
</head>
<body class="bg-gray-100">
<div class="container mx-auto px-4">
    <h1 class="text-xl font-bold my-8">Product List</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($products as $product)
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-2">{{ $product->name }}</h2>
                <p class="text-gray-800 mb-4">$ {{ number_format($product->price, 2) }}</p>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Add to Basket
                </button>
            </div>
        @empty
            <div class="col-span-full text-center">
                <p class="text-gray-800">No products available.</p>
            </div>
        @endforelse
    </div>
</div>
</body>
</html>
