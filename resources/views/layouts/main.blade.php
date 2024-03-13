<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL - COMICS </title>

        @vite('resources/js/app.js')

</head>
<body>

    @include('shared.header')
    <main>
        @yield('main')
    </main>
    @include('shared.footer')
    
</body>
</html>
