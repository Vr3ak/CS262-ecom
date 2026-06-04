<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <a href="{{ route('users.index') }}">Manage Users</a>
    <a href="{{ route('products.index') }}">Manage Products</a>
</body>
</html>