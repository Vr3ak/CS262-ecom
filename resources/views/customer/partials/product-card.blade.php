<div class="col">
    <div class="card h-100 shadow-sm border-0">
        @if($product->image)
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}"
                 style="height:200px;object-fit:cover;">
        @else
            <div class="d-flex align-items-center justify-content-center bg-light text-muted"
                 style="height:200px;">
                <div class="text-center">
                    <i class="bi bi-image fs-1 d-block mb-1"></i>
                    <small>No Image</small>
                </div>
            </div>
        @endif
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
