<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    
    <main>
        @include('partials.components.products')
        @include('partials.components.list')
    </main>

    @include('partials.footer')
</body>
</html>