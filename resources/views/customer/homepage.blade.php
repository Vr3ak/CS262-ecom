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
                        @include('customer.partials.product-card', ['product' => $product])
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
