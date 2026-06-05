@extends('layout')

@section('content')

<!-- HERO SECTION -->
<div class="container py-5">

    <div class="row align-items-center g-5">

        <!-- LEFT CONTENT -->
        <div class="col-lg-6">

            <h1 class="display-2 fw-bold lh-1 mb-4">
                Discover Authentic
                <span class="text-success">
                    Cambodian Products
                </span>
            </h1>

            <p class="fs-4 text-secondary mb-4">
                Explore Cambodia's finest rice, Kampot pepper,
                cashew nuts, coffee, clothing, accessories and
                traditional products delivered to your doorstep.
            </p>

            <div class="d-flex gap-3">

                <a href="#categories"
                   class="btn btn-success btn-lg px-4 py-3 rounded-pill shadow">
                    Explore Products →
                </a>

                <a href="#featured"
                   class="btn btn-outline-success btn-lg px-4 py-3 rounded-pill">
                    View Collection
                </a>

            </div>

        </div>

        <!-- RIGHT IMAGES -->
        <div class="col-lg-6">

            <div class="d-flex flex-column gap-4">

                <img src="{{ asset('images/hero-rice.jpg') }}"
                     class="img-fluid rounded-4 shadow"
                     style="height:300px;width:100%;object-fit:cover;">

                <img src="{{ asset('images/hero-coconut.jpg') }}"
                     class="img-fluid rounded-4 shadow"
                     style="height:300px;width:100%;object-fit:cover;">

            </div>

        </div>

    </div>

</div>

<!-- CATEGORIES -->
<div class="container py-5" id="categories">

    <h2 class="text-center fw-bold mb-5">
        Product Categories
    </h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center py-5">

                    <i class="bi bi-tree-fill display-1 text-success"></i>

                    <h3 class="mt-3">
                        Agriculture
                    </h3>

                    <p>
                        Cambodian rice, pepper, cashew nuts and coffee.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center py-5">

                    <i class="bi bi-cup-straw display-1 text-success"></i>

                    <h3 class="mt-3">
                        Drinks
                    </h3>

                    <p>
                        Palm juice, coconut water and roselle drinks.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center py-5">

                    <i class="bi bi-bag-fill display-1 text-success"></i>

                    <h3 class="mt-3">
                        Accessories
                    </h3>

                    <p>
                        Traditional Cambodian accessories and souvenirs.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center py-5">

                    <i class="bi bi-shop display-1 text-success"></i>

                    <h3 class="mt-3">
                        Food Products
                    </h3>

                    <p>
                        Traditional Cambodian snacks and food products.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow border-0 h-100">
                <div class="card-body text-center py-5">

                    <i class="bi bi-person-fill display-1 text-success"></i>

                    <h3 class="mt-3">
                        Clothing
                    </h3>

                    <p>
                        Traditional Khmer clothing and fashion products.
                    </p>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection