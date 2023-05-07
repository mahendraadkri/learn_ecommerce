<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is home page</title>
    <link rel="stylesheet" href="{{asset('mycss/style.css')}}">
</head>


<body>
    <nav class="navbar">
        <ul class = "menu">
            <li><a href="/welcome">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>
    @yield('content')

    <footer class="footer">
        <p>This is Footer</p>
    </footer>

    
</body>
</html>