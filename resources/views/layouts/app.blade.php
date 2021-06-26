<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex item-center">
            <li>
                <a href="{{route('home')}}" class="p-3">Home</a>
            </li>
        </ul>

        <ul class="flex item-center">
            @guest
                <li>
                    <a href="{{route('register')}}" class="p-3">Register</a>
                </li>
                <li>
                    <a href="{{route('login')}}" class="p-3">login</a>
                </li>
            @endguest
            @auth
                <li>
                    <a href="{{route('trip')}}" class="p-3">add trip</a>
                </li>
                <li>
                    <a href="{{route('registration')}}" class="p-3">register a trip</a>
                </li>
                <li>
                    <a href="{{route('bus')}}" class="p-3">add Bus</a>
                </li>
                <li>
                    <a href="{{route('logout')}}" class="p-3">logout</a>
                </li>
            @endauth



        </ul>

    </nav>
    @yield('content')
</body>
</html>
