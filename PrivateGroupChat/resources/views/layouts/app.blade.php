<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\css\app.css', 'resources\bootstrap-5.3.8-dist\bootstrap-5.3.8-dist\css\bootstrap.min.css','resources\bootstrap-icons-1.13.1\bootstrap-icons-1.13.1\bootstrap-icons.css', 'resources\js\app.js', 'resources\bootstrap-5.3.8-dist\bootstrap-5.3.8-dist\js\bootstrap.min.js'])
</head>
<body>
    @yield('header')

    <main class="container-fluid">
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-md-3 border-right border-right-1"></div>
            <div class="col-4 ">
                @yield('login')
            </div>
            <div class="col-md-3 border-left border-left-1"></div>
        </div>
    </main>
    <footer class="container-fluid">
        @yield('footer')
    </footer>
</body>
</html>
