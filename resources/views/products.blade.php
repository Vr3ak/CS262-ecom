<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; }

        h1 { margin-bottom: 20px; }

        .alert { margin-bottom: 16px; color: green; }

        /* Form */
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 500px;
            margin-bottom: 40px;
            background: #fafafa;
        }
        .form-box h3 { margin-bottom: 14px; }
        .form-box input,
        .form-box textarea {
            width: 100%;
            padding: 7px 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            box-sizing: border-box;
        }
        .form-box textarea { height: 70px; resize: none; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 10px; }
        .form-row input { margin-bottom: 0; }
        .checkbox-row { display: flex; align-items: center; gap: 8px; margin-bottom: 12px; font-size: 14px; }
        .checkbox-row input { width: auto; margin: 0; }
        .btn-submit {
            padding: 7px 18px;
            background: #fff;
            border: 1px solid #999;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-submit:hover { background: #f0f0f0; }

        /* Table */
        table { border-collapse: collapse; width: 100%; font-size: 14px; }
        th, td { border: 1px solid #ccc; padding: 10px 14px; text-align: left; }
        th { background: #f5f5f5; }

        .product-desc { font-size: 12px; color: #888; margin-top: 2px; }
        .compare-price { font-size: 12px; color: red; text-decoration: line-through; }

        a.btn-edit { color: #1a0dab; text-decoration: none; }
        a.btn-edit:hover { text-decoration: underline; }

        button.btn-delete {
            padding: 4px 12px;
            border: 1px solid #ccc;
            background: #fff;
            cursor: pointer;
        }
        button.btn-delete:hover { background: #fdf0f0; border-color: #c00; color: #c00; }
    </style>
</head>
<body>

    <h1>Products</h1>

    @if(session('success'))
        <p class="alert">{{ session('success') }}</p>
    @endif

    {{-- Create Form --}}
    <div class="form-box">
        <h3>Create New Product</h3>
        <form action="/create-product" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Product Name" required>
            <textarea name="description" placeholder="Description..."></textarea>
            <div class="form-row">
                <input type="text" name="sku" placeholder="SKU (e.g. PROD-001)" required>
                <input type="number" name="stock_quantity" placeholder="Stock Quantity" required>
            </div>
            <div class="form-row">
                <input type="number" name="price" step="0.01" placeholder="Price" required>
                <input type="number" name="compare_price" step="0.01" placeholder="Compare Price (optional)">
            </div>
            <div class="checkbox-row">
                <input type="checkbox" name="is_active" value="1" id="isActive" checked>
                <label for="isActive">Active</label>
            </div>
            <button type="submit" class="btn-submit">Create Product</button>
        </form>
    </div>

    {{-- Products Table --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>
                    <strong>{{ $product->name }}</strong>
                    <div class="product-desc">{{ $product->description }}</div>
                </td>
                <td>{{ $product->sku }}</td>
                <td>
                    ${{ number_format($product->price, 2) }}
                    @if($product->compare_price)
                        <div class="compare-price">${{ number_format($product->compare_price, 2) }}</div>
                    @endif
                </td>
                <td>{{ $product->stock_quantity }}</td>
                <td>{{ $product->is_active ? 'Active' : 'Inactive' }}</td>
                <td><a class="btn-edit" href="/edit-product/{{ $product->id }}">Edit</a></td>
                <td>
                    <form action="/delete-product/{{ $product->id }}" method="POST" style="margin:0;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>