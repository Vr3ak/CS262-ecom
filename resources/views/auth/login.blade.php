<html lang="en">
<head>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body{
        background:#eef8ee;
        min-height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .login-card{
        width:500px;
        background:white;
        padding:40px;
        border-radius:20px;
        box-shadow:0 10px 25px rgba(0,0,0,0.1);
    }

    .login-icon{
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

    .btn-login{
        background:#198754;
        border:none;
    }

    .btn-login:hover{
        background:#157347;
    }
</style>

</head>

<body>

<div class="login-card">

<div class="login-icon">
    🔐
</div>

<h2 class="text-center text-success fw-bold">
    Welcome Back
</h2>

<p class="text-center text-muted mb-4">
    Login to your account
</p>

<form action="{{ route('auth.login.store') }}" method="post">

    @csrf

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
               placeholder="Enter your password">
    </div>

    <button type="submit"
            class="btn btn-login text-white w-100 py-2">
        Login
    </button>

    <div class="text-center mt-4">
        Don't have an account?
        <a href="{{ route('auth.register') }}"
           class="text-success fw-bold text-decoration-none">
            Register
        </a>
    </div>

</form>

</div>

</body>
</html>

</html>