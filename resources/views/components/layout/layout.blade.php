<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="content-logo">
            <a href="{{ url('companies') }}"> Proof</a>
        </div>
        <div class="content-menu">
            <ul>
                <li><a href="{{ url('companies') }}">Companies</a></li>
                <li><a href="{{ url('employees') }}">Employees</a></li>
            </ul>
        </div>
        <div class="content-logout">
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit">Log out</button>
            </form>
        </div>
    </nav>

    <section class="main">
        @yield('content')
    </section>
</body>
</html>
