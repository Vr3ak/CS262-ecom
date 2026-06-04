<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>    
        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="price" step="0.01" min="0" value="{{ old('price') }}">
        </div>
        <div>
            <label>Stock Quantity</label>
            <input type="number" name="stock_quantity" min="0" value="{{ old('stock_quantity', 0) }}">
        </div>
        <div>
            <label>Category</label>
            <select name="category_id">
                <option value="">— None —</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
<div>
            <input type="submit" value="Save Product">
        </div>
    </form>

    <a href="{{ route('products.index') }}">Back</a>
</body>
</html>
