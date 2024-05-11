<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/favicon.ico') }}">
    <style>
        * {
            /* border: 1px solid red; */
        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">Todo App</a>
            @auth
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hello, {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login.logout') }}">Logout</a></li>
                    </ul>
                </div>
            @endauth
        </div>
    </nav>

    <main class="container mt-5">
        @yield('content')
    </main>
</body>

</html>
