<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#eef8ee;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .register-card{
            width:500px;
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
        }

        .register-icon{
            width:80px;
            height:80px;
            background:#198754;
            color:white;
            border-radius:50%;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:35px;
            margin:auto;
            margin-bottom:20px;
        }

        .btn-register{
            background:#198754;
            border:none;
        }

        .btn-register:hover{
            background:#157347;
        }
    </style>
</head>

<body>

    <div class="register-card">

        <div class="register-icon">
            👤
        </div>

        <h2 class="text-center text-success fw-bold">
            Create Account
        </h2>

        <p class="text-center text-muted mb-4">
            Enter your details to register
        </p>

        <form action="{{ route('auth.register.store') }}" method="post">

            @csrf

            <div class="mb-3">
                <label class="form-label">
                    Full Name
                </label>
                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="Enter your full name">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Email Address
                </label>
                <input type="text"
                       name="email"
                       class="form-control"
                       placeholder="Enter your email">
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Password
                </label>
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Enter password">
            </div>

            <button type="submit"
                    class="btn btn-register text-white w-100 py-2">
                Register
            </button>

        </form>

    </div>

</body>
</html>