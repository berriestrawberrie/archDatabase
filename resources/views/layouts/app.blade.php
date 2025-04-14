<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    @include('layouts/head')
    @yield('customhead')
        
</head>

    @include('layouts/navbar')
    <div class="container">
    @include('layouts.alerts')
    </div>
    <div class="container text-bg-light">
        @yield('content')
    </div>
  
    
</body>
</html>