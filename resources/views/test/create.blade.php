<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
    <input type="text" name="ProductType" placeholder="Product Type" value="{{ old('ProductType') }}">
    <!-- Add input fields for other attributes -->
    <button type="submit">Add Product</button>
</form>
</body>
</html>