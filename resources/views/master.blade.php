<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is home page</title>
    <link rel="stylesheet" href="{{asset('mycss/style.css')}}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>


<body>
    <nav class="navbar">
        <ul class = "menu">
            @foreach ($categories as $category )
            <li><a href="/">{{$category->name}}</a></li>
                
            @endforeach
            <li><a href="/welcome">Home</a></li>
            
        </ul>
    </nav>
    @yield('content')

    <footer class="footer">
        <p>This is Footer</p>
    </footer>

    
</body>
</html>