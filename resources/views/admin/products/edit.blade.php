@extends('admin.layout-admin')
@section('content')
<div class="row justify-content-start">
        <div class="col-12 mt-5">
            <div class="card shadow-sm border-2">
                <div class="card-header text-center py-3 text-success border border-light">
                    <i class="bi bi-box-seam-fill fs-3 d-block mb-2"></i>
                    <h4 class="mb-2">Edit Product</h4>
                </div>
                <div>
                    @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $errors)
                            <li>{{$errors}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="card-body p-4 text-center">
                    <div class="text-success fw-bold border border-2 rounded overflow-hidden p-2">
                        <form method="post" action="{{ route('products.update', $product) }}">
                            @csrf
                            @method('put')
                            <div class="row justify-content-center m-1">
                                <label class="col-2">Product Name</label>
                                <input type="text" name="name" class="col-3" value="{{ old('name', $product->name) }}">
                            </div>
                            <div class="row justify-content-center m-1">
                                <label class="col-2">Description</label>
                                <textarea class="col-3" name="description">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <div class="row justify-content-center m-1">
                                <label class="col-2">Price</label>
                                <input type="number" name="price" step="0.01" min="0" class="col-3" value="{{ old('price', $product->price) }}">
                            </div>
                            <div class="row justify-content-center m-1">
                                <label class="col-2">Stock Quantity</label>
                                <input type="number" name="stock_quantity" min="0" class="col-3" value="{{ old('stock_quantity', $product->stock_quantity) }}">
                            </div>
                            <div class="row justify-content-center m-1">
                                <label class="col-2">Category</label>
                                <select class="col-3" name="category_id">
                                    <option value="">— None —</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Update" class="btn border-success border-2 text-success fw-bold bg-light">
                            </div>
                            </div>
                        </form>

                        <div class="d-flex align-items-center mt-4 mb-4">
                        <a href="{{  route('products.index')  }}" class="btn border-success border-2 text-success fw-bold bg-light">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection
    
