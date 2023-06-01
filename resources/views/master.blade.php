<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is title</title>
    <link rel="stylesheet" href="{{asset('mycss/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex px-24 justify-between bg-gray-300 p-2 text-lg">
        <span>Ph: 0564564656</span>
        @if(auth()->user())
            <div>
                <a href="">{{auth()->user()->name}} /</a>
                <form class="inline" action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit"> Logout</button>
                </form>
            </div>
            @else
        <span><a href="{{route('userlogin')}}">Login/Register</a></span>
        @endif
    </div>
    <nav class="navbar sticky top-0">
        <ul class="menu">
            <li><a href="/">Home</a></li>
            @foreach($categories as $category)
            <li><a href="/">{{$category->name}}</a></li>
            @endforeach
            
        </ul>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>This is footer</p>
    </footer>

    
</body>
</html>