<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
</head>
<body>
    <div class="container">
        <h1>@yield("titoloPagina")</h1>
        @yield("btnCreate")
        <hr>
    
        @yield("content")
    </div>
</body>
</html>