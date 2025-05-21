<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'txurdispoti') }}</title>
</head>

<body>

    <header>
        @include('partials.header')
    </header>

    <main style="margin-left:15px;">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>

<style>
    * {
        overflow-x: hidden;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: rgb(34, 34, 34);
        color: white;
    }
</style>

</html>
