<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{url('/login')}}">
        @csrf

        <h1>Login</h1>

        <div>
            <label>Email: </label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>

        <button type="submit">Submit</button>
    </form>
    <p>Don't have an account? Sign up <a href="{{url('/register')}}">here</a></p>
</body>
</html>