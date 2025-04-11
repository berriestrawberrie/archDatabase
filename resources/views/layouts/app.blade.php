<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    @include('layouts/head')
        
</head>

    @include('layouts/navbar')
    @include('layouts.alerts')
    <div class="container text-bg-light col-lrg">
        @yield('content')
    </div>
  
    
</body>
</html>