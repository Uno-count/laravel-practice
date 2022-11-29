<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div>
        Name: {{ auth()->user()->firstname }} {{ auth()->user()->lastname }} <br/>
    </div>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/cart') }}">Cart</a></li>
        <li><a href="{{ url('/orders') }}">Orders</a></li>
        <li>
            <form method="POST" action="{{url('/logout')}}">
                @csrf

                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>
    
</body>
</html>