@extends('layout')

@section('content')
<div class="container py-5">

    @forelse($categories as $category)
        @if($category->products->isNotEmpty())
            <div class="mb-5">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="mb-0 text-success fw-semibold">{{ $category->name }}</h4>
                    <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-outline-success">
                        View All <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                    @foreach($category->products as $product)
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title fw-semibold">{{ $product->name }}</h6>
                                    <p class="card-text text-muted small flex-grow-1">
                                        {{ Str::limit($product->description, 80) }}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between mt-3">
                                        <span class="text-success fw-bold">${{ number_format($product->price, 2) }}</span>
                                        <span class="badge {{ $product->stock_quantity > 0 ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }}">
                                            {{ $product->stock_quantity > 0 ? 'In Stock' : 'Out of Stock' }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                                    <button class="btn btn-success btn-sm w-100" {{ $product->stock_quantity < 1 ? 'disabled' : '' }}>
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @empty
        <div class="text-center py-5 text-muted">
            <i class="bi bi-basket2 fs-1 d-block mb-3"></i>
            <p>No products available yet.</p>
        </div>
    @endforelse

</div>
@endsection
