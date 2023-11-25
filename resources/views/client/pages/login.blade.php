<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/userAuth.css">
</head>

<body>
    <div class="main-block">
        <h1>Login</h1>
        <form action="{{route('login-user')}}" method="post">
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif

            @csrf
            <hr>
            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email" required />
            <span class="text text-danger">@error('email') {{$message}} @enderror</span>
            
            <label id="icon" for="password"><i class="fas fa-unlock-alt"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" required />
            <span class="text text-danger">@error('password') {{$message}} @enderror</span>
            <hr>
            <div class="btn-block">
                <p>If you have no account, click <a href="{{route('registration')}}">registration</a>.</p>
                <button type="submit">Login</button>
            </div>
            <hr>
            <div class="btn-block">
                <button type="button"><a href="{{route('home')}}" style="text-decoration:none; color: white;">Home</a></button>
            </div>
        </form>
    </div>
</body>

</html>