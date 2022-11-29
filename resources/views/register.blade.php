<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form method="POST" action="{{url('/register')}}">
        @csrf
        <h1>Register to your account</h1>
        <div>
            <label>First Name: </label>
            <input type="text" name="firstname">
        </div>

        <div>
            <label>Last Name: </label>
            <input type="text" name="lastname">
        </div>

        <div>
            <label>Email: </label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Password: </label>
            <input type="password" name="password">
        </div>

        <div>
            <label>Re-enter Password: </label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit">Submit</button>
    </form>
    <p>Already have an account? Login <a href="{{url('/login')}}">here</a></p>
</body>
</html>