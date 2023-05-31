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
            <li><a href="/welcome">Home</a></li>
            @foreach ($categories as $category )
            <li><a href="/">{{$category->name}}</a></li>
                
            @endforeach
            @if (auth()->user())
            <li><a href="">{{auth()->user()->name}}</a></li>
            <li>
                <form class="inline text-white" action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit">OUT</button>
                </form>
            </li>
                
            @endif
            
            
        </ul>
    </nav>
    @yield('content')

    <footer class="footer">
        <p>This is Footer</p>
    </footer>

    
</body>
</html>