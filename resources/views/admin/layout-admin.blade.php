<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="page">
        <div class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light px-5 border-bottom border-2">
            <div class="container-fluid">
                <a class="navbar-brand text-success fw-bold" href="/admin/dashboard">Cambodia E-Commerce Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup"></div>
                <div class="ps-4">
                    <a href="{{ route('auth.login') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </a>
                </div>
                <div class="px-2">
                    <p class="text-success m-0" style="font-weight: bold">{{ auth()->user()->name }}</p>
                </div>
                <div class="border-success border-1" style="border:solid; height:30px"></div>
                <div class="ps-3">
                        <form action="/logout" method="POST" class="m-0">
                            @csrf
                            <button class="btn border-success border-2 rounded text-success p-1 fw-bold" style="width:130px; font-size:12px">Logout</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </nav>
    </div>

    <div class="min-vh-100" style="background-color:aliceblue">
        <div class="container">
        @yield('content')
        </div>
    </div>

    <div class="page">
        <footer class="bg-light border-top border-bottom border-2 text-success">
                <div class="col-md-12 pt-3 ps-5 text-start">
                    <p>&copy; 2026 Cambodia E-Commerce. All rights reserved.</p>
                </div>
                </div>
        </footer>
    </div>
</body>
</html>