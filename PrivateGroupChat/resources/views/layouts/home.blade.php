<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\css\app.css',
    'resources\bootstrap-5.3.8-dist\bootstrap-5.3.8-dist\css\bootstrap.min.css',
    'resources\bootstrap-icons-1.13.1\bootstrap-icons-1.13.1\bootstrap-icons.css',
    'resources\tabler\core\dist\css\tabler.min.css',

    'resources\js\app.js',
    'resources\bootstrap-5.3.8-dist\bootstrap-5.3.8-dist\js\bootstrap.min.js',
    'resources\tabler\core\dist\js\tabler.min.js'
    ])
</head>
<body>
    @yield('header')

    <div class="page-wrapper">
        @yield('chat-box')
    </div>
    <footer class="container-fluid">
        @yield('footer')
    </footer>
</body>
</html>
