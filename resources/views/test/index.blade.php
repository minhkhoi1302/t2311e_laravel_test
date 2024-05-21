

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Type</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->ProductType }}</td>
            <td>{{ $product->ProductCode }}</td>
            <td>{{ $product->ProductName }}</td>
            <td>{{ $product->Quantity }}</td>
            <td>{{ $product->Note }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('products.create') }}">Add New Product</a>
</body>
</html>