<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title') - LaravelBlog</title>
</head>

<body>
    @include('dashboard.partials.nav-main')


    <div class="container">
        @yield('content')
        
    </div>


    @yield('script')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
