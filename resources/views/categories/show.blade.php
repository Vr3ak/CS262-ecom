@extends('layout')

@section('content')
<div class="container py-5">

    <div class="d-flex align-items-center mb-4 gap-2">
        <a href="{{ url('/') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back
        </a>
        <h4 class="mb-0 text-success fw-semibold">{{ $category->name }}</h4>
    </div>

    @if($products->isEmpty())
        <div class="text-center py-5 text-muted">
            <i class="bi bi-basket2 fs-1 d-block mb-3"></i>
            <p>No products in this category yet.</p>
        </div>
    @else
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach($products as $product)
                @include('customer.partials.product-card', ['product' => $product])
            @endforeach
        </div>
    @endif

</div>
@endsection
