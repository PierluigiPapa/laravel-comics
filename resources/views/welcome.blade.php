<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        @vite('resources/js/app.js')

</head>
<body>

    <header class="container d-flex align-items-center justify-content-between">
        <div class="ec-logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc-comics">
        </div>
        <nav class="nav">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/prodotti">Prodotto</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled">Disabled</a>
        </nav>
    </header>
    
</body>
</html>