<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-container { background: #f9f9f9; padding: 20px; border: 1px solid #ccc; max-width: 500px; }
        .form-container input, .form-container textarea { display: block; width: 100%; margin-bottom: 10px; padding: 6px; box-sizing: border-box; }
    </style>
</head>
<body>

    <h1>Edit Product</h1>

    <div class="form-container">
        <form action="/update-product/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <label>Product Name</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
            
            <label>Description</label>
            <textarea name="description">{{ $product->description }}</textarea>
            
            <label>SKU</label>
            <input type="text" name="sku" value="{{ $product->sku }}" required>
            
            <label>Price</label>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
            
            <label>Compare Price</label>
            <input type="number" name="compare_price" step="0.01" value="{{ $product->compare_price }}">
            
            <label>Stock Quantity</label>
            <input type="number" name="stock_quantity" value="{{ $product->stock_quantity }}" required>
            
            <div style="margin-bottom: 10px;">
                <input type="checkbox" name="is_active" value="1" id="isActive" {{ $product->is_active ? 'checked' : '' }} style="width: auto; display: inline-block;">
                <label for="isActive">Active</label>
            </div>
            
            <button type="submit">Save Changes</button>
            <a href="/products" style="margin-left: 10px;">Cancel</a>
        </form>
    </div>

</body>
</html>