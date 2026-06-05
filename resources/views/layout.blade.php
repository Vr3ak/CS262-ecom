<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambodia E-Commerce</title>

    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambodia E-Commerce</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    html{
        scroll-behavior:smooth;
    }

    body{
        margin:0;
        padding:0;
    }

    .page{
        background-color:#eef8ee;
    }

    .navbar{
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand{
        font-size:1.5rem;
        font-weight:bold;
    }

    .nav-link{
        transition:0.3s;
    }

    .nav-link:hover{
        color:#d4ffd4 !important;
        transform:translateY(-2px);
    }

    .category-card,
    .product-card{
        border:none;
        transition:0.3s;
    }

    .category-card:hover,
    .product-card:hover{
        transform:translateY(-8px);
        box-shadow:0 10px 25px rgba(0,0,0,0.15);
    }

    .btn-success{
        transition:0.3s;
    }

    .btn-success:hover{
        transform:translateY(-2px);
    }

    .card-img-top{
        height:220px;
        object-fit:cover;
    }

    footer{
        margin-top:50px;
    }

    footer a{
        transition:0.3s;
    }

    footer a:hover{
        text-decoration:underline !important;
    }

    .icon-link{
        transition:0.3s;
    }

    .icon-link:hover{
        transform:scale(1.15);
    }
</style>

</head>

<body>

<div class="page">

<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top px-5">
    <div class="container-fluid">

        <a class="navbar-brand text-white" href="/">
            E-Commerce of Cambodia's Products
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end"
             id="navbarNav">

            <div class="navbar-nav">

                <a class="nav-link px-4 text-white"
                   href="{{ route('categories.electronics') }}">
                    Electronics
                </a>

                <a class="nav-link px-4 text-white"
                   href="{{ route('categories.agricultural') }}">
                    Agriculture
                </a>

                <a class="nav-link px-4 text-white"
                   href="{{ route('categories.drinks') }}">
                    Drinks
                </a>

                <a class="nav-link px-4 text-white"
                   href="{{ route('categories.accessories') }}">
                    Accessories
                </a>

                <a class="nav-link px-4 text-white"
                   href="{{ route('categories.clothing') }}">
                    Clothing
                </a>

            </div>

            <div class="ms-4">
                <a href="/" class="text-white icon-link">
                    <i class="bi bi-basket2-fill fs-4"></i>
                </a>
            </div>

            <div class="ms-4">
                <a href="{{ route('auth.login') }}"
                   class="text-white icon-link">
                    <i class="bi bi-person-circle fs-4"></i>
                </a>
            </div>

        </div>
    </div>
</nav>

@yield('content')

<footer class="bg-success text-white pt-4 pb-2 px-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-4">
                <h5><u>About Us</u></h5>

                <p>
                    Discover authentic Cambodian products,
                    traditional goods and local brands through
                    our online marketplace.
                </p>
            </div>

            <div class="col-md-4">
                <h5><u>Quick Links</u></h5>

                <ul class="list-unstyled">

                    <li>
                        <a href="{{ route('categories.electronics') }}"
                           class="text-white text-decoration-none">
                            Electronics
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('categories.agricultural') }}"
                           class="text-white text-decoration-none">
                            Agriculture
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('categories.drinks') }}"
                           class="text-white text-decoration-none">
                            Drinks
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('categories.accessories') }}"
                           class="text-white text-decoration-none">
                            Accessories
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('categories.clothing') }}"
                           class="text-white text-decoration-none">
                            Clothing
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-md-4">
                <h5><u>Follow Us</u></h5>

                <a href="#" class="text-white me-3">
                    <i class="bi bi-facebook fs-5"></i>
                </a>

                <a href="#" class="text-white me-3">
                    <i class="bi bi-twitter fs-5"></i>
                </a>

                <a href="#" class="text-white">
                    <i class="bi bi-instagram fs-5"></i>
                </a>
            </div>

        </div>

        <hr>

        <div class="text-center">
            <p class="mb-0">
                © 2026 Cambodia E-Commerce. All rights reserved.
            </p>
        </div>

    </div>

</footer>
```

</div>

</body>
</html>


</div>
</body>
</html>