<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
<h1>Product List</h1>
<ul>
    @forelse ($products as $product)
        <li>{{ $product->name }} - ${{ number_format($product->price, 2) }}</li>
    @empty
        <li>No products available.</li>
    @endforelse
</ul>
</body>
</html>
