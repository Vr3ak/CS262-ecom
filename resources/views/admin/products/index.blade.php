@extends('admin.layout-admin')
@section('content')
    <div class="row justify-content-start">
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="col-12 mt-5">
            <div class="card shadow-sm border-2">
                <div class="card-header text-center py-3 text-success border border-light">
                    <i class="bi bi-box-seam-fill fs-3 d-block mb-2"></i>
                    <h4 class="mb-2">Admin Users' Products Page</h4>
                </div>
                <div class="card-body p-4 text-center">
                    <div class="text-success fw-bold border border-2 rounded overflow-hidden">
                        <table class="table mb-0">
                            <thead>
                                <tr class="text-success">
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="text-black">
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            @if($product->image)
                                                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                                     width="50" height="50" style="object-fit:cover;border-radius:6px;">
                                            @else
                                                <div style="width:50px;height:50px;background:#e9ecef;border-radius:6px;display:flex;align-items:center;justify-content:center;margin:auto;">
                                                    <i class="bi bi-image text-muted"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category?->name ?? '—' }}</td>
                                        <td>${{ number_format($product->price, 2) }}</td>
                                        <td>{{ $product->stock_quantity }}</td>
                                        <td>
                                            <a href="{{ route('products.edit', $product) }}" class="btn p-1 text-success fw-bold bg-light text-decoration-none border-success rounded border-2">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('products.destroy', $product) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn p-1 text-danger fw-bold bg-light border-danger rounded border-2">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-start">
                        <div class="d-flex col-auto mt-4 mb-4">
                            <a href="{{ url('/admin/dashboard') }}" class="btn border-success border-2 text-success fw-bold bg-light">
                                <i class="bi bi-arrow-left"></i> Back
                            </a>
                        </div>
                        <div class="d-flex col-auto mt-4 mb-4">
                            <a href="{{ route('products.create') }}" class="btn border-success border-2 text-success fw-bold bg-light">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
