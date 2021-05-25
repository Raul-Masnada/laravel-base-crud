<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            @include('components.header')
        </div>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>
        @include('components.footer')
    </footer>

</body>
</html>
