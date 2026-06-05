<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create User</h1>

   

    <form method="post" action="{{route('users.store')}}">
        @csrf
        
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $errors)
                        <li>{{$errors}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

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
            <input type="submit" value="Save User">
        </div>
    </form>

</body>
</html>