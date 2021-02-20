<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Post App</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-green-100">
    <nav class="px-10 py-6 bg-white flex justify-between mb-6">
        
        <p class="text-xl font-semibold ml-5">LaraForum</p>

        <ul class="flex item-center mr-5">
            <li><a class="p-3" href="{{route('home')}}">Forum</a></li>
            @guest
            <li><a class="p-3" href="{{route('login')}}">Login</a></li>
            <li><a class="p-3" href="{{route('register')}}">Register</a></li>
            @endguest
            @auth
            <x-dropdownComponent />
            @endauth
        </ul>
    </nav>    
    @yield('content')
</body>
</html>