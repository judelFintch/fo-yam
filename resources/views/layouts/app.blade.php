<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') </title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/main.css')}}">
    </head>
    
    <body class="bg-white overflow-x-hidden">
        @include('partials.nav')
            @yield('content')
        @include('partials.footer')
        <script src="assets/main.js"></script>
    </body>
</html>




