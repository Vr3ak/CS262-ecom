<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="{{route('auth.register.store')}}" method="post">
        @csrf
        <div>
            <label>Full Name</label>
            <input type="text" name="name"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email"/>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password"/>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>
</html>