<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}">
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $product->description }}</textarea>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}">
        <br>
        <button type="submit">Update Product</button>
    </form>
    <br>
    <a href="{{ route('products.index') }}">Back to List</a>
</body>
</html>
