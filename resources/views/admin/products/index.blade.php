<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Add Product</a>

    <div>
        @if(session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
<th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category?->name ?? '—' }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->stock_quantity }}</td>
<td>
                    <a href="{{ route('products.edit', $product) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
