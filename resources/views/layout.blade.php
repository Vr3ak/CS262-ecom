<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambodia E-Commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .page {
            background-color:honeydew;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="bg-success">
        <nav class="navbar navbar-expand-lg navbar-light px-5">
            <div class="container-fluid">
                <a class="navbar-brand text-white" style="font-weight: bold" href="/">E-Commerce of Cambodia's Products</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link px-5 text-white" href="/">Electronics</a>
                        <a class="nav-link pe-5 text-white" href="/">Agriculture</a>
                        <a class="nav-link pe-5 text-white" href="/">Drinks</a>
                        <a class="nav-link pe-5 text-white" href="/">Accessories</a>
                        <a class="nav-link pe-5 text-white" href="/">Clothing</a>
                    </div>
                    <div class="ps-5">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                                <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1"/>
                            </svg>
                        </a>
                    </div>
                    <div class="ps-5">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        </div>

        @yield('content')

        <div class="pt-3 px-5 bg-success text-white">
        <footer class="mx-3">
                <div class="row">
                    <div class="col-md-4 pe-5">
                        <h5><u>About Us</u></h5>
                        <p>Find out more about authentic Cambodian Products across our page.</p>
                    </div>
                    <div class="col-md-4 ps-5">
                        <h5><u>Quick Links</u></h5>
                        <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-white">Electronics</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Agriculture</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Drinks</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Accessories</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Clothing</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 ps-5">
                        <h5><u>Follow Us</u></h5>
                        <ul class="list-inline social-icons">
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="bi bi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="bi bi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="text-white"><i class="bi bi-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <hr class="mb-3">
                <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2026 Cambodia E-Commerce. All rights reserved.</p>
                </div>
                </div>
        </footer>
        </div>
    </div>
</body>
</html>