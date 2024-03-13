<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/img/favicon.ico" sizes="16x16 24x24 32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL - COMICS </title>

    @vite('resources/js/app.js')

    {{-- LINK FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    @include('shared.header')
    <main>
        @yield('main')
    </main>
    @include('shared.footer')

</body>
</html>
