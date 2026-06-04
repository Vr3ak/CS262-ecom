<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit User</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $errors)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{route('users.update', ['user' => $user])}}">
        @csrf
        @method('PUT')
        <div>
            <label>Full Name</label>
            <input type="text" name="name" value="{{$user->name}}"/>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="{{$user->email}}"/>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>

</body>
</html>