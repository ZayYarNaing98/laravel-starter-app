<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Category</h2>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}">
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $category->description }}</textarea>
        <br>
        <button type="submit">Update Category</button>
    </form>
    <br>
    <a href="{{ route('categories.index') }}">Back to List</a>
</body>
</html>
