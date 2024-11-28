<html>
    <head>
        <title>Salish App - @yield('title')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="container mx-auto px-4 py-4">
            @yield('content')
        </div>
    </body>
</html>