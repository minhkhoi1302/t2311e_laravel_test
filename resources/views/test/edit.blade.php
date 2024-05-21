<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
    <input type="text" name="ProductType" placeholder="Product Type" value="{{ $product->ProductType }}">
    <button type="submit">Update Product</button>
</form>

</body>
</html>