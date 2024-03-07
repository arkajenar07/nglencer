
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex contain">
    <div class="log-img">
        <a href="{{url("/")}}"><h1 class="logo">Ngelenc<span>.er</span></h1></a>
        <h2>Welcome, Back</h2>
    </div>
    <div class="text-content">
        <h1>Welcome to Ngelencer</h1>
        <h3>Login to Your Account</h3>
        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <div class="username flex flex-col">
                <label for="">Username</label>
                <input type="text" name="email" id="">
            </div>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <div class="password flex flex-col">
                <label for="">Password</label>
                <input type="password" name="password" id="">
            </div>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <button type="submit" >Login</button>
    </form>
    <h4>Didn't Have Account ? <a href="{{ url("/register") }}">Register</a></h4>
    </div>
    </div>
</body>
</html>

