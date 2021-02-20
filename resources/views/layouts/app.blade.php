<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Post App</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        
        <p class="text-xl font-semibold">LaraForum</p>

        <ul class="flex item-center">
            <li><a class="p-3" href="{{route('subjects.index')}}">Home</a></li>
            @guest
            <li><a class="p-3" href="{{route('login')}}">Login</a></li>
            <li><a class="p-3" href="{{route('register')}}">Register</a></li>
            @endguest
            @auth
            <li><a class="p-3" href="{{route('dashboard')}}">Dashboard</a></li>
            <li><a class="p-3" href="">{{auth()->user()->name}}</a></li>
            <li><a class="p-3" href="{{route('logout')}}">Logout</a></li>
            @endauth
        </ul>
    </nav>    
    @yield('content')
</body>
</html>